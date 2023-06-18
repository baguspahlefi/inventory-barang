@extends('layouts.app')
@section('title')
    Dashboard - Inventory-app
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
            <li class="breadcrumb-item active">Dashboard</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-xs-12">
          @if (session('pesan'))
            <div class="alert alert-success alert-dismissible">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <h4><i class="icon fa fa-check"></i> Success</h4>
              {{session('pesan')}}.
            </div>
          @endif
          <div class="box">
            <div class="box-header">
              <h3 class="box-title"><b>Data Barang</b></h3>
              <a href="#" class="btn btn-sm btn-primary pull-right"><i class="fa fa-plus"></i> Tambah Data</a>            
              <a href="#" target="_blank" class="btn btn-sm btn-default pull-right" style="margin-right: 20px"><i class="fa fa-print"></i> Print PDF</a>
            </div>
            <!-- /.box-header -->
            <div class="card-body" style="overflow-x: auto;">
              <table id="example" class="table" style="width:100%">
                <thead>
                    <tr>
                      <th scope="col">No</th>
                      <th scope="col">Kode Barang</th>
                      <th scope="col">Nama Barang</th>
                      <th scope="col">Jenis Barang</th>
                      <th scope="col">Stok Barang</th>
                      <th scope="col">Harga Barang Satuan</th>                
                      <th scope="col">Tanggal Masuk</th>
                      <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Row 1 Data 1</td>
                    <td>Row 1 Data 2</td>
                    <td>Row 1 Data 1</td>
                    <td>Row 1 Data 2</td>
                    <td>Row 1 Data 1</td>
                    <td>Row 1 Data 2</td>
                    <td>Row 1 Data 1</td>
                    <td>Row 1 Data 2</td>
                  </tr>  
                </tbody>
              </table>
                <div class="modal fade" id="#">
                  <div class="modal-dialog modal-md">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">Warning</h4>
                      </div>
                      <div class="modal-body">
                        <p>Anda yakin ingin menghapus  ? </p>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                        <a href="#" role="button" class="btn btn-danger">Delete</a>
                      </div>
                    </div>
                    <!-- /.modal-content -->
                  </div>
                  <!-- /.modal-dialog -->
                </div>
                <!-- /.modal -->
    
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
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
