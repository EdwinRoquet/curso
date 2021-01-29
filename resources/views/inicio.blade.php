
<!DOCTYPE html>
<html lang="es">
<head>
<title>CASEIPA</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<meta name="keywords" content="Es una agencia de de capcacitación de constancias dc3, cursos, para poder laborar en la industria o construcció-n" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all" />
<!--// bootstrap-css -->
<!-- css -->
<link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css" media="all" />
<!--// css -->
<!-- font-awesome icons -->
<link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet">
<!-- //font-awesome icons -->
<!-- font -->
<link href="//fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
<!-- //font -->
<script src="{{ asset('js/jquery-2.2.3.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.js') }}"></script>
</head>
<body>
	<!-- w3-banner -->
	<div class="w3-banner jarallax">
		<div class="wthree-different-dot">
			<div class="w3layouts-header-top">
				<div class="container">
					<div class="w3-header-top-grids">
						<div class="w3-header-top-left">
							<p><i class="fa fa-volume-control-phone" aria-hidden="true"></i> +52 921 200 79 14</p>
						</div>
						<div class="w3-header-top-right">
							<div class="agileinfo-social-grids">
								<ul>
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								</ul>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
			</div>
			<div class="head">
				<div class="container">
					<div class="navbar-top">
							<!-- Brand and toggle get grouped for better mobile display -->
							<div class="navbar-header">
							  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							  </button>
								 <div class="navbar-brand logo ">
									<h1><a href=" ">CASEIPA</a></h1>
								</div>

							</div>

							<!-- Collect the nav links, forms, and other content for toggling -->
							<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							 <ul class="nav navbar-nav link-effect-4">
								<li class="active first-list"><a href="index.html">Inicio</a></li>
								<li><a href="about.html">About</a></li>
								<li><a href="contact.html">Contact</a></li>
							</ul>
							</div><!-- /.navbar-collapse -->
						</div>
				</div>
			</div>
			<!-- banner -->
			<div class="banner">
				<div class="container">
					<div class="slider">

						<script src=" {{ asset('js/responsiveslides.min.js') }}"></script>
						<script>
								// You can also use "$(window).load(function() {"
								$(function () {
								// Slideshow 4
									$("#slider3").responsiveSlides({
										auto: true,
										pager: true,
										nav: true,
										speed: 500,
										namespace: "callbacks",
										before: function () {
											$('.events').append("<li>before event fired.</li>");
										},
										after: function () {
											$('.events').append("<li>after event fired.</li>");
										}
									 });
								});
						</script>
						<div  id="top" class="callbacks_container-wrap">
							<ul class="rslides" id="slider3">
								<li>
									<div class="slider-info">
										<h3>Constancias DC3</h3>
										<p>Curabitur eget metus eget erat vehicula semper vitae sed leo</p>
										{{-- <div class="more-button">
											<a href="#" data-toggle="modal" data-target="#myModal">Read More</a>
										</div> --}}
									</div>
								</li>
								<li>
									<div class="slider-info">
										<h3>Diplomas</h3>
										<p>Quisque nisl risus, egestas in convallis vitae, fringilla cursus magna</p>
										{{-- <div class="more-button">
											<a href="#" data-toggle="modal" data-target="#myModal">Read More</a>
										</div> --}}
									</div>
								</li>
								<li>
									<div class="slider-info">
										<h3>Qr verificacion</h3>
										<p> Suspendisse bibendum dictum metus, at finibus elit dignissim nec	</p>
										{{-- <div class="more-button">
											<a href="#" data-toggle="modal" data-target="#myModal">Read More</a>
										</div> --}}
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<!-- //banner -->
		</div>
	</div>
    <!-- //w3-banner -->

	<!-- modal -->
	{{-- <div class="modal about-modal fade" id="myModal" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title">Stock Industry</h4>
					</div>
					<div class="modal-body">
					<div class="agileits-w3layouts-info">
						<img src="{{ asset('images/g2.jpg') }} " alt="" />
						<p>Duis venenatis, turpis eu bibendum porttitor, sapien quam ultricies tellus, ac rhoncus risus odio eget nunc. Pellentesque ac fermentum diam. Integer eu facilisis nunc, a iaculis felis. Pellentesque pellentesque tempor enim, in dapibus turpis porttitor quis. Suspendisse ultrices hendrerit massa. Nam id metus id tellus ultrices ullamcorper.  Cras tempor massa luctus, varius lacus sit amet, blandit lorem. Duis auctor in tortor sed tristique. Proin sed finibus sem.</p>
					</div>
				</div>
			</div>
		</div>
	</div> --}}
	<!-- //modal -->
	<!-- services -->
	<div class="services">
		<div class="container">
			<h2 class="agileits-title">Servicios</h2>
			<div class="w3-services-grids">
				<div class="col-md-3 col-xs-6 w3l-services-grid">
					<div class="w3l-services-text">
						<div class="w3ls-services-img">
							<i class="fa fa-university" aria-hidden="true"></i>
						</div>
						<div class="agileits-services-info">
							<h4>Diploma</h4>
							<p>Ofrecemos un Diploma digital o fisico de la organización. </p>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-xs-6 w3l-services-grid">
					<div class="w3l-services-text">
						<div class="w3ls-services-img">
							<i class="fa fa-graduation-cap" aria-hidden="true"></i>
						</div>
						<div class="agileits-services-info">
							<h4>Certificado DC3 </h4>
							<p>Certificado digital o fisico con codigo Qr. </p>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-xs-6 w3l-services-grid">
					<div class="w3l-services-text">
						<div class="w3ls-services-img">
							<i class="fa fa-list-alt" aria-hidden="true"></i>
						</div>
						<div class="agileits-services-info">
							<h4>Temario</h4>
							<p>Te damos todos los apuntes importantes para que esten al alcanze de tu mano. </p>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-xs-6 w3l-services-grid">
					<div class="w3l-services-text">
						<div class="w3ls-services-img">
							<i class="fa fa-qrcode" aria-hidden="true"></i>
						</div>
						<div class="agileits-services-info">
							<h4>QR </h4>
							<p>Con tu codigo Qr pueden verificar la autenticidad del mismo. </p>
						</div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //services -->
	<!-- Stats -->
	<div class="stats services news-w3layouts jarallax">
		<div class="container">
			<div class="stats-agileinfo agileits-w3layouts">
				<div class="col-sm-4 col-xs-6 stats-grid">
					<div class="stats-img">
						<i class="fa fa-users" aria-hidden="true"></i>
					</div>
					<h6>Capacitados</h6>
					<div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='1000' data-delay='20' data-increment="10">1000</div>
				</div>
				<div class="col-sm-4 col-xs-6 stats-grid">
					<div class="stats-img w3-agileits">
						<i class="fa fa-building" aria-hidden="true"></i>
					</div>
					<h6>Empresas</h6>
					<div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='50' data-delay='8' data-increment="2">50</div>
				</div>
				<div class="col-sm-4 col-xs-6 stats-grid">
					<div class="stats-img w3-agileits">
						<i class="fa fa-graduation-cap" aria-hidden="true"></i>
					</div>
					<h6>Cursos </h6>
					<div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='15' data-delay='5' data-increment="1">15</div>
				</div>
				{{-- <div class="col-sm-3 col-xs-6 stats-grid">
					<div class="stats-img w3-agileits">
						<i class="fa fa-trophy" aria-hidden="true"></i>
					</div>
					<h6>Awards</h6>
					<div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='110' data-delay='8' data-increment="1">110</div>
				</div> --}}
				<div class="clearfix"></div>
			</div>
			<!-- Progressive-Effects-Animation-JavaScript -->
			<script type="text/javascript" src="{{asset('js/numscroller-1.0.js') }}"></script>
			<!-- //Progressive-Effects-Animation-JavaScript -->
		</div>
	</div>
	<!-- //Stats -->
	<!-- welcome -->
	<div class="welcome">
		<div class="container">
			<h3 class="agileits-title">Cursos  DC3</h3>
			<div class="welcomerow-agileinfo">
				<h5>Constancia de cursos</h5>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus mattis pharetra turpis, a scelerisque enim venenatis luctus. Cras blandit dolor a facilisis tincidunt. Vivamus sed orci aliquam, aliquet tellus ut, ornare nunc. Praesent lacinia elit id libero pulvinar, sit amet faucibus felis ornare. Pellentesque nulla lorem, pretium vel bibendum in, elementum id urna. Sed interdum interdum accumsan. Aenean nec purus ac orci finibus facilisis. In sit amet placerat nisl, in auctor sapien.</p>
			</div>
			<div class="w3-welcome-grids">
				<div class="col-md-3 col-xs-6 w3l-welcome-grid">
					<img src="{{ asset('images/g1.jpg') }}" alt=" " class="img-responsive"/>
					<div class="agileits-welcome-info">
						<h4>Vaesent purus</h4>
						<p>Donec non nibh in dui sagittis finibus. Duis suscipit arcu vel rhoncus molestie eget placerat mauris. </p>
					</div>
				</div>
				<div class="col-md-3 col-xs-6 w3l-welcome-grid">
					<img src="{{ asset('images/g2.jpg') }}" alt=" " class="img-responsive"/>
					<div class="agileits-welcome-info">
						<h4>Suscipit duis </h4>
						<p>Nibh in dui sagittis donec non finibus. Duis suscipit arcu vel rhoncus molestie eget placerat mauris. </p>
					</div>
				</div>
				<div class="col-md-3 col-xs-6 w3l-welcome-grid">
					<img src="{{ asset('images/g3.jpg') }}" alt=" " class="img-responsive"/>
					<div class="agileits-welcome-info">
						<h4>Tempor purus</h4>
						<p>Sagittis donec non nibh in dui finibus. Duis suscipit arcu vel rhoncus molestie eget placerat mauris. </p>
					</div>
				</div>
				<div class="col-md-3 col-xs-6 w3l-welcome-grid">
					<img src="{{ asset('images/g4.jpg') }}" alt=" " class="img-responsive"/>
					<div class="agileits-welcome-info">
						<h4>Praesent tempor</h4>
						<p>Arcu vel donec non nibh in dui sagittis finibus. Duis suscipit rhoncus molestie eget placerat mauris. </p>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //welcome -->
	<!-- subscribe -->
	<div class="subscribe jarallax">
		<div class="container">
			<div class="agileits-title title2">
				<h3 class="agileits-title sub">Subscribe</h3>
			</div>
			<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur adipisci velit sed quia non numquam eius.</p>
			<form action="#" method="post">
				<input type="email" name="email" placeholder="Email Address" class="user" required="">
				<input type="submit" value="Subscribe">
			</form>
		</div>
	</div>
	<!-- //subscribe -->

	<!-- testimonial -->
	<div class="testimonial agileits-w3layouts">
		<div class="container">
			<h3 class="agileits-title">Testimonials</h3>
			<div class="sap_tabs">
				<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
					<ul class="resp-tabs-list">
						<li class="resp-tab-item"><img src="{{ asset('images/1.png') }}" alt=""/></li>
						<li class="resp-tab-item"><img src="{{ asset('images/2.png') }}" alt=""/></li>
						<li class="resp-tab-item"><img src="{{ asset('images/3.png') }}" alt=""/></li>
						<li class="resp-tab-item"><img src="{{ asset('images/4.png') }}" alt=""/></li>

					</ul>
					<div class="resp-tabs-container">
						<div class="tab-1 resp-tab-content">
							<div class="view view-first">
								<p>Donec libero dui, scelerisque ac augue id, tristique ullamcorper elit. Nam ultrices, lacus vitae adipiscing aliquet, metus ipsum imperdiet libero, vitae dignissim sapien diam ac nibh convallis.</p>
								<h5>Filan Isteku</h5>
							</div>
						</div>
						<div class="tab-1 resp-tab-content">
							<div class="view view-first">
								<p>Scelerisque ac augue id Donec libero dui, tristique ullamcorper elit. Nam ultrices, lacus vitae adipiscing aliquet, metus ipsum imperdiet libero, vitae dignissim sapien diam ac nibh convallis.</p>
								<h5>Ullam Firose </h5>
							</div>
						</div>
						<div class="tab-1 resp-tab-content">
							<div class="view view-first">
								<p>Nam ultrices lacus vitae adipiscing aliquet, metus ipsum imperdiet libero, vitae dignissim sapientristique Donec libero dui, scelerisque ac augue id,  ullamcorper elit,diam ac nibh convallis.</p>
								<h5>Sque Augue</h5>
							</div>
						</div>
						<div class="tab-1 resp-tab-content">
							<div class="view view-first">
								<p>Nam ultrices lacus vitae adipiscing aliquet, metus ipsum imperdiet libero, vitae dignissim sapientristique Donec libero dui, scelerisque ac augue id,  ullamcorper elit,diam ac nibh convallis.</p>
								<h5>Metus Ipsum</h5>
							</div>
						</div>

					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
	<!-- //testimonial -->

	<!-- footer -->
		<div class="agileits-w3layouts-footer">
			<div class="container">
				<div class="col-md-4 w3-agile-grid">
					<h5>About Us</h5>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean bibendum urna non nisi ornare, condimentum iaculis ipsum blandit. Duis auctor vulputate metus nec luctus.</p>
					<div class="footer-agileinfo-social">
						<ul>
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-rss"></i></a></li>
							<li><a href="#"><i class="fa fa-vk"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-4 w3-agile-grid">
					<h5>Recent Posts</h5>
					<div class="w3ls-post-grids">
						<div class="w3ls-post-grid">
							<div class="w3ls-post-img">
								<a href="#"><img src="{{ asset('images/g1.jpg') }}" alt="" /></a>
							</div>
							<div class="w3ls-post-info">
								<h6><a href="#" data-toggle="modal" data-target="#myModal">Donec vel sapien in erat</a></h6>
								<p>Sept 24,2017</p>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="w3ls-post-grid">
							<div class="w3ls-post-img">
								<a href="#"><img src="{{ asset('images/g4.jpg') }}" alt="" /></a>
							</div>
							<div class="w3ls-post-info">
								<h6><a href="#" data-toggle="modal" data-target="#myModal">Donec vel sapien in erat</a></h6>
								<p>Oct 25,2017</p>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="w3ls-post-grid">
							<div class="w3ls-post-img">
								<a href="#"><img src="{{ asset('images/g6.jpg') }}" alt="" /></a>
							</div>
							<div class="w3ls-post-info">
								<h6><a href="#" data-toggle="modal" data-target="#myModal">Donec vel sapien in erat</a></h6>
								<p>Nov 06,2017</p>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
				</div>
				<div class="col-md-4 w3-agile-grid">
					<h5>Address</h5>
					<div class="w3-address">
						<div class="w3-address-grid">
							<div class="w3-address-left">
								<i class="fa fa-phone" aria-hidden="true"></i>
							</div>
							<div class="w3-address-right">
								<h6>Phone Number</h6>
								<p>+1 234 567 8901</p>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="w3-address-grid">
							<div class="w3-address-left">
								<i class="fa fa-envelope" aria-hidden="true"></i>
							</div>
							<div class="w3-address-right">
								<h6>Email Address</h6>
								<p>Email :<a href="mailto:example@email.com"> mail@example.com</a></p>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="w3-address-grid">
							<div class="w3-address-left">
								<i class="fa fa-map-marker" aria-hidden="true"></i>
							</div>
							<div class="w3-address-right">
								<h6>Location</h6>
								<p>Broome St, NY 10002, Canada.
								<span>Telephone : +00 111 222 3333</span>
								</p>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<div class="copyright">
			<div class="container">
				<p>© 2021 Todos los derechos reservados CASEIPA </p>
			</div>
		</div>
	<!-- //footer -->
	<!-- ResponsiveTabs -->
	<script src="{{asset('js/easyResponsiveTabs.js') }}" type="text/javascript"></script>
	<script type="text/javascript">
		$(document).ready(function () {
			$('#horizontalTab').easyResponsiveTabs({
				type: 'default', //Types: default, vertical, accordion
				width: 'auto', //auto or any width like 600px
				fit: true   // 100% fit in a container
			});
		});
	</script>
	<!-- //ResponsiveTabs -->

	<script src="{{asset('js/jarallax.js') }}"></script>
	<script src="{{asset('js/SmoothScroll.min.js') }}"></script>
	<script type="text/javascript">
		/* init Jarallax */
		$('.jarallax').jarallax({
			speed: 0.5,
			imgWidth: 1366,
			imgHeight: 768
		})
	</script>
</body>
</html>
