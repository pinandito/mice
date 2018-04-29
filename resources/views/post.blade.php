@extends('layout.appb')

@section('contentcon')    
        <!-- CONTENT -->
        <div class="directify_fn_content">
    	<!-- BLOG -->
    	<div class="directify_fn_blog_single_wrap">
    		<div class="directify_fn_blog_single">
    			<div class="blog_single">
    				<div class="container">
    					<div class="blog_single_wrapper">
    						<!-- POST IMAGE -->
    						<div class="post_img">
    							<div class="bg-img jarallax" data-speed=".55"></div>
    						</div>
    						<!-- /POST IMAGE -->
    						<!-- POST CONTENT -->
    						<div class="post_content">
    							<div class="title_holder">
    								<span><a href="#">Travel</a><span class="date">April 01</span></span>
    								<h3>Best Destinations for Travellers</h3>
    								<p class="post_intro">This is just hightlight content of the post. Rest goes as it should be.  Integer non augue et dui sagittis pellentesque. Pellentesque viverra vitae mi a luctus. Suspendisse id ligula molestie, mollis dolor vitae, sagittis diam. Sed vitae malesuada dolor. </p>
    								<p class="text">Cras cursus commodo nisl, eget facilisis ipsum molestie ac. Nullam vel sem congue, feugiat risus ut, efficitur velit. Nam tincidunt in mi at porttitor.</p>
    								<p class="text">Nullam maximus eget odio nec elementum. Aliquam convallis in mauris vulputate mattis. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Duis ultrices, mi non ultricies sagittis, sem erat consequat justo, ac imperdiet justo felis id felis. Fusce ac lacus lorem. Vivamus ullamcorper purus a purus dapibus pellentesque. Sed tristique pretium ipsum at commodo. Nullam viverra iaculis tortor, sed dictum mauris. </p>
    							</div>
    							<div class="directify_fn_tags">
    								<label>Tags:</label>
    								<em><a href="#">Travel</a>,<a href="#">Destination</a>,<a href="#">Holiday</a>,<a href="#">Europe</a></em>
    							</div>
    							<div class="directify_fn_social_icons">
    								<label>Share:</label>
    								<ul>
    									<li>
    										<a href="#">
    											<i class="xcon-facebook"></i>
    										</a>
    									</li>
    									<li>
    										<a href="#">
    											<i class="xcon-twitter"></i>
    										</a>
    									</li>
    									<li>
    										<a href="#">
    											<i class="xcon-instagram"></i>
    										</a>
    									</li>
    									<li>
    										<a href="#">
    											<i class="xcon-pinterest"></i>
    										</a>
    									</li>
    									<li>
    										<a href="#">
    											<i class="xcon-gplus"></i>
    										</a>
    									</li>
    								</ul>
    							</div>
    						</div>
    						<!-- /POST CONTENT -->
    						<!-- POST COMMENT -->
    						<div class="directify_fn_comment_wrapper">
    							<div class="directify_fn_comment">
    								<!-- COMMENTS -->
    								<div class="comments">
    									<div class="title_holder">
											<h3>All Comments</h3>
										</div>
    									<!-- #1 COMMENT -->
										<div class="comment_single">
											<div class="person_info">
												<div class="info">
													<div class="img_holder">
														<img src="img/blog/single1-com1.jpg" alt="" />
													</div>
													<span class="number">07</span>
													<span class="reviews">Reviews</span>
													<span class="name">Markos</span>
												</div>
											</div>
											<div class="person_comment">
												<div class="inner">
													<span><span class="date">2 Month ago</span><a href="#">Reply</a></span>
													<p>We took the Greenwich Village Food tour followed by the Historic Downtown tour.  Jen was a great guide.  Full of energy and interesting information.  She also was flexible when we wanted to go inside a church that wasn't actually part of the tour.</p>
												</div>
											</div>
										</div>
										<!-- /#1 COMMENT -->
										<!-- #2 COMMENT -->
										<div class="comment_single">
											<div class="person_info">
												<div class="info">
													<div class="img_holder">
														<img src="img/blog/single1-com2.jpg" alt="" />
													</div>
													<span class="number">07</span>
													<span class="reviews">Reviews</span>
													<span class="name">Alaida</span>
												</div>
											</div>
											<div class="person_comment">
												<div class="inner">
													<span><span class="date">1 Month ago</span><a href="#">Reply</a></span>
													<p>Wear tennis shoes!  There is lots of walking and I repeat lots of walking!  We began at Times Square and went by the diamond district.  We looked in store windows at the beautiful jewelry.</p>
												</div>
											</div>
										</div>
										<!-- /#2 COMMENT -->
    								</div>
    								<!-- /COMMENTS -->
    								<!-- ADDING A COMMENT -->
    								<div class="add_comment_wrap">
    									<div class="add_comment">
    										<div class="title_holder">
    											<h3>Write a Comment</h3>
    										</div>
    										<form>
    											<div class="your-comment">
    												<label>Your Comment<span>*</span></label>
    												<textarea id="creator-comment" cols="3" rows="10"></textarea> 
    											</div>
    											<div class="your-name">
    												<label>Your Name<span>*</span></label>
    												<input type="text" id="creator-name" /> 
    											</div>
    											<div class="your-email">
    												<label>Your Email<span>*</span></label>
    												<input type="text" id="creator-email" /> 
    											</div>
    											<div class="your-website">
    												<label>Your Website</label>
    												<input type="text" id="creator-website" /> 
    											</div>
    											<div class="your-button">
    												<input type="submit" id="creator-submit" value="Submit Your Comment" />
    											</div>
    										</form>
    									</div>
    								</div>
    								<!-- /ADDING A COMMENT -->
    							</div>
    						</div>
    						<!-- /POST COMMENT -->		
    					</div>
    				</div>
    			</div>
    		</div>
    	</div>
    	<!-- /BLOG -->
    </div>
    <!-- /CONTENT -->
@endsection