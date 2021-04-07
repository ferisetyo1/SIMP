<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SIM | Prakerin</title>
  <link rel="shortcut icon" type="/image/gif" href="/images/logo.gif">
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('style/plugins/fontawesome-free/css/all.min.css')}}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{ asset('style/https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css')}}">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="{{ asset('style/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ asset('style/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{ asset('style/plugins/jqvmap/jqvmap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('style/dist/css/adminlte.min.css')}}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset('style/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{ asset('style/plugins/daterangepicker/daterangepicker.css')}}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{ asset('style/plugins/summernote/summernote-bs4.css')}}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
  <!-- Left navbar links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
    </li>
  </ul>
  <!-- Right navbar links -->
  <ul class="navbar-nav ml-auto">
	<li><a class="btn btn-danger" href="/">logout</a></li>
</ul>
</nav>
<!-- /.navbar -->

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="#" class="brand-link">
    <span class="brand-text font-weight-light">SIM Prakerin</span>
  </a>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
        <li class="nav-item">
          <a href="/Home" class="nav-link">
            <i class="nav-icon fas fa-tree"></i>
            <p>
              Home
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="/Datasiswa" class="nav-link">
            <i class="nav-icon fas fa-edit"></i>
            <p>
              Data Siswa
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="/Dataguru" class="nav-link">
            <i class="nav-icon fas fa-edit"></i>
            <p>
              Data Guru
            </p>
          </a>
        </li>
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-book"></i>
            <p>
              Pelaporan
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="/Datasiswa/{{ $siswa->id }}/jurnal" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Jurnal Kegiatan</p>
              </a>
            </li>
          </ul>
        </li>
        @if(auth()->user()->role == 'guru')
        <li class="nav-item">
          <a href="/Panduan" class="nav-link">
            <i class="nav-icon fas fa-file"></i>
            <p>
             Panduan Prakerin
            </p>
          </a>
        </li>
        @endif
        @if(auth()->user()->role == 'guru')
        <li class="nav-item">
          <a href="/Tugas" class="nav-link">
            <i class="nav-icon fas fa-file"></i>
            <p>
             Tugas & Tanggung Jawab
            </p>
          </a>
        </li>
        @endif
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <section class="content-header">
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">
            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">

                <h3 class="name">{{$siswa->nama}}</h3>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- About Me Box -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Biodata</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <strong><i class=""></i>Jenis Kelamin</strong>
                <p class="text-muted">{{$siswa->jenis_kelamin}}</p>

                <hr>
                <strong><i class=""></i>Kompetensi Keahlian</strong>
                <p class="text-muted">{{$siswa->kom_keahlian}}</p>

                <hr>

                <strong><i class=""></i>NIS</strong>
                <p class="text-muted">{{$siswa->nis}}</p>

                <hr>

                <strong><i class=""></i>Alamat</strong>
                <p class="text-muted">{{$siswa->alamat}}</p>

                <hr>

                <strong><i class=""></i>Agama</strong>
                <p class="text-muted">{{$siswa->agama}}</p>

                <hr>

                <strong><i class=""></i>Kelas</strong>
                <p class="text-muted">{{$siswa->kelas}}</p>

                <hr>

                <strong><i class=""></i>No. HP</strong>
                <p class="text-muted">{{$siswa->nohp}}</p>

                <hr>

                <strong><i class=""></i>Nama Orang Tua/Wali</strong>
                <p class="text-muted">{{$siswa->nama_orangtua}}</p>

                <hr>

                <strong><i class=""></i>No. HP Orang Tua/Wali</strong>
                <p class="text-muted">{{$siswa->nohp_orangtua}}</p>

                <hr>           
                <a href="/Datasiswa/{{$siswa->id}}/edit" class="btn btn-danger btn-block"><b>Edit Biodata</b></a>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
          <div class="col-md-9">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Jurnal Kegiatan</a></li>
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <div class="active tab-pane" id="activity">
                    <div class="card-header p-2">
                    </div>
                    <table class="table table-hover">
                      <thead>
                        <tr>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Kompetensi Keahlian</th>
                        <th scope="col">Waktu Mulai</th>
                        <th scope="col">Waktu Selesai</th>
                        <th scope="col">Kegiatan</th>
                        <th scope="col">Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($siswa->$komkegiatan as $kg)
                        <tr>
                          <td>{{$kg->pivot->tanggal}}</td>
                          <td>{{$kg->kom_keahlian}}</td>
                          <td>{{$kg->pivot->waktu_mulai}}</td>
                          <td>{{$kg->pivot->waktu_selesai}}</td>
                          <td>{{$kg->pivot->kegiatan}}</td>
                          <td> 
                            <a href="/Datasiswa/{{$siswa->id}}/{{$kg->id}}/deletejurnal" class="btn btn-danger btn-sm" onclick="return confirm ('Apakah Yakin ingin dihapus?')">Delete</a>
                          </td>
                        </tr>
                        <tr>                       
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- /.nav-tabs-custom -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->
</div>
</div>
<footer class="main-footer">
<strong>Copyright &copy; 2020 <a href="http://adminlte.io">SMK Negeri 5 Malang</a>.</strong>
All rights reserved.
<div class="float-right d-none d-sm-inline-block">
  <b>Version</b> 3.0.1
</div>
</footer>


<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
<!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{ asset('style/plugins/jquery/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('style/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
$.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{ asset('style/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- ChartJS -->
<script src="{{ asset('style/plugins/chart.js/Chart.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{ asset('style/plugins/sparklines/sparkline.js')}}"></script>
<!-- JQVMap -->
<script src="{{ asset('style/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
<script src="{{ asset('style/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{ asset('style/plugins/jquery-knob/jquery.knob.min.js')}}"></script>
<!-- daterangepicker -->
<script src="{{ asset('style/plugins/moment/moment.min.js')}}"></script>
<script src="{{ asset('style/plugins/daterangepicker/daterangepicker.js')}}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ asset('style/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
<!-- Summernote -->
<script src="{{ asset('style/plugins/summernote/summernote-bs4.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{ asset('style/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('style/dist/js/adminlte.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset('style/dist/js/pages/dashboard.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('style/dist/js/demo.js')}}"></script>
<script src="{{ asset('style/plugins/jquery/jquery.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script>
@if(Session::has('sukses')) 
toastr.success("{{Session::get('sukses')}}", "Sukses")
@endif
</script>
</body>
</html>



