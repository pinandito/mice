@extends('layout.appb')

@section('contentcon')
<link href="{{asset('css/stylefilter.css')}}" rel="stylesheet" id="bootstrap-css">
    <!-- CONTENT -->
    <div class="directify_fn_content">
    	<div class="directify_fn_listing_map_wrapper">
    		<!-- LISTING -->
    		<div class="directify_fn_listing">
    			<div class="listing">
    				<!-- FILTERS -->
    				<div class="filters">
    					<div class="selects">
    						<div class="select_single">
    							<select class="directify_fn_select">
									<option value="AK">All Listings</option>
									<option value="HI">Hawaii</option>
									<option value="CA">California</option>
									<option value="NV">Nevada</option>
									<option value="OR">Oregon</option>
									<option value="WA">Washington</option>
									<option value="AZ">Arizona</option>
									<option value="CO">Colorado</option>
									<option value="ID">Idaho</option>
									<option value="MT">Montana</option>
									<option value="NE">Nebraska</option>
									<option value="NM">New Mexico</option>
									<option value="ND">North Dakota</option>
									<option value="UT">Utah</option>
									<option value="WY">Wyoming</option>
									<option value="AL">Alabama</option>
									<option value="AR">Arkansas</option>
									<option value="IL">Illinois</option>
									<option value="IA">Iowa</option>
									<option value="KS">Kansas</option>
									<option value="KY">Kentucky</option>
									<option value="LA">Louisiana</option>
									<option value="MN">Minnesota</option>
									<option value="MS">Mississippi</option>
									<option value="MO">Missouri</option>
									<option value="OK">Oklahoma</option>
									<option value="SD">South Dakota</option>
									<option value="TX">Texas</option>
									<option value="TN">Tennessee</option>
									<option value="WI">Wisconsin</option>
									<option value="CT">Connecticut</option>
									<option value="DE">Delaware</option>
									<option value="FL">Florida</option>
									<option value="GA">Georgia</option>
									<option value="IN">Indiana</option>
									<option value="ME">Maine</option>
									<option value="MD">Maryland</option>
									<option value="MA">Massachusetts</option>
									<option value="MI">Michigan</option>
									<option value="NH">New Hampshire</option>
									<option value="NJ">New Jersey</option>
									<option value="NY">New York</option>
									<option value="NC">North Carolina</option>
									<option value="OH">Ohio</option>
									<option value="PA">Pennsylvania</option>
									<option value="RI">Rhode Island</option>
									<option value="SC">South Carolina</option>
									<option value="VT">Vermont</option>
									<option value="VA">Virginia</option>
									<option value="WV">West Virginia</option>
                                </select>
    						</div>
    						<div class="select_single">
    							<select class="directify_fn_select">
									<option value="AK">Filter By Tags</option>
									<option value="HI">Hawaii</option>
									<option value="CA">California</option>
									<option value="NV">Nevada</option>
									<option value="OR">Oregon</option>
									<option value="WA">Washington</option>
									<option value="AZ">Arizona</option>
									<option value="CO">Colorado</option>
									<option value="ID">Idaho</option>
									<option value="MT">Montana</option>
									<option value="NE">Nebraska</option>
									<option value="NM">New Mexico</option>
									<option value="ND">North Dakota</option>
									<option value="UT">Utah</option>
									<option value="WY">Wyoming</option>
									<option value="AL">Alabama</option>
									<option value="AR">Arkansas</option>
									<option value="IL">Illinois</option>
									<option value="IA">Iowa</option>
									<option value="KS">Kansas</option>
									<option value="KY">Kentucky</option>
									<option value="LA">Louisiana</option>
									<option value="MN">Minnesota</option>
									<option value="MS">Mississippi</option>
									<option value="MO">Missouri</option>
									<option value="OK">Oklahoma</option>
									<option value="SD">South Dakota</option>
									<option value="TX">Texas</option>
									<option value="TN">Tennessee</option>
									<option value="WI">Wisconsin</option>
									<option value="CT">Connecticut</option>
									<option value="DE">Delaware</option>
									<option value="FL">Florida</option>
									<option value="GA">Georgia</option>
									<option value="IN">Indiana</option>
									<option value="ME">Maine</option>
									<option value="MD">Maryland</option>
									<option value="MA">Massachusetts</option>
									<option value="MI">Michigan</option>
									<option value="NH">New Hampshire</option>
									<option value="NJ">New Jersey</option>
									<option value="NY">New York</option>
									<option value="NC">North Carolina</option>
									<option value="OH">Ohio</option>
									<option value="PA">Pennsylvania</option>
									<option value="RI">Rhode Island</option>
									<option value="SC">South Carolina</option>
									<option value="VT">Vermont</option>
									<option value="VA">Virginia</option>
                                    <option value="WV">West Virginia</option>
                                </select>
    						</div>
    						<div class="select_single">
    							<input type="text" id="filter-location" placeholder="Location" />
    							<img class="svg" src="{{asset('directify/img/svg/gps-fixed-indicator.svg') }}" alt="" />
    						</div>
    					</div>
    						<div class="zoomer">
    							<input type="hidden" class="slider-input" value="12" />
    						</div>
    						<div class="info_printer">
    							<span>12 Results Found</span>
    							<a href="#">Reset Filter</a>
    						</div>
    				</div>
    				<!-- /FILTERS -->
    				<!-- RESULTS -->
    				<div class="result_wrapper">
    					<ul class="result_ul directify_fn_masonry">
    					</ul>
    					<div class="clearfix"></div>
    					<div class="directify_fn_pagination">
							<ul>
								<li class="activated">
									<a href="#"><span>1</span></a>
								</li>
								<li>
									<a href="#"><span>2</span></a>
								</li>
								<li>
									<a href="#"><span>3</span></a>
								</li>
								<li>
									<a href="#"><span>4</span></a>
								</li>
								<li>
									<a href="#"><span>...</span></a>
								</li>
								<li>
									<a href="#"><span>9</span></a>
								</li>
								<li>
									<a href="#"><span>10</span></a>
								</li>
							</ul>
						</div>
    				</div>
    				<!-- /RESULTS -->
    			</div>
    		</div>
    		<!-- /LISTING -->    		
    		<div class="directify_fn_lea_map">
    			<div class="lea_map">
    				<div class="map" id="map">
		
    				</div>
    			</div>
    		</div>
    	</div>
    </div>
    <!-- /CONTENT -->
@endsection
