@extends('layouts.master')
@section('content')
	<!--contact start here-->
<div class="contact">
	<div class="container">
		<div class="contact-main">
			<div class="contact-top">
				<h1>About Us</h1>
				<p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections Cicero are reproduced.The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections Cicero are reproduced.The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections Cicero are reproduced.The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections Cicero are reproduced.</p>
			</div>
			
		  <div class="clearfix"> </div>
		</div>

		<div class="row">
			<div class="col-md-12 text-center">
				<h1>Our Team</h1>
				<div class="home-block">
					<div class="container">
						<div class="home-block-main">
							<div class="col-md-3 home-grid">
								<div class="home-product-main">
								   <div class="home-product-top">
								      <a href="product.html"><img src="{{ asset('theme_assets/images') }}/h1.jpg" alt="" class="img-responsive zoom-img"></a>
								   </div>
									<div class="home-product-bottom">
											<h3><a href="single.html">Team Member Name</a></h3>
											<p>Designation</p>						
									</div>
									<div class="srch">
										<span>$200</span>
									</div>
								</div>
							</div>
							<div class="col-md-3 home-grid">
								<div class="home-product-main">
								   <div class="home-product-top">
								      <a href="product.html"><img src="{{URL::to('/')}}/theme_assets/images/h2.jpg" alt="" class="img-responsive zoom-img"></a>
								   </div>
									<div class="home-product-bottom">
											<h3><a href="single.html">Team Member Name</a></h3>
											<p>Designation</p>						
									</div>
									<div class="srch">
										<span>$250</span>
									</div>
								</div>
							</div>
							<div class="col-md-3 home-grid">
								<div class="home-product-main">
								   <div class="home-product-top">
								      <a href="product.html"><img src="{{URL::to('/')}}/theme_assets/images/h3.jpg" alt="" class="img-responsive zoom-img"></a>
								   </div>
									<div class="home-product-bottom">
											<h3><a href="single.html">Team Member Name</a></h3>
											<p>Designation</p>						
									</div>
									<div class="srch">
										<span>$150</span>
									</div>
								</div>
							</div>
							<div class="col-md-3 home-grid">
								<div class="home-product-main">
								   <div class="home-product-top">
								      <a href="product.html"><img src="{{URL::to('/')}}/theme_assets/images/h4.jpg" alt="" class="img-responsive zoom-img"></a>
								   </div>
									<div class="home-product-bottom">
											<h3><a href="single.html">Team Member Name</a></h3>
											<p>Designation</p>						
									</div>
									<div class="srch">
										<span>$200</span>
									</div>
								</div>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
				</div>
		</div>
	</div>
</div>
<!--contact end here-->
@endsection