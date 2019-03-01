@extends('template')

@section('judul')
HELLO GUYS, WELCOME TO V LIBRARY :)
@stop

@section('ac-dash')
active
@stop

@section('content')
<div class="col-md-3 col-sm-6 col-xs-12">
    <div class="info-box bg-red">
      <span class="info-box-icon"><i class="fa fa-star-o"></i></span>

      <div class="info-box-content">
        <span class="info-box-text">{{ $pinjam_banyak[0]->nama }}</span>
        <span class="info-box-number">{{ $pinjam_banyak[0]->jumlah }} Buku</span>
        <div class="progress">
          <div class="progress-bar" style="width:{{ $pinjam_banyak[0]->jumlah }}%"></div>
        </div>
            <span class="progress-description">
            Pinjam buku terbanyak
            </span>
      </div>
      <!-- /.info-box-content -->
    </div> 
      <!-- /.info-box  -->
  </div> 

  <div class="col-md-3 col-sm-6 col-xs-12">
    <div class="info-box bg-yellow">
      <span class="info-box-icon"><i class="fa fa-users"></i></span>

      <div class="info-box-content">
        <span class="info-box-text">Anggota</span>
        <span class="info-box-number">{{ $anggota[0]->jumlah }} Anggota</span>

        <div class="progress">
          <div class="progress-bar" style="width: {{ $anggota[0]->jumlah }}%"></div>
        </div>
            <span class="progress-description">
              Anggota Saat Ini
            </span>
      </div>
      <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
  </div>

  <div class="col-md-3 col-sm-6 col-xs-12">
    <div class="info-box bg-aqua">
      <span class="info-box-icon"><i class="fa fa-shopping-cart"></i></span>

      <div class="info-box-content">
        <span class="info-box-text">Jumlah Peminjam</span>
        <span class="info-box-number">{{ $jmlh_pinjam[0]->jumlah }} <i class="fa fa-user"></i></span>

        <div class="progress">
          <div class="progress-bar" style="width: {{ $jmlh_pinjam[0]->jumlah }}%"></div>
        </div>
            <span class="progress-description" id="bulan">
              
            </span>
      </div>
      <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
  </div>

  <div class="col-md-3 col-sm-6 col-xs-12">
    <div class="info-box bg-aqua">
      <span class="info-box-icon"><i class="fa fa-calendar"></i></span>

      <div class="info-box-content">
        <span class="info-box-text">{{ $p_bulan[0]->nama }}</span>
        <span class="info-box-number">{{ $p_bulan[0]->jumlah }}</span>

        <div class="progress">
          <div class="progress-bar" style="width: {{$p_bulan[0]->jumlah}}%"></div>
        </div>
            <span class="progress-description" >
              pinjam banyak/bulan
            </span>
      </div>
      <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
  </div>

  <h1 class="page-header">Perpustakaan Online</h1>
<div class="container-fluid">
<div class="box box-danger">
<div class="row">
  <div class="story">
  <div class="col-md-12">
    <div class="box box-solid">
      <div class="box-header with-border">
        <h2 class="box-title">Perpustakan Online</h2>
      </div>
      <!-- /.box-header -->
      <div class="box-body">
        <div class="box-group" id="accordion">
          <!-- we are adding the .panel class so bootstrap.js collapse plugin detects it -->
          <div class="panel box box-primary">
            <div class="box-header with-border">
              <h4 class="box-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                Perpustakaan digital (Inggris: digital library atau electronic library atau virtual library) adalah perpustakaan yang mempunyai koleksi buku sebagian besar dalam bentuk format digital dan yang bisa diakses dengan komputer. Jenis perpustakaan ini berbeda dengan jenis perpustakaan konvensional yang berupa kumpulan buku tercetak, film mikro (microform dan microfiche), ataupun kumpulan kaset audio, video, dll. Isi dari perpustakaan digital berada dalam suatu komputer server yang bisa ditempatkan secara lokal, maupun di lokasi yang jauh, namun dapat diakses dengan cepat dan mudah lewat jaringan komputer.
                </a>
              </h4>
            </div>

        </div>
      </div><!-- /.box-body -->
    </div><!-- /.box --> 
  </div><!-- /.col -->

@stop
