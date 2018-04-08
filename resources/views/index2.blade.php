@extends('layout.app')
@section('content')
<!-- /.content-how-it-works -->
<div id="howitworks" class="subsection">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 mobile-left">
        <h2>KLIK TEMA ACARA</h2>
        <p style="margin-bottom: 36px; font-size: 18px;"></p>
      </div>
      <div>
        <div class="expand-content display-flex" style="padding-top: 0;">
		  <div onclick="myFunctiona()" style="    border-right: none;" class="col-sm-6 col-md-2 box"><img src="{{ asset('img/theme/bday.jpg') }}" width="72" height="72">
		    <h3>Ulang Tahun</h3>
            <p></p>
          </div>
          <div onclick="myFunctionb()" style="    border-right: none;" class="col-sm-6 col-md-2 box"><img src="{{ asset('img/theme/corporate.png') }}" width="72" height="72">
            <h3>Corporate Event</h3>
            <p></p>
          </div>
          <div onclick="myFunctionc()" class="col-sm-6 col-md-2 box"><img src="{{ asset('img/theme/studytour.png') }}" width="72" height="72">
            <h3>Study Tour</h3>
            <p></p>
          </div>
		  <div onclick="myFunctiond()" class="col-sm-6 col-md-2 box"><img src="{{ asset('img/theme/seminar.jpg') }}" width="72" height="72">
            <h3>Seminar</h3>
            <p></p>
          </div>
		  <div onclick="myFunctione()" class="col-sm-6 col-md-2 box"><img src="{{ asset('img/theme/nikah.png') }}" width="72" height="72">
            <h3>Pernikahan</h3>
            <p></p>
          </div>
		  <div class="col-sm-6 col-md-2 box"><img src="{{ asset('img/theme/vendor.jpg') }}" width="72" height="72">
            <h3>Cari Vendor</h3>
            <p></p>
          </div>
        </div>
        <!-- .display-flex -->
<div class="container">
    <div class="row">
      <div>
		<div id="showbday" class="expand-content display-flex" style="padding-top: 0; display:none">
			<div style="" class="col-sm-6 col-md-2 box"><img src="{{ asset('img/theme/bday.jpg') }}" width="72" height="72">
			<h3>Chose EO ?</h3>
				<div  style="" class="col-sm-4">
					<button data-toggle="modal" data-target="#myModal">YES</button>
				</div>
				<div  style="" class="col-sm-4">
					<button>NO</button>
				</div>
				<div  style="" class="col-sm-4">
					<button onClick="myFunction1()">BACK</button>
				</div>
			</div>
		</div>
		<div id="showcorp" class="expand-content display-flex" style="padding-top: 0; display:none">
			<div style="" class="col-sm-6 col-md-2 box"><img src="{{ asset('img/theme/corporate.png') }}" width="72" height="72">
			<h3>Chose EO ?</h3>
				<div  style="" class="col-sm-4">
					<button data-toggle="modal" data-target="#myModal">YES</button>
				</div>
				<div  style="" class="col-sm-4">
					<button>NO</button>
				</div>
				<div  style="" class="col-sm-4">
					<button onClick="myFunction1()">BACK</button>
				</div>
			</div>
		</div>
		<div id="showstudyt" class="expand-content display-flex" style="padding-top: 0; display:none">
			<div style="" class="col-sm-6 col-md-2 box"><img src="{{ asset('img/theme/studytour.png') }}" width="72" height="72">
			<h3>Chose EO ?</h3>
				<div  style="" class="col-sm-4">
					<button data-toggle="modal" data-target="#myModal">YES</button>
				</div>
				<div  style="" class="col-sm-4">
					<button>NO</button>
				</div>
				<div  style="" class="col-sm-4">
					<button onClick="myFunction1()">BACK</button>
				</div>
			</div>
		</div>
		<div id="showseminar" class="expand-content display-flex" style="padding-top: 0; display:none">
			<div style="" class="col-sm-6 col-md-2 box"><img src="{{ asset('img/theme/seminar.jpg') }}" width="72" height="72">
			<h3>Chose EO ?</h3>
				<div  style="" class="col-sm-4">
					<button data-toggle="modal" data-target="#myModal">YES</button>
				</div>
				<div  style="" class="col-sm-4">
					<button>NO</button>
				</div>
				<div  style="" class="col-sm-4">
					<button onClick="myFunction1()">BACK</button>
				</div>
			</div>
		</div>
		<div id="shownikah" class="expand-content display-flex" style="padding-top: 0; display:none">
			<div style="" class="col-sm-6 col-md-2 box"><img src="{{ asset('img/theme/nikah.png') }}" width="72" height="72">
			<h3>Chose EO ?</h3>
				<div  style="" class="col-sm-4">
					<button data-toggle="modal" data-target="#myModal">YES</button>
				</div>
				<div  style="" class="col-sm-4">
					<button>NO</button>
				</div>
				<div  style="" class="col-sm-4">
					<button onClick="myFunction1()">BACK</button>
				</div>
			</div>
		</div>
    </div>
  </div>
</div>
<!-- -->
<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
	<div class="modal-dialog">
	<!-- Modal content-->
	<div class="modal-content">
		<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal">&times;</button>
		<h4 class="modal-title">Modal Header</h4>
		</div>
		<div class="modal-body-1">
			<label for="magkota-name" class="control-label">Kota:</label>
			<input type="text" class="form-control" id="magkota-name">
		</div>
		<div class="modal-body-2">
			<label for="maglok-name" class="control-label">Lokasi:</label>
			<input type="text" class="form-control" id="maglok-name">
		</div>
		<div class="modal-body-3">
			<label for="user-name" class="control-label">Perusahaan:</label>
			<input type="text" class="form-control" id="user-name">
		</div>
		<div class="modal-body-4">
			<label for="magdesk-name" class="control-label">Deskripsi:</label>
			<input type="text" class="form-control" id="magdesk-name">
		</div>
		<div class="modal-footer">
			<button type="button" class="btn btn-xs btn-detail open-modal" data-dismiss="modal">Close</button>
		</div>
	</div>
	
	</div>
</div>
<script>
function myFunctiona() {
    document.getElementById("showbday").style.display = "block";
		document.getElementById("showcorp").style.display = "none";
		document.getElementById("showstudyt").style.display = "none";
		document.getElementById("showseminar").style.display = "none";
		document.getElementById("shownikah").style.display = "none";
	}
function myFunctionb() {
	document.getElementById("showbday").style.display = "none";
		document.getElementById("showcorp").style.display = "block";
		document.getElementById("showstudyt").style.display = "none";
		document.getElementById("showseminar").style.display = "none";
		document.getElementById("shownikah").style.display = "none";
	}
function myFunctionc() {
	document.getElementById("showbday").style.display = "none";
	document.getElementById("showcorp").style.display = "none";
	document.getElementById("showstudyt").style.display = "block";
	document.getElementById("showseminar").style.display = "none";
	document.getElementById("shownikah").style.display = "none";
}
function myFunctiond() {
	document.getElementById("showbday").style.display = "none";
	document.getElementById("showcorp").style.display = "none";
	document.getElementById("showstudyt").style.display = "none";
	document.getElementById("showseminar").style.display = "block";
	document.getElementById("shownikah").style.display = "none";
}
function myFunctione() {
	document.getElementById("showbday").style.display = "none";
	document.getElementById("showcorp").style.display = "none";
	document.getElementById("showstudyt").style.display = "none";
	document.getElementById("showseminar").style.display = "none";
	document.getElementById("shownikah").style.display = "block";
}
function myFunction1() {
	document.getElementById("showbday").style.display = "none";
	document.getElementById("showcorp").style.display = "none";
	document.getElementById("showstudyt").style.display = "none";
	document.getElementById("showseminar").style.display = "none";
	document.getElementById("shownikah").style.display = "none";
}
</script>
<!-- /.content-section-a -->
<aside class="banner-footer">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 my-auto">
        <h2>Stay Connected</h2>
      </div>
      <div class="col-lg-6 my-auto">
        <ul class="list-inline banner-social-buttons">
          <li class="list-inline-item">
            <a href="#" class="btn btn-secondary btn-lg">
              <i class="fa fa-twitter fa-fw"></i>
              <span class="network-name">Twitter</span>
            </a>
          </li>
          <li class="list-inline-item">
            <a href="#" class="btn btn-secondary btn-lg">
              <i class="fa fa-facebook fa-fw"></i>
              <span class="network-name">Facebook</span>
            </a>
          </li>
          <li class="list-inline-item">
            <a href="#" class="btn btn-secondary btn-lg">
              <i class="fa fa-instagram fa-fw"></i>
              <span class="network-name">Instagram</span>
            </a>
          </li>
        </ul>
      </div>
    </div>


  </div>
  <!-- /.container -->

</aside>
  <!-- /.banner-footer -->
@endsection