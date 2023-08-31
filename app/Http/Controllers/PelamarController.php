<?php

namespace App\Http\Controllers;

use App\Models\Pelamar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PelamarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->cari){
            $cari=$request->cari;
            
            $data=Pelamar::where('nik','like',"%".$cari."%")->orWhere('nama','like',"%".$cari."%")->orWhere('pendidikan','like',"%".$cari."%")->paginate(5);
            
        }else{
            $data=Pelamar::orderBy('nik')->paginate(5);
        }
        $data->appends($request->all());
        return view('Pelamar.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pelamar.tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'foto' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);
        $imageName = $request->nama.'-'.now()->timestamp. '.' . $request->foto->extension();
        $request->foto->storeAs('public/photos', $imageName);
    
        $postData = ['nama' => $request->nama,
            'nik' => $request->nik,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'alamat' => $request->alamat,
            'nomor_hp' => $request->nomor_hp,
            'email' => $request->email,
            'pendidikan' => $request->pendidikan,
            'institusi' => $request->institusi,
            'posisi' => $request->posisi,
            'foto' => $imageName];
        
        Pelamar::create($postData);
        return redirect('/pelamar')->with('sukses','Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pelamar  $pelamar
     * @return \Illuminate\Http\Response
     */
    public function show(Pelamar $pelamar)
    {
    
        return view('pelamar.detail', compact('pelamar'));
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pelamar  $pelamar
     * @return \Illuminate\Http\Response
     */
    public function edit(Pelamar $pelamar)
    {
        return view('pelamar.ubah', compact('pelamar'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pelamar  $pelamar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $pelamar = Pelamar::where('id', $id)->first();
        $imageName = '';
        if ($request->hasFile('foto')) {
          $imageName = $request->nama.'-'.time() . '.' . $request->foto->extension();
          $request->foto->storeAs('public/photos', $imageName);
          if ($pelamar->foto) {
            Storage::delete('public/photos/' . $pelamar->foto);
          }
        } else {
          $imageName = $pelamar->foto;
        }
        $postData = [
            'nama' => $request->nama,
            'nik' => $request->nik,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'alamat' => $request->alamat,
            'nomor_hp' => $request->nomor_hp,
            'email' => $request->email,
            'pendidikan' => $request->pendidikan,
            'institusi' => $request->institusi,
            'posisi' => $request->posisi,
            'foto' => $imageName];
        
        $pelamar->update($postData);
        return redirect('/pelamar')->with('sukses','data pelamar: "'.$pelamar->nama.'", berhasil perbarui!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pelamar  $pelamar
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pelamar $pelamar)
    {
        pelamar::destroy($pelamar->id);
        return Redirect('/pelamar')->with('sukses','Data Berhasil Dihapus');
    }
}
