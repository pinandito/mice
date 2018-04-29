@extends('layout.app')

@section('contentmobile')
		<div class="mobile_search_see one">
			<div class="selects">
				<div>
					<input class="directify_fn_search_input" type="search" placeholder="What Are You Looking For?" />
				</div>
				<div>
					<select class="directify_fn_select">
						<option value="all">All Listings</option>
						<option value="restaurant">Restaurants</option>
						<option value="hotel">Hotels</option>
						<option value="shopping">Shopping</option>
						<option value="gallery">Gallery</option>
						<option value="park">Park</option>
						<option value="movie">Movie</option>
						<option value="service">Services</option>
						<option value="theatre">Theatres</option>
						<option value="hospital">Hospitals</option>
					</select>	
				</div>
				<div>
					<input type="text" id="select-location" placeholder="Location" />
					<img class="svg" src="{{asset('directify/img/svg/gps-fixed-indicator.svg') }}" alt="" />
				</div>
			</div>
			<a href="#"><img class="svg" src="{{asset('directify/img/svg/search.svg') }}" alt="" /><span>Search</span></a>
		</div>
@endsection

@section('contentheader')
					<div class="directify_fn_header_search">
						<div class="directify_fn_header_search_see_wrap one">
							<div class="header_search_see">
								<div class="selects">
									<div>
										<input class="directify_fn_search_input" type="search" placeholder="What Are You Looking For?" />
									</div>
									<div>
										<select class="directify_fn_select">
											<option value="all">All Listings</option>
											<option value="restaurant">Restaurants</option>
											<option value="hotel">Hotels</option>
											<option value="shopping">Shopping</option>
											<option value="gallery">Gallery</option>
											<option value="park">Park</option>
											<option value="movie">Movie</option>
											<option value="service">Services</option>
											<option value="theatre">Theatres</option>
											<option value="hospital">Hospitals</option>
										</select>	
									</div>
									<div>
										<input type="text" id="select-location-1" placeholder="Location" />
										<img class="svg" src="{{asset('directify/img/svg/gps-fixed-indicator.svg') }}" alt="" />
									</div>
								</div>
								<a href="#"><img class="svg" src="{{asset('directify/img/svg/search.svg') }}" alt="" /><span>Search</span></a>
							</div>
						</div>
					</div>
@endsection

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
									<input class="directify_fn_search_input" type="search" placeholder="What Are You Looking For?" />
									<a class="directify_fn_search_btn" href="{{url('/filter')}}"><img class="svg" src="{{asset('directify/img/svg/search.svg') }}" alt="" /><span>Search</span></a>
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
											<a href="listing.html">
												<img class="svg" src="{{asset('directify/img/svg/birthday.svg') }}" alt="" />
												<span class="cat_title">Birtyday</span>
											</a>
										</div>
									</div>
									<div class="cat_single">
										<div class="cat_single_bg">
											<div class="overlay_color"></div>
										</div>
										<div class="cat_single_content">
											<a href="listing.html">
												<img class="svg" src="{{asset('directify/img/svg/wedding.svg') }}" alt="" />
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
												<img class="svg" src="{{asset('directify/img/svg/shopping.svg') }}" alt="" />
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
												<img class="svg" src="{{asset('directify/img/svg/gallery.svg') }}" alt="" />
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
												<img class="svg" src="{{asset('directify/img/svg/park.svg') }}" alt="" />
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
												<img class="svg" src="{{asset('directify/img/svg/park.svg') }}" alt="" />
												<span class="cat_title">Campaigns</span>
											</a>
										</div>
									</div>
								</div>
								<div class="clearfix"></div>
								<!-- #1 item -->
								<div class="fdbox">
									<div class="featured_box_wrap">
										<div class="featured_box">
											<div class="featured_box_img">
												<img src="{{asset('directify/img/featured_listing/list1-l.jpg') }}" alt="" />
											</div>
											<div class="featured_box_price">
												<span class="text">$44</span>
												<span class="after"></span>
											</div>
											<div class="featured_box_info_wrap">
												<div class="featured_box_info">
													<div class="featured_box_like">
														<a href="#">
															<img class="svg" src="{{asset('directify/img/svg/bookmark.svg') }}" alt="" />
														</a>
														<div class="featured_box_tooltip">
															<span>Bookmark</span>
														</div>
													</div>
													<div class="featured_box_title">
														<h3><a href="listing_single1.html">Casablanca Hotel</a></h3>
													</div>
													<div class="directify_fn_rating" data-rating="4.2">
														<div class="behind">
															<img class="svg" src="{{asset('directify/img/svg/review.svg') }}" alt="" />
														</div>
														<div class="up">
															<img class="svg" src="{{asset('directify/img/svg/review.svg') }}" alt="" />
														</div>
														<div class="featured_box_preview">
															<a href="listing_single1.html"><span>Preview</span></a>
														</div>
													</div>
													<div class="featured_box_address">
														<img class="svg" src="{{asset('directify/img/svg/placeholder.svg') }}" alt="" />
														<span>147 W 43rd St New York, NY 10036</span>
													</div>
													<div class="featured_box_author_img">
														<div class="author_img">
															<img src="{{asset('directify/img/featured_listing/author1.jpg') }}" alt="" />
															<img class="svg" src="{{asset('directify/img/svg/checked.svg') }}" alt="" />
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<!-- /#1 item -->

									<!-- #2 item -->
									<div class="featured_box_wrap">
										<div class="featured_box">
											<div class="featured_box_img">
												<img src="{{asset('directify/img/featured_listing/list2-l.jpg') }}" alt="" />
											</div>
											<div class="featured_box_price">
												<span class="text">$15</span>
												<span class="after"></span>
											</div>
											<div class="featured_box_info_wrap">
												<div class="featured_box_info">
													<div class="featured_box_like">
														<a href="#">
															<img class="svg" src="{{asset('directify/img/svg/bookmark.svg') }}" alt="" />
														</a>
														<div class="featured_box_tooltip">
															<span>Bookmark</span>
														</div>
													</div>
													<div class="featured_box_title">
														<h3><a href="listing_single1.html">The Lombardy</a></h3>
													</div>
													<div class="directify_fn_rating" data-rating="4.9">
														<div class="behind">
															<img class="svg" src="{{asset('directify/img/svg/review.svg') }}" alt="" />
														</div>
														<div class="up">
															<img class="svg" src="{{asset('directify/img/svg/review.svg') }}" alt="" />
														</div>
														<div class="featured_box_preview">
															<a href="listing_single1.html"><span>Preview</span></a>
														</div>
													</div>
													<div class="featured_box_address">
														<img class="svg" src="{{asset('directify/img/svg/placeholder.svg') }}" alt="" />
														<span>111 E 56th St New York, NY 10022</span>
													</div>
													<div class="featured_box_author_img">
														<div class="author_img">
															<img src="{{asset('directify/img/featured_listing/author2.jpg') }}" alt="" />
															<img class="svg" src="{{asset('directify/img/svg/checked.svg') }}" alt="" />
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<!-- /#2 item -->

									<!-- #3 item -->
									<div class="featured_box_wrap">
										<div class="featured_box">
											<div class="featured_box_img">
												<img src="{{asset('directify/img/featured_listing/list3-l.jpg') }}" alt="" />
											</div>
											<div class="featured_box_price">
												<span class="text">$37</span>
												<span class="after"></span>
											</div>
											<div class="featured_box_info_wrap">
												<div class="featured_box_info">
													<div class="featured_box_like">
														<a href="#">
															<img class="svg" src="{{asset('directify/img/svg/bookmark.svg') }}" alt="" />
														</a>
														<div class="featured_box_tooltip">
															<span>Bookmark</span>
														</div>
													</div>
													<div class="featured_box_title">
														<h3><a href="listing_single1.html">Rock Star Crystals</a></h3>
													</div>
													<div class="directify_fn_rating" data-rating="5">
														<div class="behind">
															<img class="svg" src="{{asset('directify/img/svg/review.svg') }}" alt="" />
														</div>
														<div class="up">
															<img class="svg" src="{{asset('directify/img/svg/review.svg') }}" alt="" />
														</div>
														<div class="featured_box_preview">
															<a href="listing_single1.html"><span>Preview</span></a>
														</div>
													</div>
													<div class="featured_box_address">
														<img class="svg" src="{{asset('directify/img/svg/placeholder.svg') }}" alt="" />
														<span>146 W 26th St New York, NY 10001</span>
													</div>
													<div class="featured_box_author_img">
														<div class="author_img">
															<img src="{{asset('directify/img/featured_listing/author3.jpg') }}" alt="" />
															<img class="svg" src="{{asset('directify/img/svg/checked.svg') }}" alt="" />
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<!-- /#3 item -->
								   </div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<!-- FROM OUR BLOG -->
	<div class="directify_fn_exmblog_wrap">
		<div class="directify_fn_exmblog">
			<div class="exmblog_wrap">
				<div class="container">
					<div class="exmblogs">
						<div class="title_holder">
							<h3>Happening Now</h3>
							<span class="title">We post everyday about places that you want to know about.</span>
							<span class="line"></span>
						</div>
						<div class="exmblog_single_wrap">
							<div class="exmblog_single">
								<img class="svg" src="{{asset('directify/img/svg/open-book.svg') }}" alt="" />
								<div class="title_holder">
									<h3><a href="blog_single.html">Best Destinations for Travellers</a></h3>
									<span class="title">Cras aliquam sagittis urna in consectetur. Aenean felis lacus.</span>
									<span class="read_more"><a href="blog_single.html">Read More</a><span class="date"> - April 01</span></span>
								</div>
							</div>
							<div class="exmblog_single">
								<img class="svg" src="{{asset('directify/img/svg/open-book.svg') }}" alt="" />
								<div class="title_holder">
									<h3><a href="blog_single.html">How to Promote Your Business</a></h3>
									<span class="title">Cras aliquam sagittis urna in consectetur. Aenean felis lacus.</span>
									<span class="read_more"><a href="blog_single.html">Read More</a><span class="date"> - March 27</span></span>
								</div>
							</div>
							<div class="exmblog_single">
								<img class="svg" src="{{asset('directify/img/svg/open-book.svg') }}" alt="" />
								<div class="title_holder">
									<h3><a href="blog_single.html">Tips for High Quality Holiday</a></h3>
									<span class="title">Cras aliquam sagittis urna in consectetur. Aenean felis lacus.</span>
									<span class="read_more"><a href="blog_single.html">Read More</a><span class="date"> - January 18</span></span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- /FROM OUR BLOG -->
</div>
<!-- /CONTENT -->
@endsection