@extends('layout.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            
            @if (session('status'))
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                <div class="panel-body">
                        <div class="alert alert-success">
                        {{ session('status') }}                
                        </div>
                        You are logged in!
                </div>
            @endif
            </div>
        </div>
    </div>
</div>
<!-- Include the above in your HEAD tag -->
<div class="col-lg-12 col-sm-12">
    <div class="card hovercard">
        <div class="card-background">
            <img class="card-bkimg" alt="" src="http://lorempixel.com/100/100/people/9/">
        </div>
        <div class="useravatar">
            <!-- <img alt="" src="http://lorempixel.com/100/100/people/9/"> -->
            <img alt="" src="">
        </div>
        <div class="card-info"> <span class="card-title">{{Auth::user()->name}}</span>

        </div>
    </div>
    <div class="btn-pref btn-group btn-group-justified btn-group-lg" role="group" aria-label="...">
        @if(count($vendorven) > 0)
        <div class="btn-group" role="group">
            <button type="button" id="stars" class="btn btn-primary" href="#tab1" data-toggle="tab"><span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                <div class="hidden-xs">Venue</div>
            </button>
        </div>
        @else

        @endif
        
        @if(count($vendordeco) > 0)
        <div class="btn-group" role="group">
            <button type="button" id="favorites" class="btn btn-default" href="#tab2" data-toggle="tab"><span class="glyphicon glyphicon-heart" aria-hidden="true"></span>
                <div class="hidden-xs">Decorator</div>
            </button>
        </div>
        @else

        @endif

        @if(count($vendorcat) > 0)
        <div class="btn-group" role="group">
            <button type="button" id="following" class="btn btn-default" href="#tab3" data-toggle="tab"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                <div class="hidden-xs">Catering</div>
            </button>
        </div>
        @else

        @endif

        @if(count($vendoreo) > 0)
        <div class="btn-group" role="group">
            <button type="button" id="following" class="btn btn-default" href="#tab4" data-toggle="tab"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                <div class="hidden-xs">Event Organizer</div>
            </button>
        </div>
        @else

        @endif

        @if(count($vendorex) > 0)
        <div class="btn-group" role="group">
            <button type="button" id="following" class="btn btn-default" href="#tab5" data-toggle="tab"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                <div class="hidden-xs">Extra</div>
            </button>
        </div>
        @else

        @endif
    </div>

    <div class="well">
      <div class="tab-content">
        <div class="tab-pane fade in active" id="tab1">
          @foreach($vendorven as $vendor)
          <h3>Nama: {{$vendor->nama}}</h3>
          <p>Kota: {{$vendor->kota}}</p>
          <p>Alamat: {{$vendor->alamat}}</p>
          <p>No Kontak: {{$vendor->nokontak}}</p>
          <p>No Kontak 2: {{$vendor->nokontak2}}</p>
          <p>Deskripsi: {{$vendor->deskripsi}}</p>
          <p>Harga: {{$vendor->price}}</p>
          <p>Company Profile: {{$vendor->compro}}</p>
          <a href="{{ url('/updateven/'.$vendor->idven) }}">Edit</a>
          <a href="{{ url('/delven/'.$vendor->idven) }}">Delete</a>
          @endforeach
          <div class="alert">
            <button type="submit"><a href="{{ url('/addven') }}">Tambah Vendor</a></button>
          </div>
        </div>
        <div class="tab-pane fade in" id="tab2">
          @foreach($vendordeco as $vendor)
          <h3>Nama: {{$vendor->nama}}</h3>
          <p>Kota: {{$vendor->kota}}</p>
          <p>Alamat: {{$vendor->alamat}}</p>
          <p>No Kontak: {{$vendor->nokontak}}</p>
          <p>No Kontak 2: {{$vendor->nokontak2}}</p>
          <p>Deskripsi: {{$vendor->deskripsi}}</p>
          <p>Harga: {{$vendor->price}}</p>
          <p>Company Profile: {{$vendor->compro}}</p>
          <a href="{{ url('/updateven/'.$vendor->idven) }}">Edit</a>
          <a href="{{ url('/delven/'.$vendor->idven) }}">Delete</a>
          @endforeach
          <div class="alert">
            <button type="submit"><a href="{{ url('/addven') }}">Tambah Vendor</a></button>
          </div>
        </div>
        <div class="tab-pane fade in" id="tab3">
          @foreach($vendorcat as $vendor)
          <h3>Nama: {{$vendor->nama}}</h3>
          <p>Kota: {{$vendor->kota}}</p>
          <p>Alamat: {{$vendor->alamat}}</p>
          <p>No Kontak: {{$vendor->nokontak}}</p>
          <p>No Kontak 2: {{$vendor->nokontak2}}</p>
          <p>Deskripsi: {{$vendor->deskripsi}}</p>
          <p>Harga: {{$vendor->price}}</p>
          <p>Company Profile: {{$vendor->compro}}</p>
          <a href="{{ url('/updateven/'.$vendor->idven) }}">Edit</a>
          <a href="{{ url('/delven/'.$vendor->idven) }}">Delete</a>
          @endforeach
          <div class="alert">
            <button type="submit"><a href="{{ url('/addven') }}">Tambah Vendor</a></button>
          </div>
        </div>
        <div class="tab-pane fade in" id="tab4">
          @foreach($vendoreo as $vendor)
          <h3>Nama: {{$vendor->nama}}</h3>
          <p>Kota: {{$vendor->kota}}</p>
          <p>Alamat: {{$vendor->alamat}}</p>
          <p>No Kontak: {{$vendor->nokontak}}</p>
          <p>No Kontak 2: {{$vendor->nokontak2}}</p>
          <p>Deskripsi: {{$vendor->deskripsi}}</p>
          <p>Harga: {{$vendor->price}}</p>
          <p>Company Profile: {{$vendor->compro}}</p>
          <a href="{{ url('/updateven/'.$vendor->idven) }}">Edit</a>
          <a href="{{ url('/delven/'.$vendor->idven) }}">Delete</a>
          @endforeach
          <div class="alert">
            <button type="submit"><a href="{{ url('/addven') }}">Tambah Vendor</a></button>
          </div>
        </div>
        <div class="tab-pane fade in" id="tab5">
          @foreach($vendorex as $vendor)
          <h3>Nama: {{$vendor->nama}}</h3>
          <p>Kota: {{$vendor->kota}}</p>
          <p>Alamat: {{$vendor->alamat}}</p>
          <p>No Kontak: {{$vendor->nokontak}}</p>
          <p>No Kontak 2: {{$vendor->nokontak2}}</p>
          <p>Deskripsi: {{$vendor->deskripsi}}</p>
          <p>Harga: {{$vendor->price}}</p>
          <p>Company Profile: {{$vendor->compro}}</p>
          <a href="{{ url('/updateven/'.$vendor->idven) }}">Edit</a>
          <a href="{{ url('/delven/'.$vendor->idven) }}">Delete</a>
          @endforeach
          <div class="alert">
            <button type="submit"><a href="{{ url('/addven') }}">Tambah Vendor</a></button>
          </div>
        </div>
      </div>
    </div>
    
</div>
            
<style>
/* USER PROFILE PAGE */
.card {
    margin-top: 20px;
    padding: 30px;
    background-color: rgba(214, 224, 226, 0.2);
    -webkit-border-top-left-radius:5px;
    -moz-border-top-left-radius:5px;
    border-top-left-radius:5px;
    -webkit-border-top-right-radius:5px;
    -moz-border-top-right-radius:5px;
    border-top-right-radius:5px;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
.card.hovercard {
    position: relative;
    padding-top: 0;
    overflow: hidden;
    text-align: center;
    background-color: #fff;
    background-color: rgba(255, 255, 255, 1);
}
.card.hovercard .card-background {
    height: 130px;
}
.card-background img {
    -webkit-filter: blur(25px);
    -moz-filter: blur(25px);
    -o-filter: blur(25px);
    -ms-filter: blur(25px);
    filter: blur(25px);
    margin-left: -100px;
    margin-top: -200px;
    min-width: 130%;
}
.card.hovercard .useravatar {
    position: absolute;
    top: 15px;
    left: 0;
    right: 0;
}
.card.hovercard .useravatar img {
    width: 100px;
    height: 100px;
    max-width: 100px;
    max-height: 100px;
    -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    border-radius: 50%;
    border: 5px solid rgba(255, 255, 255, 0.5);
}
.card.hovercard .card-info {
    position: absolute;
    bottom: 14px;
    left: 0;
    right: 0;
}
.card.hovercard .card-info .card-title {
    padding:0 5px;
    font-size: 20px;
    line-height: 1;
    color: #262626;
    background-color: rgba(255, 255, 255, 0.1);
    -webkit-border-radius: 4px;
    -moz-border-radius: 4px;
    border-radius: 4px;
}
.card.hovercard .card-info {
    overflow: hidden;
    font-size: 12px;
    line-height: 20px;
    color: #737373;
    text-overflow: ellipsis;
}
.card.hovercard .bottom {
    padding: 0 20px;
    margin-bottom: 17px;
}
.btn-pref .btn {
    -webkit-border-radius:0 !important;
}
</style>
@endsection

@section('javascript')
<script>
$(document).ready(function() {
$(".btn-pref .btn").click(function () {
    $(".btn-pref .btn").removeClass("btn-primary").addClass("btn-default");
    // $(".tab").addClass("active"); // instead of this do the below 
    $(this).removeClass("btn-default").addClass("btn-primary");   
});
});
</script>
@endsection
