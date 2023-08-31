@extends('layout.app')
@section('judul','Profil Perusahaan')
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
                  Profile
              </h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <p style="text-align:center">
                  <b>PT. EXTRA MEDAN</b>
                </p>
                <div class="text-center">
                  <img src="dist/img/logoextra.png" class="rounded"/>
                </div>
                <p style="text-align:center">
                <br>PT Extra Medan adalah perusahaan teknologi inovatif yang berfokus pada pengembangan solusi perangkat lunak cerdas. Kami menyediakan layanan berkualitas tinggi dalam pengembangan aplikasi mobile, pengembangan web, dan pengembangan perangkat lunak khusus untuk klien dari berbagai industri.
                </p>
                <p style="text-align:center">
                  <b>Visi</b>
                <br><i>“Menjadi mitra teknologi terkemuka yang mendorong transformasi digital di seluruh dunia dengan solusi inovatif.”</i>
                
                </p>
                <p style="text-align:center">
                  <b>Misi</b>
                <br><i>“Kami berkomitmen untuk memberikan solusi perangkat lunak yang cerdas, andal, dan terukur kepada klien kami. Kami menggabungkan keahlian teknis yang mendalam dengan pemahaman mendalam tentang kebutuhan bisnis klien kami untuk memberikan nilai tambah yang signifikan.”</i>
                </p>

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