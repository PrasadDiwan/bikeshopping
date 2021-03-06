
@extends('layouts.master')

@section('content')
	
	<!--banner strat here-->
	<div class="banner">
		<div class="container">
			<div class="banner-main">
				<div class="col-md-6 banner-left">
					<a href="single.html"><img src="{{URL::to('/')}}/theme_assets/images/ba.png" alt="" class="img-responsive"></a>
				</div>
				<div class="col-md-6 banner-right simpleCart_shelfItem">
					<span class="bann-heart"> </span>
					<h2>Handbags one</h2>
					<h1>Sed perspiciatis unde</h1>
					<h5 class="item_price">$200.00</h5>
					<ul class="bann-small-img">
						<li><a href="single.html"><img src="{{URL::to('/')}}/theme_assets/images/b1.jpg"></a></li>
						<li><a href="single.html"><img src="{{URL::to('/')}}/theme_assets/images/b2.jpg"></a></li>
					</ul>
					<h6>Size Charts</h6>
					<ul class="bann-btns">
					<li><select class="bann-size">
						<option value="select your location">Size</option>
						<option value="saab">Small</option>
						<option value="fiat">Medium</option>
						<option value="audi">Large</option>
					</select>
					</li>
					<li><a href="#" class="item_add">Add To Cart</a></li>
	               </ul>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!--banner end here-->
	<!--block-layer2 start here-->
	<div class="blc-layer2">
		<div class="container">
			<div class="blc-layer2-main">
				 <div class="col-md-6 blc-layer2-left">
				 	  <h3>voluptatem sequi nesciunt.</h3>
				 	  <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system.</p>
				 </div>
				 <div class="col-md-6 blc-layer2-right">
				 	
				 </div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!--block-layer2 end here-->
	<!--block-layer1 start here-->
	<div class="blc-layer3">
		<div class="container">
			<div class="blc-layer3-main">
				   <div class="col-md-4 blc-layer3-grids1">
				   	    <h6>Story</h6>
				   	    <h3>Denouncing pleasure</h3>
				   	    <p>pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder.</p>
				         <h6>Benefits</h6>
				        <ul>
				        	<li><h4>Temporibus autem quibusdam</h4>
				        		<h5>At vero eos et accusamus et iusto odio</h5>
				        	</li>
				        	<li><h4>These cases are perfectly</h4>
				        		<h5>voluptatum deleniti atque corrupti quos</h5>
				        	</li>
				        </ul>
				   </div>
				   <div class="col-md-4 blc-layer3-grids2">
				   	<a href="single.html"><img src="{{URL::to('/')}}/theme_assets/images/bracelate.png" alt=""></a>
				   </div>
				   <div class="col-md-4 blc-layer3-grids-3 simpleCart_shelfItem">
					 <div class="box-grid">
					   	<h3><a href="single.html">Brand</a></h3>
					   	<p>Nam libero tempore cum</p>
					   	<h5>At vero eos et accusamus iusto</h5>
					   	<a href="single.html"><img src="{{URL::to('/')}}/theme_assets/images/w2.png" alt=""></a>
					   	<div class="box-grid-price">
					   		<div class="box-grid-price-left">
					   			<h4>Stock</h4>
					   		</div>
					   		<div class="box-grid-price-rit">
					   			<h4 class="item_price">$250</h4>
					   		</div>
					   		<div class="clearfix"> </div>
					   	</div>
					   	<ul class="bann-btns">
							<li class="ys-margin"><select class="bann-size">
								<option value="saab">Small</option>
								<option value="fiat">Medium</option>
								<option value="audi">Large</option>
							</select>
							</li>
							<li><a href="#" class="item_add">Add To Cart</a></li>
		               </ul>
					 </div>
				   </div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!--block-layer1 end here-->
	<!--home-block start here-->
	<div class="home-block">
		<div class="container">
			<div class="home-block-main">
				<div class="col-md-3 home-grid">
					<div class="home-product-main">
					   <div class="home-product-top">
					      <a href="product.html"><img src="{{URL::to('/')}}/theme_assets/images/h1.jpg" alt="" class="img-responsive zoom-img"></a>
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
				<div class="col-md-3 home-grid">
					<div class="home-product-main">
					   <div class="home-product-top">
					      <a href="product.html"><img src="{{URL::to('/')}}/theme_assets/images/h2.jpg" alt="" class="img-responsive zoom-img"></a>
					   </div>
						<div class="home-product-bottom">
								<h3><a href="single.html">Smart Shopping</a></h3>
								<p>Explore Now</p>						
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
								<h3><a href="single.html">Smart Shopping</a></h3>
								<p>Explore Now</p>						
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
	<!--home block end here-->
@endsection