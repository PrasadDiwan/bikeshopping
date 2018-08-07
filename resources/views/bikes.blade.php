@extends('layouts.master')
@section('header')
	<!-- the jScrollPane script -->
	<script type="text/javascript" src="{{ asset('') }}theme_assets/js/jquery.jscrollpane.min.js"></script>
			<script type="text/javascript" id="sourcecode">
				$(function()
				{
					$('.scroll-pane').jScrollPane();
				});
			</script>
	<!-- //the jScrollPane script -->
@endsection

@section('content')
	<!--product start here-->
	<div class="product">
		<div class="container">
			<div class="product-main">
				  <div class=" product-menu-bar">
				    	<div class="col-md-3 prdt-right">
						<div class="w_sidebar">
							<section  class="sky-form">
								<h1>Categories</h1>
								<div class="row1 scroll-pane">
									<div class="col col-4">
										<label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>All Accessories</label>
									</div>
									<div class="col col-4">								
										<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>handbags</label>
										<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Bracelets</label>
										<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Watches</label>			
									</div>
								</div>
							</section>
							<section  class="sky-form">
								<h2>Brand</h2>
								<div class="row1 row2 scroll-pane">
									<div class="col col-4">
										<label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>All Brands</label>
									</div>
									<div class="col col-4">
									    <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>kurtas</label>
										<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Sonata</label>
										<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Titan</label>
										<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Puma</label>
										<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Nike</label>
										<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Fastrack</label>
										<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Chanel</label>
										<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Fendi</label>
										<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Hilde Palladino</label>
										<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Lana Marks</label>
										<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Prada</label>
										<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>flipkart</label>									
									</div>
								</div>
							</section>
							<section class="sky-form">
								<h4>discount</h4>
									<div class="row1 row2 scroll-pane">
										<div class="col col-4">
											<label class="radio"><input type="radio" name="radio" checked=""><i></i>60 % and above</label>
											<label class="radio"><input type="radio" name="radio"><i></i>50 % and above</label>
											<label class="radio"><input type="radio" name="radio"><i></i>40 % and above</label>
										</div>
										<div class="col col-4">
											<label class="radio"><input type="radio" name="radio"><i></i>30 % and above</label>
											<label class="radio"><input type="radio" name="radio"><i></i>20 % and above</label>
											<label class="radio"><input type="radio" name="radio"><i></i>10 % and above</label>
										</div>
									</div>						
							</section>
							<section class="sky-form">
								<h4>Colour</h4>
									<ul class="w_nav2">
										<li><a class="color1" href="#"></a></li>
										<li><a class="color2" href="#"></a></li>
										<li><a class="color3" href="#"></a></li>
										<li><a class="color4" href="#"></a></li>
										<li><a class="color5" href="#"></a></li>
										<li><a class="color6" href="#"></a></li>
										<li><a class="color7" href="#"></a></li>
										<li><a class="color8" href="#"></a></li>
										<li><a class="color9" href="#"></a></li>
										<li><a class="color10" href="#"></a></li>
										<li><a class="color12" href="#"></a></li>
										<li><a class="color13" href="#"></a></li>
										<li><a class="color14" href="#"></a></li>
										<li><a class="color15" href="#"></a></li>
										<li><a class="color5" href="#"></a></li>
										<li><a class="color6" href="#"></a></li>
										<li><a class="color7" href="#"></a></li>
										<li><a class="color8" href="#"></a></li>
										<li><a class="color9" href="#"></a></li>
										<li><a class="color10" href="#"></a></li>
									</ul>
							</section>
						</div>
					</div>
				  </div>	
				  <div class="col-md-9 product-block">
				      <div class="col-md-4 home-grid">
						<div class="home-product-main">
						   <div class="home-product-top">
						      <a href="{{ URL::to('/bike_single') }}"><img src="{{ asset('/theme_assets') }}/images/h19.jpg" alt="" class="img-responsive zoom-img"></a>
						   </div>
							<div class="home-product-bottom">
									<h3><a href="{{ URL::to('/bike_single') }}">Smart Shopping</a></h3>
									<p>Explore Now</p>						
							</div>
							<div class="srch">
								<span>$200</span>
							</div>
						</div>
					 </div>
				      <div class="col-md-4 home-grid">
						<div class="home-product-main">
						   <div class="home-product-top">
						      <a href="{{ url::to('/bike_single') }}"><img src="{{ asset('/theme_assets') }}/images/h20.jpg" alt="" class="img-responsive zoom-img"></a>
						   </div>
							<div class="home-product-bottom">
									<h3><a href="single.html">Smart Shopping</a></h3>
									<p>Explore Now</p>						
							</div>
							<div class="srch">
								<span>$200</span>
							</div>
						</div>
					 </div>
				     <div class="col-md-4 home-grid">
						<div class="home-product-main">
						   <div class="home-product-top">
						      <a href="{{ url::to('/bike_single') }}"><img src="{{ asset('/theme_assets') }}/images/h21.jpg" alt="" class="img-responsive zoom-img"></a>
						   </div>
							<div class="home-product-bottom">
									<h3><a href="single.html">Smart Shopping</a></h3>
									<p>Explore Now</p>						
							</div>
							<div class="srch">
								<span>$200</span>
							</div>
						</div>
					 </div>
				      <div class="col-md-4 home-grid">
						<div class="home-product-main">
						   <div class="home-product-top">
						      <a href="{{ url::to('/bike_single') }}"><img src="{{ asset('/theme_assets') }}/images/h22.jpg" alt="" class="img-responsive zoom-img"></a>
						   </div>
							<div class="home-product-bottom">
									<h3><a href="single.html">Smart Shopping</a></h3>
									<p>Explore Now</p>						
							</div>
							<div class="srch">
								<span>$200</span>
							</div>
						</div>
					 </div>
				      <div class="col-md-4 home-grid">
						<div class="home-product-main">
						   <div class="home-product-top">
						      <a href="{{ url::to('/bike_single') }}"><img src="{{ asset('/theme_assets') }}/images/h23.jpg" alt="" class="img-responsive zoom-img"></a>
						   </div>
							<div class="home-product-bottom">
									<h3><a href="single.html">Smart Shopping</a></h3>
									<p>Explore Now</p>						
							</div>
							<div class="srch">
								<span>$200</span>
							</div>
						</div>
					 </div>
				      <div class="col-md-4 home-grid">
						<div class="home-product-main">
						   <div class="home-product-top">
						      <a href="{{ url::to('/bike_single') }}"><img src="{{ asset('/theme_assets') }}/images/h24.jpg" alt="" class="img-responsive zoom-img"></a>
						   </div>
							<div class="home-product-bottom">
									<h3><a href="single.html">Smart Shopping</a></h3>
									<p>Explore Now</p>						
							</div>
							<div class="srch">
								<span>$200</span>
							</div>
						</div>
					 </div>
				      <div class="col-md-4 home-grid">
						<div class="home-product-main">
						   <div class="home-product-top">
						      <a href="{{ url::to('/bike_single') }}"><img src="{{ asset('/theme_assets') }}/images/h25.jpg" alt="" class="img-responsive zoom-img"></a>
						   </div>
							<div class="home-product-bottom">
									<h3><a href="single.html">Smart Shopping</a></h3>
									<p>Explore Now</p>						
							</div>
							<div class="srch">
								<span>$200</span>
							</div>
						</div>
					 </div>
				      <div class="col-md-4 home-grid">
						<div class="home-product-main">
						   <div class="home-product-top">
						      <a href="{{ url::to('/bike_single') }}"><img src="{{ asset('/theme_assets') }}/images/h26.jpg" alt="" class="img-responsive zoom-img"></a>
						   </div>
							<div class="home-product-bottom">
									<h3><a href="single.html">Smart Shopping</a></h3>
									<p>Explore Now</p>						
							</div>
							<div class="srch">
								<span>$200</span>
							</div>
						</div>
					 </div>
				      <div class="col-md-4 home-grid">
						<div class="home-product-main">
						   <div class="home-product-top">
						      <a href="{{ url::to('/bike_single') }}"><img src="{{ asset('/theme_assets') }}/images/h27.jpg" alt="" class="img-responsive zoom-img"></a>
						   </div>
							<div class="home-product-bottom">
									<h3><a href="single.html">Smart Shopping</a></h3>
									<p>Explore Now</p>						
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
	<!--product end here-->
@endsection