@extends('layouts.app-pages')
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
          <div class="container">
            <div class="box-header my-4">
              <a href="{{route('tambah-barang.create')}}" class="btn btn-sm btn-success"><i class="fa fa-plus"></i> Tambah Barang</a>            
              <a href="{{route('tambah-barang.print')}}" target="_blank" class="btn btn-sm btn-primary pull-right" style="margin-right: 20px"><i class="fa fa-print"></i> Print PDF</a>
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
                      @if (!Auth::guest())
                      <th scope="col">Aksi</th>
                      @else
                      @endif
                    </tr>
                </thead>
                <tbody>
                  @foreach ($items as $item)
                  <tr>
                    <td> {{ $loop->iteration }} </td>
                    <td> {{ $item->kd_barang }} </td>
                    <td> {{ $item->nama_barang }} </td>
                    <td> {{ $item->jenis_barang }} </td>
                    <td> {{ $item->stok_barang }} </td>
                    <td> Rp.{{ $item->harga_barang }} </td>
                    <td> {{ $item->tgl_masuk_barang }} </td>
                    @if (!Auth::guest())
                    <td> 
                      <a class="btn btn btn-warning" href="{{route('tambah-barang.edit',$item->id)}}" role="button" ><i class="fa fa-edit"></i></a>
                      @role('admin')
                      <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete{{$item->id}}">
                        <i class="fa fa-trash"></i>
                      </button>
                      @endrole
                    </td> 
                    @else
                    @endif
                  </tr>
                  @endforeach
                </tbody>
              </table>
                <div class="modal fade" id="delete{{ $item->id }}">
                  <div class="modal-dialog modal-md">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span></button>
                      </div>
                      <div class="modal-body">
                        <p>Anda yakin ingin menghapus {{$item->kd_barang}} ? </p>
                      </div>
                      <div class="modal-footer">
                        <form action="{{route('tambah-barang.destroy',$item->id)}}" method="POST">
                          @csrf
                          @method('delete')
                          <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
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
