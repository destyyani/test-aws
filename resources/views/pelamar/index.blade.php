@extends('layout.App') {{-- berfungsi mengirimkan paket ini ke bagian app.blade --}}
@section('judul','Data Pelamar') <!-- mengirimkan judul halaman otomatis -->

@section('konten')

<section class="content">
    <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-12">
                <div class="card p-3">
                    {{-- membuat pesan muncul ketika data ditambahkan --}}
                    @if(session('sukses'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Selamat!</strong> {{ session('sukses') }}.
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                    @endif
                    <div>
                        <a href="/pelamar/create" class="btn btn-primary mb-3">Tambah Data</a>
                    </div>
                    <form action="" method="get">
                        <div class="row mt-2">
                            <div class="col-12 col-sm-6">
                                <div class="input-group mb-3">
                                    <input type="text" name="cari" class="form-control" placeholder="Cari Data Pelamar">
                                    <button class="btn btn-primary">Search</button> &nbsp;
                                    <a href="/pelamar"><button class="btn btn-danger">Clear</button></a>
                                </div>
                            </div>
                        </div>
                    </form>
                    <table class="table table-striped">
                        <thead>
                            <th>No</th>
                            <th>Nama</th>
                            <th>NIK</th>
                            <th>Tempat Lahir</th>
                            <th>Tanggal Lahir</th>
                            <th>Alamat</th>
                            <th>Aksi</th>
                        </thead>
                        <tbody>
                            @foreach ($data as $x)
                                
                           
                            <tr>
                                <td>{{ $loop->iteration+ $data->firstItem() - 1 }}</td>
                                <td>{{ $x->nama }}</td>
                                <td>{{ $x->nik }}</td>
                                <td>{{ $x->tempat_lahir }}</td>
                                <td>{{ $x->tanggal_lahir }}</td>
                                <td>{{ $x->alamat }}</td>

                                <td>
                                    <a class="btn btn-sm btn-success" href="/pelamar/{{ $x->id }}">Detail</a>
                                    <a class="btn btn-sm btn-warning" href="/pelamar/{{ $x->id }}/edit">Ubah</a>
                                    <form onclick="return confirm('Apakah Kamu Yakin Untuk Menghapusnya?')" class="d-inline" action="/pelamar/{{ $x->id }}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-sm btn-danger" >Hapus</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $data->links() }}
                </div>
            </div>
        </div>

    </div><!-- /.container-fluid -->
</section>
@endsection