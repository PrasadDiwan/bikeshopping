<nav class="navbar navbar-default" role="navigation">
					    <div class="navbar-header">
					        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						        <span class="sr-only">Toggle navigation</span>
						        <span class="icon-bar"></span>
						        <span class="icon-bar"></span>
						        <span class="icon-bar"></span>
					        </button>
					        <div class="navbar-brand logo">
								<a href="{{ URL::to('/') }}"><img src="{{URL::to('/')}}/theme_assets/images/logo1.png" alt=""></a>
							</div>
					    </div>
					    <!--/.navbar-header-->
					 <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					        <ul class="nav navbar-nav">
					        	   <li><a href="{{ URL::to('/') }}">Home</a></li>
						          <li><a href="{{ url::to('/about') }}">About</a></li>
						          <li><a href="{{ url::to('/bikes') }}">Bikes</a></li>   
						        <li><a href="{{ url::to('/contact') }}">Contact</a></li>
					        </ul>
					    </div>
					    <!--/.navbar-collapse-->
					</nav>
					<!--/.navbar-->