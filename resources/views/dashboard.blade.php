@extends('layout.apppro')
@section('content')
@if ( Auth::user()->typeuser == 2)
<style>
.panel-order .row {
	border-bottom: 1px solid #ccc;
}
.panel-order .row:last-child {
	border: 0px;
}
.panel-order .row .col-md-1  {
	text-align: center;
	padding-top: 15px;
}
.panel-order .row .col-md-1 img {
	width: 50px;
	max-height: 50px;
}
.panel-order .row .row {
	border-bottom: 0;
}
.panel-order .row .col-md-11 {
	border-left: 1px solid #ccc;
}
.panel-order .row .row .col-md-12 {
	padding-top: 7px;
	padding-bottom: 7px; 
}
.panel-order .row .row .col-md-12:last-child {
	font-size: 11px; 
	color: #555;  
	background: #efefef;
}
.panel-order .btn-group {
	margin: 0px;
	padding: 0px;
}
.panel-order .panel-body {
	padding-top: 0px;
	padding-bottom: 0px;
}
.panel-order .panel-deading {
	margin-bottom: 0;
}                   
</style>
<link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css">
<div class="panel panel-default panel-order">
  <div class="panel-heading">
      <strong>VENUE</strong>
      <div class="btn-group pull-right">
          <div class="btn-group">
			<button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
			  Filter history <i class="fa fa-filter"></i>
			</button>
			<ul class="dropdown-menu dropdown-menu-right">
			  <li><a href="#">Approved orders</a></li>
			  <li><a href="#">Pending orders</a></li>
			</ul>
		  </div>
		</div>
  </div>

	<div class="panel-body">	
		<div class="row">
	  <div class="col-md-1"><img src="https://bootdey.com/img/Content/user_3.jpg" class="media-object img-thumbnail"></div>
	  <div class="col-md-11">
		<div class="row">
		  <div class="col-md-12">
			<div class="pull-right"><label class="label label-danger">status</label> </div>
			<span><strong>Kota:</strong></span> <span class="label label-info"></span><br>
			Catatan:<br>
			<a data-placement="top" class="btn btn-success btn-xs glyphicon glyphicon-ok" href="#" title="View"></a>
			<a data-placement="top" class="btn btn-danger  btn-xs glyphicon glyphicon-trash" href="#" title="Danger"></a>
			<a data-placement="top" class="btn btn-info  btn-xs glyphicon glyphicon-usd" href="#" title="Danger"></a>
		  </div>
		  <div class="col-md-12">
			Dibuat tanggal: , Diupdate tanggal: , <a href="#">oleh:  </a>, No. Kontak:  , WA: , BBM: 
		  </div>
		</div>
	  </div>
	</div>
</div>
<div class="panel panel-default panel-order">
  <div class="panel-heading">
      <strong>VENUE</strong>
      <div class="btn-group pull-right">
          <div class="btn-group">
			<button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
			  Filter history <i class="fa fa-filter"></i>
			</button>
			<ul class="dropdown-menu dropdown-menu-right">
			  <li><a href="#">Approved orders</a></li>
			  <li><a href="#">Pending orders</a></li>
			</ul>
		  </div>
		</div>
  </div>

	<div class="panel-body">	
		<div class="row">
	  <div class="col-md-1"><img src="https://bootdey.com/img/Content/user_3.jpg" class="media-object img-thumbnail"></div>
	  <div class="col-md-11">
		<div class="row">
		  <div class="col-md-12">
			<div class="pull-right"><label class="label label-danger">status</label> </div>
			<span><strong>Kota:</strong></span> <span class="label label-info"></span><br>
			Catatan:<br>
			<a data-placement="top" class="btn btn-success btn-xs glyphicon glyphicon-ok" href="#" title="View"></a>
			<a data-placement="top" class="btn btn-danger  btn-xs glyphicon glyphicon-trash" href="#" title="Danger"></a>
			<a data-placement="top" class="btn btn-info  btn-xs glyphicon glyphicon-usd" href="#" title="Danger"></a>
		  </div>
		  <div class="col-md-12">
			Dibuat tanggal: , Diupdate tanggal: , <a href="#">oleh:  </a>, No. Kontak:  , WA: , BBM: 
		  </div>
		</div>
	  </div>
	</div>
</div>
<div class="panel panel-default panel-order">
  <div class="panel-heading">
      <strong>ENTERTAINTMENT</strong>
      <div class="btn-group pull-right">
          <div class="btn-group">
			<button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
			  Filter history <i class="fa fa-filter"></i>
			</button>
			<ul class="dropdown-menu dropdown-menu-right">
			  <li><a href="#">Approved orders</a></li>
			  <li><a href="#">Pending orders</a></li>
			</ul>
		  </div>
		</div>
  </div>

	<div class="panel-body">	
		<div class="row">
	  <div class="col-md-1"><img src="https://bootdey.com/img/Content/user_3.jpg" class="media-object img-thumbnail"></div>
	  <div class="col-md-11">
		<div class="row">
		  <div class="col-md-12">
			<div class="pull-right"><label class="label label-danger">status</label> </div>
			<span><strong>Kota:</strong></span> <span class="label label-info"></span><br>
			Catatan:<br>
			<a data-placement="top" class="btn btn-success btn-xs glyphicon glyphicon-ok" href="#" title="View"></a>
			<a data-placement="top" class="btn btn-danger  btn-xs glyphicon glyphicon-trash" href="#" title="Danger"></a>
			<a data-placement="top" class="btn btn-info  btn-xs glyphicon glyphicon-usd" href="#" title="Danger"></a>
		  </div>
		  <div class="col-md-12">
			Dibuat tanggal: , Diupdate tanggal: , <a href="#">oleh:  </a>, No. Kontak:  , WA: , BBM: 
		  </div>
		</div>
	  </div>
	</div>
</div>
<div class="panel panel-default panel-order">
  <div class="panel-heading">
      <strong>DECORATOR</strong>
      <div class="btn-group pull-right">
          <div class="btn-group">
			<button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
			  Filter history <i class="fa fa-filter"></i>
			</button>
			<ul class="dropdown-menu dropdown-menu-right">
			  <li><a href="#">Approved orders</a></li>
			  <li><a href="#">Pending orders</a></li>
			</ul>
		  </div>
		</div>
  </div>

	<div class="panel-body">	
		<div class="row">
	  <div class="col-md-1"><img src="https://bootdey.com/img/Content/user_3.jpg" class="media-object img-thumbnail"></div>
	  <div class="col-md-11">
		<div class="row">
		  <div class="col-md-12">
			<div class="pull-right"><label class="label label-danger">status</label> </div>
			<span><strong>Kota:</strong></span> <span class="label label-info"></span><br>
			Catatan:<br>
			<a data-placement="top" class="btn btn-success btn-xs glyphicon glyphicon-ok" href="#" title="View"></a>
			<a data-placement="top" class="btn btn-danger  btn-xs glyphicon glyphicon-trash" href="#" title="Danger"></a>
			<a data-placement="top" class="btn btn-info  btn-xs glyphicon glyphicon-usd" href="#" title="Danger"></a>
		  </div>
		  <div class="col-md-12">
			Dibuat tanggal: , Diupdate tanggal: , <a href="#">oleh:  </a>, No. Kontak:  , WA: , BBM: 
		  </div>
		</div>
	  </div>
	</div>
</div>
<div class="panel panel-default panel-order">
  <div class="panel-heading">
      <strong>CATERING</strong>
      <div class="btn-group pull-right">
          <div class="btn-group">
			<button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
			  Filter history <i class="fa fa-filter"></i>
			</button>
			<ul class="dropdown-menu dropdown-menu-right">
			  <li><a href="#">Approved orders</a></li>
			  <li><a href="#">Pending orders</a></li>
			</ul>
		  </div>
		</div>
  </div>

	<div class="panel-body">	
		<div class="row">
	  <div class="col-md-1"><img src="https://bootdey.com/img/Content/user_3.jpg" class="media-object img-thumbnail"></div>
	  <div class="col-md-11">
		<div class="row">
		  <div class="col-md-12">
			<div class="pull-right"><label class="label label-danger">status</label> </div>
			<span><strong>Kota:</strong></span> <span class="label label-info"></span><br>
			Catatan:<br>
			<a data-placement="top" class="btn btn-success btn-xs glyphicon glyphicon-ok" href="#" title="View"></a>
			<a data-placement="top" class="btn btn-danger  btn-xs glyphicon glyphicon-trash" href="#" title="Danger"></a>
			<a data-placement="top" class="btn btn-info  btn-xs glyphicon glyphicon-usd" href="#" title="Danger"></a>
		  </div>
		  <div class="col-md-12">
			Dibuat tanggal: , Diupdate tanggal: , <a href="#">oleh:  </a>, No. Kontak:  , WA: , BBM: 
		  </div>
		</div>
	  </div>
	</div>
</div>
<div class="panel-footer">Put here some note for example: bootdey si a gallery of free bootstrap snippets</div>
</div>                    
@elseif ( Auth::user()->typeuser == 1)
<div class="container" style="margin-top: 20px; margin-bottom: 20px;">
  <div class="row">
    <div class="col-md-11">
			<div class="subscribe-form-1">
			<p>Ketik pada kotak Permintaan sesuai preferensi perawat.</p>
				<form class="news-letter mailchimp" action="{{ url('/pesanper') }}" role="form" method="POST">
                    <select class="form-control" type="text" name="kota" placeholder="Kota ...">
                        <option value="jakarta">Jakarta</option>
                        <option value="bekasi">Bekasi</option>
                    </select>
                    <select class="form-control" type="text" name="agama" placeholder="Agama ...">
                        <option value="islam">Islam</option>
                        <option value="katolik">Katolik</option>
                        <option value="protestan">Protestan</option>
                        <option value="hindu">Hindu</option>
                        <option value="buddha">BUddha</option>
                        <option value="konghucu">Konghucu</option>
                        <option value="lain">Lain</option>
                    </select>
                    <select class="form-control" type="text" name="jen_kel" placeholder="Jenis Kelamin ...">
                        <option value="pria">Pria</option>
                        <option value="wanita">Wanita</option>
                    </select>
                    <input class="form-control" type="text" name="harga" placeholder="Harga Rp ... per jam/minggu/bulan">
                    <select class="form-control" type="text" name="periode" placeholder="Harian, Mingguan, Bulanan ...">
                        <option value="hourly">per jam</option>
                        <option value="weekly">per minggu</option>
                        <option value="monthly">per bulan</option>
                    </select>
                    <input class="form-control" type="text" name="mulaitgl" placeholder="Mulai tanggal ...">
					<select class="form-control" type="text" name="klasifikasi" placeholder="Perawat Medis atau bukan ...">
                        <option value="medis">Perawat Medis</option>
                        <option value="umum">Perawat Umum</option>
                    </select>
					<button type="submit" class="subscribe-btn btn">PESAN PERAWAT</button>
				</form>
			</div>	
    </div>
  </div>	   
</div>            
@else

@endif

@endsection