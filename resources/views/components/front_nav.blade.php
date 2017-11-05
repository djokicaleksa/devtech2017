<!-- Header
		============================================= -->
		<header id="header" class="transparent-header semi-transparent dark full-header">

			<div id="header-wrap">

				<div class="container clearfix">

					<div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

					<!-- Logo
					============================================= -->
					<div id="logo">
						<a href="index.php" class="standard-logo" data-dark-logo="images/binary1.png"><img src="{{url('images/binary1.png')}}" alt="Canvas Logo"></a>
						<a href="index.php" class="retina-logo" data-dark-logo="images/binary1.png"><img src="{{url('images/binary1.png')}}" alt="Canvas Logo"></a>
					</div><!-- #logo end -->

					<!-- Primary Navigation
					============================================= -->
					<nav id="primary-menu">

						<ul>
							<li><a href="index.php"><div>Home</div></a></li>
							<li><a href="contact.php"><div>Contact</div></a></li>
							<li><a href="about.php"><div>About us</div></a></li>
							
	

							<li><a href="index.html"><div>Ne znam jos</div></a>
								<ul>
									<li><a href="index-corporate.html"><div>Home - Corporate</div></a>
										<ul>
											<li><a href="index-corporate.html"><div>Corporate - Layout 1</div></a></li>
											<li><a href="index-corporate-2.html"><div>Corporate - Layout 2</div></a></li>
											<li><a href="index-corporate-3.html"><div>Corporate - Layout 3</div></a></li>
											<li><a href="index-corporate-4.html"><div>Corporate - Layout 4</div></a></li>
										</ul>
									</li>
								</ul>
							</li>

						</ul>

						
						

						<!-- Top Search
						============================================= -->
						<div id="top-search">
							<a href="#" id="top-search-trigger"><i class="icon-search3"></i><i class="icon-line-cross"></i></a>
							<form action="search.html" method="get">
								<input type="text" name="q" class="form-control" value="" placeholder="Type &amp; Hit Enter..">
							</form>
						</div><!-- #top-search end -->

						<ul>
							@if(!Auth::check())
							    <li><a href="{{url('/login')}}"><div>Login & Register</div></a></li>
							@endif	
						</ul>


					</nav><!-- #primary-menu end -->

				</div>

			</div>

		</header><!-- #header end -->