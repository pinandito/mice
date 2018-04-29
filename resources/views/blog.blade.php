@extends('layout.appb')

@section('contentcon')    
    <!-- CONTENT -->
    <div class="directify_fn_content">
    	<!-- BLOG -->
    	<div class="directify_fn_blog_wrap">
    		<div class="directify_fn_blog">
    			<div class="blog">
    				<div class="container">
    					<div class="blog_wrapper">
    						<ul class="directify_fn_masonry mypost">
    							<li class="directify_fn_masonry_in">
    								<div class="post">
    									<div class="img_holder">
    										<a href="{{url('/post')}}">
    											<img src="{{asset('directify/img/blog/post1.jpg') }}" alt="" />
    										</a>
    									</div>
    									<div class="title_holder">
    										<h3><a href="{{url('/post')}}">Best Destinations for Travellers</a></h3>
    										<p>Cras aliquam sagittis urna in consectetur. Aenean felis lacus.Cras aliquam sagittis urna in consectetur. Aenean felis lacus.</p>
    										<span><a href="{{url('/post')}}">Read More</a><span class="date">April 01</span></span>
    									</div>
    								</div>
    							</li>
    							<li class="directify_fn_masonry_in">
    								<div class="post">
    									<div class="img_holder">
    										<a href="{{url('/post')}}">
    											<img src="{{asset('directify/img/blog/post2.jpg')}}" alt="" />
    										</a>
    									</div>
    									<div class="title_holder">
    										<h3><a href="{{url('/post')}}">Best Destinations for Travellers</a></h3>
    										<p>Cras aliquam sagittis urna in consectetur. Aenean felis lacus.Cras aliquam sagittis urna in consectetur. Aenean felis lacus.</p>
    										<span><a href="{{url('/post')}}">Read More</a><span class="date">March 27</span></span>
    									</div>
    								</div>
    							</li>
    							<li class="directify_fn_masonry_in">
    								<div class="post">
    									<div class="img_holder">
    										<a href="{{url('/post')}}">
    											<img src="{{asset('directify/img/blog/post3.jpg') }}" alt="" />
    										</a>
    									</div>
    									<div class="title_holder">
    										<h3><a href="{{url('/post')}}">Best Destinations for Travellers</a></h3>
    										<p>Cras aliquam sagittis urna in consectetur. Aenean felis lacus.Cras aliquam sagittis urna in consectetur. Aenean felis lacus.</p>
    										<span><a href="{{url('/post')}}">Read More</a><span class="date">March 12</span></span>
    									</div>
    								</div>
    							</li>
    							<li class="directify_fn_masonry_in">
    								<div class="post">
    									<div class="img_holder">
    										<a href="{{url('/post')}}">
    											<img src="{{asset('directify/img/blog/post4.jpg') }}" alt="" />
    										</a>
    									</div>
    									<div class="title_holder">
    										<h3><a href="{{url('/post')}}">Best Destinations for Travellers</a></h3>
    										<p>Cras aliquam sagittis urna in consectetur. Aenean felis lacus.Cras aliquam sagittis urna in consectetur. Aenean felis lacus.</p>
    										<span><a href="{{url('/post')}}">Read More</a><span class="date">February 23</span></span>
    									</div>
    								</div>
    							</li>
    							<li class="directify_fn_masonry_in">
    								<div class="post">
    									<div class="img_holder">
    										<a href="{{url('/post')}}">
    											<img src="{{asset('directify/img/blog/post5.jpg') }}" alt="" />
    										</a>
    									</div>
    									<div class="title_holder">
    										<h3><a href="{{url('/post')}}">Best Destinations for Travellers</a></h3>
    										<p>Cras aliquam sagittis urna in consectetur. Aenean felis lacus.Cras aliquam sagittis urna in consectetur. Aenean felis lacus.</p>
    										<span><a href="{{url('/post')}}">Read More</a><span class="date">February 15</span></span>
    									</div>
    								</div>
    							</li>
    							<li class="directify_fn_masonry_in">
    								<div class="post">
    									<div class="img_holder">
    										<a href="{{url('/post')}}">
    											<img src="{{asset('directify/img/blog/post6.jpg') }}" alt="" />
    										</a>
    									</div>
    									<div class="title_holder">
    										<h3><a href="{{url('/post')}}">Best Destinations for Travellers</a></h3>
    										<p>Cras aliquam sagittis urna in consectetur. Aenean felis lacus.Cras aliquam sagittis urna in consectetur. Aenean felis lacus.</p>
    										<span><a href="{{url('/post')}}">Read More</a><span class="date">January 28</span></span>
    									</div>
    								</div>
    							</li>
    						</ul>
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
    				</div>
    			</div>
    		</div>
    	</div>
    	<!-- /BLOG -->
    	
    	
    </div>
    <!-- /CONTENT -->
@endsection