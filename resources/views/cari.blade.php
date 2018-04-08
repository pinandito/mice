@extends('layout.app')
@section('content')
<div class="container" style="margin-top: 20px; margin-bottom: 20px;">
  <div class="row">
    <div class="col-md-11">
			<div class="subscribe-form-1">
			<p>Cari Venue, Entertainment, Decorator, Food and Beverage.</p>
				<form class="news-letter mailchimp" action="{{ url('/search') }}" role="form" method="GET">
					<input class="form-control" type="text" name="kategori" placeholder="Venue / Entertainment / Decorator / EO / Catering / Extra ...">
					<input class="form-control" type="text" name="kota" placeholder="Kota ...">
					<input class="form-control" type="text" name="compro" placeholder="Company Profile ...">
					<button type="submit" class="subscribe-btn btn">CARI</button>
				</form>
			</div>	
    </div>
  </div>
</div>
<!--- end of-->
<!-- Collection of Venue -->
<div id="howitworks" class="subsection">
  <div class="container">
		<div class="row">
			<div class="expand-content display-flex" style="padding-top: 0;">
				<div id="colvenbday" class="expand-content display-flex" style="">
					@foreach($vendor as $vendor)						
						<div style="" class="col-sm-6 col-md-2 box">
							<img src="" width="72" height="72">
							<h3>{{ $vendor->nama }}</h3>		
							<div  style="" class="col-sm-6">
								<button><a href="{{ url('/profilev/'.$vendor->user_id) }}" target="_blank">Profile</a></button>
							</div>
						</div>
					@endforeach
				</div>
			</div> 
        </div>
	</div>
</div>
<!-- End Col Venue -->

<!-- /.contact section -->
<div id="contact">
<div class="contact fullscreen parallax" style="background-image:url('img/.jpg');" data-img-width="2000" data-img-height="1334" data-diff="100">
		<div class="overlay">
				<div class="container">
						<div class="row contact-row">
						<!-- /.address and contact -->
						<div class="col-sm-5 contact-left wow fadeInUp">
							<h2><span class="highlight">Get</span> in touch</h2>
							<ul class="ul-address">
								<li><i class="pe-7s-map-marker"></i>WTC5 3A floor, Jl. Jendral Sudirman Kav. 29-31</br>
										Jakarta, 12920
								</li>
								<li><i class="pe-7s-phone"></i>+62 21 2555 5700</br>
										+62 21 2555 5701
								</li>
								<li><i class="pe-7s-mail"></i><a href="mailto:info@yoursite.com">info@magang.com</a></li>
								<li><i class="pe-7s-look"></i><a href="#">www.magang.com</a></li>
							</ul>	
						</div>

						<!-- /.contact form -->
						<div class="col-sm-7 contact-right">
							<form method="POST" id="contact-form" class="form-horizontal" action="contactengine.php" onSubmit="alert( 'Thank you for your feedback!' );">
								<div class="form-group">
									<input type="text" name="Name" id="Name" class="form-control wow fadeInUp" placeholder="Name" required/>
								</div>
								<div class="form-group">
									<input type="text" name="Email" id="Email" class="form-control wow fadeInUp" placeholder="Email" required/>
								</div>					
								<div class="form-group">
									<textarea name="Message" rows="10" cols="10" id="Message" class="form-control input-message wow fadeInUp"  placeholder="Message" required></textarea>
								</div>
								<div class="form-group">
									<input type="submit" name="submit" value="Submit" class="btn btn-success wow fadeInUp" />
								</div>
							</form>		
						</div>
						</div>
				</div>
		</div>
</div>
</div>

@endsection