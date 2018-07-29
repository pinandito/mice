@extends('layout.app')

@section('contentcon')
<!-- CONTENT -->
<div class="directify_fn_content">
	<div class="directify_fn_all_listings_wrap index10 index30">
		<div class="directify_fn_all_listings_bg">
			<div class="overlay_color"></div>
			<div class="overlay_image"></div>
		</div>
		<div class="directify_fn_all_listings">
			<div class="all_listings">
				<div class="container">
					<div class="listings_wrap">
						<div class="discovering_wrap">
							<div class="discovering">
								<div class="title_holder">
									<h3>Your Great Moments, Covered</h3>
									<span>eventbeta.com helps you organize all your events in a single click</span>
								</div>
								<div class="searching">
									<h1>COMING SOON</h1>
									<!-- <input class="directify_fn_search_input" type="search" placeholder="What Are You Looking For?" /> -->
									<!-- <a class="directify_fn_search_btn" href="{{url('/filter')}}"><img class="svg" src="{{asset('directify/img/svg/search.svg') }}" alt="" /><span>Search</span></a> -->
								</div>
								<div class="title_holder">
									<span>What type of event do you want to organize?</span>
								</div>
								<div class="cat_single_wrap" data-hover-text="#fff" data-hover-bg="" data-hover-border="rgba(255,255,255,1)" data-skew="6" data-text-color="#fff" data-bg-color="" data-bg-opacity="" data-border-width="1" data-border-color="rgba(255,255,255,0.64)">
									<div class="cat_single">
										<div class="cat_single_bg">
											<div class="overlay_color"></div>
										</div>
										<div class="cat_single_content">
											<a href="listing.html" >
												<img class="" src="{{asset('img/bday.jpg') }}" alt=""/>
												<span class="cat_title">Birthday</span>
											</a>	
										</div>
									</div>
									<div class="cat_single">
										<div class="cat_single_bg">
											<div class="overlay_color"></div>
										</div>
										<div class="cat_single_content">
											<a href="listing.html">
												<img class="" src="{{asset('img/wedding_2.jpg') }}" alt="" />
												<span class="cat_title">Wedding</span>
											</a>
										</div>
									</div>
									<div class="cat_single">
										<div class="cat_single_bg">
											<div class="overlay_color"></div>
										</div>
										<div class="cat_single_content">
											<a href="listing.html">
												<img class="" src="{{asset('img/religious.jpg') }}" alt="" />
												<span class="cat_title">Religious</span>
											</a>
										</div>
									</div>
									<div class="cat_single">
										<div class="cat_single_bg">
											<div class="overlay_color"></div>
										</div>
										<div class="cat_single_content">
											<a href="listing.html">
												<img class="" src="{{asset('img/corporateevent.jpg') }}" alt="" />
												<span class="cat_title">Corporate Events</span>
											</a>
										</div>
									</div>
									<div class="cat_single">
										<div class="cat_single_bg">
											<div class="overlay_color"></div>
										</div>
										<div class="cat_single_content">
											<a href="listing.html">
												<img class="" src="{{asset('img/education.jpg') }}" alt="" />
												<span class="cat_title">Educational Trips</span>
											</a>
										</div>
									</div>
									<div class="cat_single">
										<div class="cat_single_bg">
											<div class="overlay_color"></div>
										</div>
										<div class="cat_single_content">
											<a href="listing.html">
												<img class="" src="{{asset('img/campaign.jpg') }}" alt="" />
												<span class="cat_title">Campaigns</span>
											</a>
										</div>
									</div>
								</div>
								<div class="clearfix"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- /CONTENT -->
@endsection