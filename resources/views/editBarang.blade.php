@extends('layouts.app-pages')
@section('title')
    Tambah Barang - Inventory-app
@endsection
@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Dashboard</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Tambah Barang</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
        <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Form Barang</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <form method="POST" action="{{route('tambah-barang.update',$items->id)}}">
                  @method('PUT')
                    @csrf
                    <div class="form-group">
                      <label for="kd_barang">Kode Barang</label>
                      <input type="text" class="form-control @error('kd_barang') is-invalid @enderror" id="kd_barang" name="kd_barang" placeholder="*A00001" value="{{ $items->kd_barang }}" readonly>
                      @error('kd_barang')
                          <div class="text-danger">{{$message}}</div>
                      @enderror
                    </div>
                    <div class="form-group">
                        <label for="nama_barang">Nama Barang</label>
                        <input type="text" class="form-control @error('nama_barang') is-invalid @enderror" id="nama_barang" name="nama_barang" placeholder="Inputkan Nama Barang" value="{{ $items->nama_barang }}">
                        @error('nama_barang')
                          <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="jenis_barang">Jenis Barang</label>
                        <input type="text" class="form-control @error('jenis_barang') is-invalid @enderror" id="jenis_barang" name="jenis_barang" placeholder="Inputkan Jenis Barang" value="{{ $items->jenis_barang }}">
                        @error('jenis_barang')
                          <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="stok_barang">Stok Barang</label>
                        <input type="text" class="form-control @error('stok_barang') is-invalid @enderror" id="stok_barang" name="stok_barang" placeholder="Inputkan Jumlah Stok" value="{{ $items->stok_barang }}">
                        @error('stok_barang')
                          <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="harga_barang">Harga Barang Satuan</label>
                        <input type="text" class="form-control @error('harga_barang') is-invalid @enderror" id="harga_barang" name="harga_barang" placeholder="Inputkan Harga Barang" value="{{ $items->harga_barang }}">
                        @error('harga_barang')
                          <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="tgl_masuk_barang">Tanggal Barang Masuk</label>
                        <input type="date" class="form-control @error('tgl_masuk_barang') is-invalid @enderror" id="tgl_masuk_barang" name="tgl_masuk_barang" placeholder="Inputkan Tanggal Barang Masuk" value="{{ $items->tgl_masuk_barang }}">
                        @error('tgl_masuk_barang')
                          <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary pull-right">Simpan</button>
            </div>
            <!-- /.box-body -->
        </div>
      
    </div><!--/. container-fluid -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
  <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
    
@endsection
