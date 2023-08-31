@extends('layout.App') {{-- berfungsi mengirimkan paket ini ke bagian app.blade --}}
@section('judul','Detail Pelamar') <!-- mengirimkan judul halaman otomatis -->

@section('konten')

<section class="content">
    <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-8">
                <div class="card p-3">
                    <table class="table">
                        <tr>
                            <td>Nama</td>
                            <td>:</td>
                            <td>{{ $pelamar->nama }}</td>
                            <td rowspan="10" >
                                <img >
                                    @if ($pelamar->foto !='')
                                        <img src="{{ asset('storage/photos/'.$pelamar->foto) }}" alt="{{ $pelamar->foto }}" width="200px">
                                    @else
                                        <img src="{{ asset('images/coverNotFound.jpeg') }}" alt="coverNotFound" width="300px">
                                    @endif
                            </td>
                        </tr>
                        <tr>
                            <td>NUPTK</td>
                            <td>:</td>
                            <td>{{ $pelamar->nik }}</td>
                        </tr>
                        <tr>
                            <td>Tempat Lahir</td>
                            <td>:</td>
                            <td>{{ $pelamar->tempat_lahir }}</td>
                        </tr>
                        <tr>
                            <td>Tanggal Lahir</td>
                            <td>:</td>
                            <td>{{ $pelamar->tanggal_lahir }}</td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td>:</td>
                            <td>{{ $pelamar->alamat }}</td>
                        </tr>
                        <tr>
                            <td>Nomor HP</td>
                            <td>:</td>
                            <td>{{ $pelamar->nomor_hp }}</td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>:</td>
                            <td>{{ $pelamar->email }}</td>
                        </tr>
                        <tr>
                            <td>Pendidikan Terakhir</td>
                            <td>:</td>
                            <td>{{ $pelamar->pendidikan }}</td>
                        </tr>
                        <tr>
                            <td>Institusi Pendidikan Akhir</td>
                            <td>:</td>
                            <td>{{ $pelamar->institusi }}</td>
                        </tr>
                        <tr>
                            <td>Posisi</td>
                            <td>:</td>
                            <td>{{ $pelamar->posisi }}</td>
                        </tr>
                        <tr>
                            <td colspan="3">
                                <a class="btn btn-secondary" href="/pelamar">Kembali</a>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>

    </div><!-- /.container-fluid -->
</section>
@endsection