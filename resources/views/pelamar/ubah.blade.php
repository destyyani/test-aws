@extends('layout.App') {{-- berfungsi mengirimkan paket ini ke bagian app.blade --}}
@section('judul','Form Ubah Data Guru') <!-- mengirimkan judul halaman otomatis -->

@section('konten')

<section class="content">
    <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-12">
                <div class="card p-3">
                    <form action="/pelamar/{{ $pelamar->id }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="">Nama</label>
                            <input value="{{ $pelamar->nama }}" required name="nama" type="text" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="">NIK</label>
                            <input value="{{ $pelamar->nik }}" required name="nik" type="number" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="">Tempat Lahir</label>
                            <input value="{{ $pelamar->tempat_lahir }}" required name="tempat_lahir" type="text" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="">Tanggal Lahir</label>
                            <input value="{{ $pelamar->tanggal_lahir }}" required name="tanggal_lahir" type="text" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="">Alamat</label>
                            <input value="{{ $pelamar->alamat }}" required name="alamat" type="text" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="">Nomor HP</label>
                            <input value="{{ $pelamar->nomor_hp }}" required name="nomor_hp" type="number" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="">Email</label>
                            <input value="{{ $pelamar->email }}" required name="email" type="email" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="">Pendidikan Terakhir</label>
                            <select name="pendidikan" id="" class="form-control">
                                <option value="D3" {{($pelamar->pendidikan === 'D3') ? 'Selected' : ''}}>D3</option>
                                <option value="S1" {{($pelamar->pendidikan === 'S1') ? 'Selected' : ''}}>S1</option>
                                <option value="S2" {{($pelamar->pendidikan === 'S2') ? 'Selected' : ''}}>S2</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="">Institusi Pendidikan Akhir</label>
                            <input value="{{ $pelamar->institusi }}" required name="institusi" type="text" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="">Posisi</label>
                            <select name="posisi" id="" class="form-control">
                                <option value="Staf Keuangan" {{($pelamar->posisi === 'D3') ? 'Selected' : ''}}>Staf Keuangan</option>
                                <option value="Staf Publikasi" {{($pelamar->posisi === 'S1') ? 'Selected' : ''}}>Staf Publikasi</option>
                                <option value="Staf HRD" {{($pelamar->posisi === 'S2') ? 'Selected' : ''}}>Staf HRD</option>
                                <option value="Staf Produksi" {{($pelamar->posisi === 'S1') ? 'Selected' : ''}}>Staf Produksi</option>
                                <option value="Staf Desain" {{($pelamar->posisi === 'S2') ? 'Selected' : ''}}>Staf Desain</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="foto" class="form-label">Foto</label>
                            <input type="file" id="foto" name="foto" accept="image/*" class="form-control" alt="{{ $pelamar->foto }}">
                        </div>
                        {{-- tambahin time nail foto --}}
                        <div class="mb-3">
                            <img >
                            @if ($pelamar->foto !='')
                                <img src="{{ asset('storage/photos/'.$pelamar->foto) }}" alt="{{ $pelamar->foto }}" width="100px">
                            @else
                                <img src="{{ asset('images/coverNotFound.jpg') }}" alt="coverNotFound" width="100px">
                            @endif
                         </div>
                        <div class="mb-3">
                            <a class="btn btn-secondary" href="/pelamar">Kembali</a>
                            <button type="submit" class="btn btn-success" >Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div><!-- /.container-fluid -->
</section>
@endsection