@extends('layout.app')
@section('judul','Beranda')
@section('konten')
<section class="content">
    <div class="container-fluid">
      <!-- Small boxes (Stat box) -->
      <div class="row">
      </div>
      <!-- /.row -->
      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        <section class="col-lg-12 connectedSortable">
          <!-- Custom tabs (Charts with tabs)-->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">
                  Beranda
              </h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <p style="text-align:center">
                  <b> Selamat Datang di Website Rekruitmen Bersama PT. EXTRA SUMUT</b>
                </p>
                <p style="text-align:center">
                  <b><i>Melayani Dengan Segenap Hati</i></b>
                <br><i>“Silahkan kerjakan pekerjaan anda yang menjadi tanggung jawab anda, tetap semangat dan terima kasih”</i>
                </p>
                <div class="text-center">
                  <img src="dist/img/logoextra.png" class="rounded"/>
                </div>
                <br>
                <div class="text-center" >
                  <a class="btn btn-primary" href="/pelamar">Menuju Halaman Pendaftaran</a>
                </div>
                <!--<img align="middle" src="dist/img/logosmk.png" width="100" height="105"> gambar logo smk-->
            </div><!-- /.card-body -->
          </div>
        </section>
        <!-- /.Left col -->
        <!-- right col (We are only adding the ID to make the widgets sortable)-->
        <section class="col-lg-5 connectedSortable">
        </section>
        <!-- right col -->
      </div>
      <!-- /.row (main row) -->
    </div><!-- /.container-fluid -->
  </section>
@endsection