@extends("layouts.spacedcustomlayout")

@section("body")



<!-- START SECTION BANNER -->
<section class="page-title centred" style="background-image: url(assets/images/background/page-title.jpg);">
	<div class="auto-container">
		<div class="content-box clearfix">
			<ul class="bread-crumb clearfix">
				<li><a href="/">{{ $compd ? $compd->companyname : 'company name' }}</a></li>
			</ul>
			<h1>Financial Planning</h1>                
		</div>
	</div>
</section>
<section class="service-details">
	<div class="auto-container">
		<div class="row clearfix">
							
			
			
							
			
			
							
			
			
							
			<div class="col-lg-8 col-md-12 col-sm-12 content-side">
				<div class="service-details-content">
					<div class="content-style-one">
						<figure class="image-box"><img src="serv/4.jpg" alt=""></figure>
						<div class="sec-title left">
							<h5>{{ $compd ? $compd->companyname : 'company name' }}</h5>
							<h2>Financial Planning</h2>
						</div>
						<div class="text">
							<p>
							A financial plan is a comprehensive evaluation of an investor’s current and future financial state by using 
							currently known variables to predict future cash flows, asset values and withdrawal plans. Most individuals 
							work in conjunction with their preferred financial planner and use current net worth, tax liabilities, 
							asset allocation, and future retirement and estate plans in developing financial plans. These metrics 
							are used along with estimates of asset growth to determine if a person’s financial goals can be met in 
							the future,
							or what steps need to be taken to ensure that they are.</p>
						</div>
						
					</div>
				</div>
			</div>
			
							
			
			
			
			
			
			<div class="col-lg-4 col-md-12 col-sm-12 sidebar-side">
				<div class="service-sidebar">
					<div class="sidebar-categories">
						<ul class="categories-list clearfix">
							<li><a href="{{route('services')}}" class="">Retirement Planning</a></li>
									<li><a href="{{route('realestate')}}">Real Estate & Investment Management</a></li>
									<li><a href="{{route('cannabis')}}" class="">Cannabis Investments</a></li>
									<li><a href="{{route('cryptoplans')}}" class="">Cryptocurrency Trading</a></li>
									<li><a href="{{route('finacialplaning')}}" class="active">Financial Planning</a></li>
										<li><a href="{{route('oilandgas')}}">Oil And Gas</a></li>
										<li><a href="{{route('loansandgrant')}}">Loan</a></li>
						</ul>
					</div>
					<div class="sidebar-testimonial">
						<div class="quote-box"><i class="fas fa-quote-right"></i></div>
						<div class="sidebar-carousel owl-carousel owl-theme owl-nav-none">
															<div class="content-box">
								<div class="text">
									<p>I won't stop recommending this company to every investor out there,paying securely...</p>
								</div>
								<div class="author-info">
									<figure class="image-box"><img src="images/M1EFGuaHDtwpd2N1614696167493.jpg" alt=""></figure>
									<h6>Bruce</h6>
									<span class="designation">Investor</span>
								</div>
							</div>
							
															<div class="content-box">
								<div class="text">
									<p>{{ $compd ? $compd->companyname : 'company name' }} is one of the best platform ever, if you are looking for the best company to invest, {{ $compd ? $compd->companyname : 'company name' }} is the best platform to invest</p>
								</div>
								<div class="author-info">
									<figure class="image-box"><img src="images/ZFGD1QX6ixJBu2M1614685412136.jpg" alt=""></figure>
									<h6>Osman</h6>
									<span class="designation">Investor</span>
								</div>
							</div>
							
															<div class="content-box">
								<div class="text">
									<p>So happy about the truthfulness of the company, my withdrawal was approved and my btc sent to my wallet under just few minutes after I requested for a withdrawal, I think you all should invest with {{ $compd ? $compd->companyname : 'company name' }}</p>
								</div>
								<div class="author-info">
									<figure class="image-box"><img src="images/1gB4kVWZLbHyQxF1614696122840.jpg" alt=""></figure>
									<h6>Temara</h6>
									<span class="designation">Investor</span>
								</div>
							</div>
							
															<div class="content-box">
								<div class="text">
									<p>Thank you so much {{ $compd ? $compd->companyname : 'company name' }}, I don't know how to express my gratitude to you, now I can pay my debt thank you joy Patrick for introducing me to this platform....</p>
								</div>
								<div class="author-info">
									<figure class="image-box"><img src="images/oUc2zKlgi9PuVb71614686152703.jpg" alt=""></figure>
									<h6>James Anderson</h6>
									<span class="designation">Investor</span>
								</div>
							</div>
							
															<div class="content-box">
								<div class="text">
									<p>I feel like I got a new home.
Thanks to {{ $compd ? $compd->companyname : 'company name' }} and also to the administration.</p>
								</div>
								<div class="author-info">
									<figure class="image-box"><img src="images/BeJZ4LzIiQnXPhp1633981448208.jpg" alt=""></figure>
									<h6>Jennifer</h6>
									<span class="designation">Investor</span>
								</div>
							</div>
							
															<div class="content-box">
								<div class="text">
									<p>Like many people, I spend the majority of my time planning for my business, but pay little or no attention to my own finances.{{ $compd ? $compd->companyname : 'company name' }} (GBA) has developed a personal plan for me that allows me to take much greater control of my financial affairs, and plan for the future. Everything now makes much more sense, and I only wish I had got in touch with GBA sooner!</p>
								</div>
								<div class="author-info">
									<figure class="image-box"><img src="images/eIyQYP3jH78wuFU1614695859816.jpg" alt=""></figure>
									<h6>Rodney wickman</h6>
									<span class="designation">Investor</span>
								</div>
							</div>
							
															
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!--section class="project-section">
	<div class="fluid-container">
		<div class="project-carousel theme-carousel owl-theme owl-carousel owl-dots-none owl-nav-none">
			<div class="project-block-one">
				<div class="inner-box">
					<figure class="image-box"><img src="assets/images/gallery/project-1.jpg" alt=""></figure>
					<div class="lower-content">
						<p>Corporate Management</p>
						<h2><a href="/">Global Management Apps</a></h2>
					</div>
				</div>
			</div>
			<div class="project-block-one">
				<div class="inner-box">
					<figure class="image-box"><img src="assets/images/gallery/project-2.jpg" alt=""></figure>
					<div class="lower-content">
						<p>Financial Initiatives</p>
						<h2><a href="/">Planning & Task Completion</a></h2>
					</div>
				</div>
			</div>
			<div class="project-block-one">
				<div class="inner-box">
					<figure class="image-box"><img src="assets/images/gallery/project-3.jpg" alt=""></figure>
					<div class="lower-content">
						<p>Corporate Management</p>
						<h2><a href="/">Private Workshop Assistant</a></h2>
					</div>
				</div>
			</div>
		</div>
	</div>
</section-->
</div>
<!-- END SECTION BLOG -->
<!--section class="clients-section">
	<div class="auto-container">
		<div class="clients-carousel owl-carousel owl-theme owl-dots-none owl-nav-none">
			<figure class="client-logo"><a href="/"><img src="assets/images/clients/clients-1.png" alt=""></a></figure>
			<figure class="client-logo"><a href="/"><img src="assets/images/clients/clients-2.png" alt=""></a></figure>
			<figure class="client-logo"><a href="/"><img src="assets/images/clients/clients-3.png" alt=""></a></figure>
			<figure class="client-logo"><a href="/"><img src="assets/images/clients/clients-4.png" alt=""></a></figure>
			<figure class="client-logo"><a href="/"><img src="assets/images/clients/clients-5.png" alt=""></a></figure>
		</div>
	</div>
</section-->

<section class="cta-section">
	<div class="auto-container">
		<div class="inner-container clearfix">
			<div class="title pull-left">
				<h2>Open account for free and start investing!</h2>
			</div>
			<div class="btn-box pull-right">
				<a href="{{route('register')}}">Get Started</a>
			</div>
		</div>
	</div>
</section>
<!-- cta-section end -->


<!-- fun-fact -->
<section class="fun-fact centred">
	<div class="auto-container">
		<div class="row clearfix">
			<div class="col-lg-3 col-md-6 col-sm-12 counter-column">
				<div class="counter-block-one wow slideInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
					<div class="count-outer count-box" style="font-size: 35px;">
						<span class="count-text" data-speed="1500" data-stop="100253">0</span>
					</div>
					<p>Active Users</p>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-12 counter-column">
				<div class="counter-block-one wow slideInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
					<div class="count-outer count-box" style="font-size: 35px;">
						<span class="count-text" data-speed="1500" data-stop="1338">0</span>
					</div>
					<p>Running Days</p>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-12 counter-column">
				<div class="counter-block-one wow slideInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
					<div class="count-outer count-box" style="font-size: 35px;">
						<img src="images/coins/usdt.html" style="width: 30px; height: auto;" alt=""> USDT <span class="count-text" data-speed="1500" data-stop="300021142.336">0</span>
					</div>
					<p>DEPOSIT</p>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-12 counter-column">
				<div class="counter-block-one wow slideInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
					<div class="count-outer count-box" style="font-size: 35px;">
						<img src="images/coins/usdt.html" style="width: 30px; height: auto;" alt=""> USDT <span class="count-text" data-speed="1500" data-stop="303452266721.39">0</span>
					</div>
					<p>WITHDRAWALS</p>
				</div>
			</div>
		</div>
	</div>
</section>




@endsection
