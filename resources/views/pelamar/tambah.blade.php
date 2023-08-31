@extends('layout.App') {{-- berfungsi mengirimkan paket ini ke bagian app.blade --}}
@section('judul','Form Tambah Data Pelamar') <!-- mengirimkan judul halaman otomatis -->

@section('konten')

<section class="content">
    <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-12">
                <div class="card p-3">
                    <form action="/pelamar" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="">Nama</label>
                            <input required name="nama" type="text" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="">NIK</label>
                            <input required name="nik" type="number" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="">Tempat Lahir</label>
                            <input required name="tempat_lahir" type="text" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="">Tanggal Lahir</label>
                            <input required name="tanggal_lahir" type="date" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="">Alamat</label>
                            <input required name="alamat" type="text" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="">Nomor HP</label>
                            <input required name="nomor_hp" type="number" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="">Email</label>
                            <input required name="email" type="email" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="">Pendidikan Terakhir</label>
                            <select name="pendidikan" id="" class="form-control">
                                <option value="">--Pilih Pendidikan Terakhir--</option>
                                <option value="D3">D3</option>
                                <option value="S1">S1</option>
                                <option value="S2">S2</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="">Institusi Pendidikan Akhir</label>
                            <input required name="institusi" type="text" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="">Posisi</label>
                            <select name="posisi" id="" class="form-control">
                                <option value="">--Pilih Posisi Pelamar--</option>
                                <option value="Staf Keuangan">Staf Keuangan</option>
                                <option value="Staf Publikasi">Staf Publikasi</option>
                                <option value="Staf HRD">Staf HRD</option>
                                <option value="Staf Produksi">Staf Produksi</option>
                                <option value="Staf Desain">Staf Desain</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="foto" class="form-label">Foto</label>
                            <input class="form-control" name="foto" accept="image/*" type="file" id="foto">
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