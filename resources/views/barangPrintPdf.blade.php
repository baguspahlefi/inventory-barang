
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Laporan Data Barang</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="{{asset('adminLTE')}}/plugins/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('adminLTE')}}/plugins/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{asset('adminLTE')}}/plugins/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('adminLTE')}}/dist/css/AdminLTE.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body onload="window.print();">
<div class="wrapper">
  <!-- Main content -->
  <section class="invoice">
    <!-- title row -->
    <div class="row">
      <div class="col-12">
        <h2 class="page-header">
          <i class="fa fa-globe"></i> Inventory
          <small class="pull-right"><i class="fa fa-calendar-times-o" style="margin-right: 3px"></i>{{ date('F j, Y') }}</small><br>
          <small class="pull-right"><i class="fa fa-clock-o" style="margin-right: 3px"></i>{{ date('h:i:s') }}</small>
        </h2>
      </div>
      <!-- /.col -->
    </div>
    <!-- info row -->
    <div class="row invoice-info">
      <div class="col-sm-4 invoice-col">
        From
        <address>
          <strong>Admin Inventory.</strong><br>
          Perumahan Pilar Baru<br>
          Ngawi, 3295<br>
          Phone: 085608537600<br>
          Email: baguspahlefi2000@gmail.com
        </address>
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->

    <!-- Table row -->
    <div class="row">
      <div class="col-xs-12 table-responsive">
        <table class="table table-bordered table-hover">
          <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Kode Barang</th>
            <th scope="col">Nama Barang</th>
            <th scope="col">Jenis Barang</th>
            <th scope="col">Stok Barang</th>
            <th scope="col">Harga Barang Satuan</th>                
            <th scope="col">Tanggal Masuk</th>
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
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>
<!-- ./wrapper -->
</body>
</html>
