@extends('layouts.appweb')

@section('content')
        <!-- /.subscribe section -->
        <div id="download">
            <div class="action fullscreen parallax" style="background-image:url('template/backyard/images/magang4.jpg');" data-img-width="1920" data-img-height="1281" data-diff="100">
                <div class="overlay">
                    <div class="container">
                        <div class="col-md-8 col-md-offset-2 col-sm-12 text-center">
                            <h2>Cari kerja susah, magang saja!!!</h2>
                            <p class="download-text">Ketik pada kotak di bawah, lokasi, jurusan pendidikan terakhir dan posisi magang yang dicari.</p>

                            <!-- /.subscribe form -->
                            <div class="subscribe-form wow fadeInUp">
                                <form class="news-letter mailchimp" action="http://moxdesign.us10.list-manage.com/subscribe/post" role="form" method="POST">
                                    <input type="hidden" name="u" value="503bdae81fde8612ff4944435">
                                    <input type="hidden" name="id" value="bfdba52708">
                                    <input class="form-control" type="email" name="MERGE0" placeholder="Lokasi, Pendidikan, Posisi ..." required="">
                                    <button type="submit" class="subscribe-btn btn">CARI MAGANG</button>
                                </form>
                            </div>	
                        </div>	
                    </div>	
                </div>
            </div>
        </div>

        <!-- /.intro section -->
        <div id="intro">
            <div class="container">
                <div class="row">

                    <!-- /.intro image -->
                    <div class="col-md-6 intro-pic wow slideInLeft">
                        <img src="{{ asset('template/backyard/images/magang2.jpg') }}" alt="ipad" class="img-responsive">
                    </div>	

                    <!-- /.intro content -->
                    <div class="col-md-6 wow slideInRight">
                        <h2>Cari Magang dimanapun kau berada</h2>
                        <p>“Do not let what you cannot do interfere with what you can do.” – John Wooden.
                        </p>
                        <p>If you look around, inspiration is constantly entering your life, you just have to know where to look. The next time you’re second guessing yourself or feeling defeated, focus on your passion. This will remind you to focus on your dreams and to keep working toward your goals. As an intern, you have the opportunity to become the professional you’ve always wanted to be. You just have to hold on to what inspires you to follow your dreams.
                        </p>

                        <div class="btn-section"><a href="#feature" class="btn-default">Learn More</a></div>

                    </div>
                </div>			  
            </div>
        </div>

        <!-- /.pricing section -->
        <div id="package">
            <div class="container">
                <div class="text-center">

                    <!-- /.pricing title -->
                    <h2 class="wow fadeInLeft">PACKAGES</h2>
                    <div class="title-line wow fadeInRight"></div>
                </div>
                <div class="row package-option">

                    <!-- /.package 1 -->
                    <div class="col-sm-3">
                        <div class="price-box wow fadeInUp">
                            <div class="price-heading text-center">

                                <!-- /.package icon -->
                                <i class="pe-7s-radio pe-5x"></i>

                                <!-- /.package name -->
                                <h3>Basic</h3>
                            </div>

                            <!-- /.price -->
                            <div class="price-group text-center">
                                <span class="dollar">$</span>
                                <span class="price">9</span>
                                <span class="time">/mo</span>
                            </div>

                            <!-- /.package features -->
                            <ul class="price-feature text-center">
                                <li><strong>100MB</strong> Disk Space</li>
                                <li><strong>200MB</strong> Bandwidth</li>
                                <li><strong>2</strong> Subdomains</li>
                                <li><strong>5</strong> Email Accounts</li>
                                <li><strike>Webmail Support</strike></li>				  
                            </ul>

                            <!-- /.package button -->
                            <div class="price-footer text-center">
                                <a class="btn btn-price" href="#">BUY NOW</a>
                            </div>	
                        </div>
                    </div>

                    <!-- /.package 2 -->
                    <div class="col-sm-3">
                        <div class="price-box wow fadeInUp" data-wow-delay="0.2s">
                            <div class="price-heading text-center">

                                <!-- /.package icon -->
                                <i class="pe-7s-joy pe-5x"></i>

                                <!-- /.package name -->
                                <h3>Standard</h3>
                            </div>

                            <!-- /.price -->
                            <div class="price-group text-center">
                                <span class="dollar">$</span>
                                <span class="price">19</span>
                                <span class="time">/mo</span>
                            </div>

                            <!-- /.package features -->
                            <ul class="price-feature text-center">
                                <li><strong>300MB</strong> Disk Space</li>
                                <li><strong>400MB</strong> Bandwidth</li>
                                <li><strong>5</strong> Subdomains</li>
                                <li><strong>10</strong> Email Accounts</li>
                                <li><strike>Webmail Support</strike></li>			  
                            </ul>

                            <!-- /.package button -->
                            <div class="price-footer text-center">
                                <a class="btn btn-price" href="#">BUY NOW</a>
                            </div>
                        </div>
                    </div>	

                    <!-- /.package 3 -->
                    <div class="col-sm-3">
                        <div class="price-box wow fadeInUp" data-wow-delay="0.4s">
                            <div class="price-heading text-center">

                                <!-- /.package icon -->
                                <i class="pe-7s-science pe-5x"></i>

                                <!-- /.package name -->
                                <h3>Advance</h3>
                            </div>

                            <!-- /.price -->
                            <div class="price-group text-center">
                                <span class="dollar">$</span>
                                <span class="price">29</span>
                                <span class="time">/mo</span>
                            </div>

                            <!-- /.package features -->
                            <ul class="price-feature text-center">
                                <li><strong>1GB</strong> Disk Space</li>
                                <li><strong>1GB</strong> Bandwidth</li>
                                <li><strong>10</strong> Subdomains</li>
                                <li><strong>25</strong> Email Accounts</li>
                                <li>Webmail Support</li>					  
                            </ul>

                            <!-- /.package button -->
                            <div class="price-footer text-center">
                                <a class="btn btn-price" href="#">BUY NOW</a>
                            </div>	
                        </div>
                    </div>

                    <!-- /.package 4 -->
                    <div class="col-sm-3">
                        <div class="price-box wow fadeInUp" data-wow-delay="0.6s">
                            <div class="price-heading text-center">

                                <!-- /.package icon -->
                                <i class="pe-7s-tools pe-5x"></i>

                                <!-- /.package name -->
                                <h3>Ultimate</h3>
                            </div>

                            <!-- /.price -->
                            <div class="price-group text-center">
                                <span class="dollar">$</span>
                                <span class="price">49</span>
                                <span class="time">/mo</span>
                            </div>

                            <!-- /.package features -->
                            <ul class="price-feature text-center">
                                <li><strong>5GB</strong> Disk Space</li>
                                <li><strong>5GB</strong> Bandwidth</li>
                                <li><strong>50</strong> Subdomains</li>
                                <li><strong>50</strong> Email Accounts</li>
                                <li>Webmail Support</li>			  
                            </ul>

                            <!-- /.package button -->
                            <div class="price-footer text-center">
                                <a class="btn btn-price" href="#">BUY NOW</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- /.client section -->
        <div id="client"> 
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <img alt="client" src="{{ asset('template/backyard/images/client1.png') }}" class="wow fadeInUp">
                        <img alt="client" src="{{ asset('template/backyard/images/client2.png') }}" class="wow fadeInUp" data-wow-delay="0.2s">
                        <img alt="client" src="{{ asset('template/backyard/images/client3.png') }}" class="wow fadeInUp" data-wow-delay="0.4s">
                        <img alt="client" src="{{ asset('template/backyard/images/client4.png') }}" class="wow fadeInUp" data-wow-delay="0.6s">
                    </div>
                </div>
            </div>	
        </div>

        <!-- /.testimonial section -->
        <div id="testi">
            <div class="container">
                <div class="text-center">
                    <h2 class="wow fadeInLeft">TESTIMONIALS</h2>
                    <div class="title-line wow fadeInRight"></div>
                </div>
                <div class="row">
                    <div class="col-sm-10 col-sm-offset-1">	
                        <div id="owl-testi" class="owl-carousel owl-theme wow fadeInUp">

                            <!-- /.testimonial 1 -->
                            <div class="testi-item">
                                <div class="client-pic text-center">

                                    <!-- /.client photo -->
                                    <img src="{{ asset('template/backyard/images/testi1.jpg') }}" alt="client">
                                </div>
                                <div class="box">

                                    <!-- /.testimonial content -->
                                    <p class="message text-center">"We are very happy and satisfied with Backyard service. Our account manager is efficient and very knowledgeable. It was able to create a vast fan base within very short period of time. We would highly recommend Backyard App to anyone."</p>
                                </div>
                                <div class="client-info text-center">

                                    <!-- /.client name -->
                                    Jennifer Lopez, <span class="company">Microsoft</span>	
                                </div>
                            </div>		

                            <!-- /.testimonial 2 -->
                            <div class="testi-item">
                                <div class="client-pic text-center">

                                    <!-- /.client photo -->
                                    <img src="{{ asset('template/backyard/images/testi2.jpg') }}" alt="client">
                                </div>
                                <div class="box">

                                    <!-- /.testimonial content -->
                                    <p class="message text-center">"Everything looks great... Thanks for the quick revision turn around. We were lucky to find you guys and will definitely be using some of your other services in the near future."</p>
                                </div>
                                <div class="client-info text-center">

                                    <!-- /.client name -->
                                    Mike Portnoy, <span class="company">Dream Theater</span>	
                                </div>
                            </div>				

                            <!-- /.testimonial 3 -->
                            <div class="testi-item">
                                <div class="client-pic text-center">

                                    <!-- /.client photo -->
                                    <img src="{{ asset('template/backyard/images/testi3.jpg') }}" alt="client">
                                </div>
                                <div class="box">

                                    <!-- /.testimonial content -->
                                    <p class="message text-center">"Overall, the two reports were very clear and helpful so thank you for the suggestion to do the focus group. We are currently working with our developer to implement some of these suggestions."</p>
                                </div>
                                <div class="client-info text-center">

                                    <!-- /.client name -->
                                    Jennifer Love Hewitt, <span class="company">Lead Vocal</span>	
                                </div>
                            </div>			

                        </div>
                    </div>	
                </div>	
            </div>
        </div>

        <!-- /.contact section -->
        <div id="contact">
            <div class="contact fullscreen parallax" style="background-image:url('images/bg2.jpg');" data-img-width="2000" data-img-height="1334" data-diff="100">
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
                                        <textarea name="Message" rows="20" cols="20" id="Message" class="form-control input-message wow fadeInUp"  placeholder="Message" required></textarea>
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