<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SIM | Prakerin</title>

  <link rel="shortcut icon" type="image/gif" href="images/logo.gif">
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('style/plugins/fontawesome-free/css/all.min.css')}}">
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
    <img src="images/logo.gif" alt="SMK Negeri 5" class="brand-image img-circle elevation-3"
           style="opacity: .8">
    <span class="brand-text font-weight-light">SIM Prakerin</span>
  </a>

  <div class="sidebar">
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
       @if(auth()->user()->role == 'admin')
        <li class="nav-item">
          <a href="/Datasiswa" class="nav-link">
            <i class="nav-icon fas fa-edit"></i>
            <p>
              Data Siswa
            </p>
          </a>
        </li>
        @endif
        @if(auth()->user()->role == 'admin')
        <li class="nav-item">
          <a href="/Dataguru" class="nav-link">
            <i class="nav-icon fas fa-edit"></i>
            <p>
              Data Guru
            </p>
          </a>
        </li>
        @endif
        @if(auth()->user()->role == 'siswa')
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
              <a href="/jurnalkegiatan" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Jurnal Kegiatan</p>
              </a>
            </li>
          </ul>
        </li>
        @endif
        @if(auth()->user()->role == 'guru')
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="/Datasiswa" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Jurnal Kegiatan Siswa</p>
            </a>
          </li>
        </ul>
        @endif
        @if(auth()->user()->role == 'siswa')
        <li class="nav-item">
          <a href="/Panduan" class="nav-link">
            <i class="nav-icon fas fa-file"></i>
            <p>
             Panduan Prakerin
            </p>
          </a>
        </li>
        @endif
        @if(auth()->user()->role == 'admin')
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
        @if(auth()->user()->role == 'admin')
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
  </div>
</aside>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-13">
          <h1 class="font-wight-bold">Tata Tertib Praktik Industri</h1>
          <h5 class="m-1 text-dark">Siswa Wajib</h5>
          <ul>
            <li>Mematuhi peraturan - peraturan yang berlaku di tempat praktik kerja. </li>
            <li>Berada di tempat praktik 15 menit sebelum praktik dimulai, berlaku sopan serta jujur, bertanggung jawab, berinisiatif dan kreatif terhadap tugas-tugas yang diberikan dalam praktik.</li>	
            <li>Menggunakan pakaian seragam sekolah lengkap dengan atributnya atau seragam kerja.</li>
            <li>Memberi salam pada waktu datang dan mohon diri pada waktu pergi/pulang.</li> 
            <li>Memberitahukan kepada pimpinan/bagian/pembimbing tempat magang bila berhalangan hadir, atau bermaksud meninggalkan tempat praktik.</li> 
            <li>Membicarakan dengan segera kepada guru pembimbing, ketua kelompok atau petugas yang ditunjuk apabila menemui kesulitan.</li> 
            <li>Mentaati peraturan dalam menggunakan alat atau bahan yang dipakai dalam melaksanakan praktik kerja.</li>
            <li>Melaporkan dengan segera kepada tugas yang berwenang apabila terjadi kerusakan atau salah mengambil bahan.</li>
            <li>Membersihkan dan mengatur kembali alat peralatan dengan rapi seperti semula apabila akan meninggalkan tempat.</li>
            <li>Mengisi buku jurnal kegiatan praktik.</li>
          </ul>
          <h5 class="m-1 text-dark">Siswa Dilarang</h5>
          <ul>
            <li>Menghisap rokok di tempat praktik</li>
            <li>Menerima tamu pribadi pada waktu praktik</li>
            <li>Menggunakan pesawat telepon, peralatan-peralatan di tempat praktik tanpa seizin petugas.</li>
            <li>Pindah tempat kegiatan praktik kecuali atas perintah yang berwenang dalam mengatur penempatan kegiatan praktik.</li>
            </p>
          </ul>
          <h5 class="m-1 text-dark">Sanksi-Sanksi</h5>
          <ul>
            <li>Peringatan secara lisan</li>
            <li>Peringatan secara tertulis</li>
            <li>Dinyatakan gugur dan harus mengulang</li>
            </p>
          </ul>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->
</div>


<!-- /.content-wrapper -->
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
</body>
</html>
