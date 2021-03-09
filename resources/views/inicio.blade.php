


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
<link href="{{ asset('css/wsp.css') }}" rel="stylesheet">
<!-- //font-awesome icons -->
<!-- font -->
<link href="//fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
<!-- //font -->
<script src="{{ asset('js/jquery-2.2.3.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.js') }}"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
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
									<h1><a href="{{route('inicio')}} ">CASEIPA</a></h1>
								</div>

							</div>

							<!-- Collect the nav links, forms, and other content for toggling -->
							<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							 <ul class="nav navbar-nav link-effect-4">
								<li class="active first-list"><a href="{{route('inicio')}}">Inicio</a></li>
								{{-- <li><a href="about.html">About</a></li>
								<li><a href="contact.html">Contact</a></li> --}}
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
										<p>Somos una empresa Capacitadora, que brinda asesoría y formación</p>
										{{-- <div class="more-button">
											<a href="#" data-toggle="modal" data-target="#myModal">Read More</a>
										</div> --}}
									</div>
								</li>
								<li>
									<div class="slider-info">
										<h3>Diplomas</h3>
										<p>Somos profesional en el Sector industrial y Empresarial</p>
										{{-- <div class="more-button">
											<a href="#" data-toggle="modal" data-target="#myModal">Read More</a>
										</div> --}}
									</div>
								</li>
								<li>
									<div class="slider-info">
										<h3>Qr verificacion</h3>
										<p> Registrados ante STPS	</p>
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
							<h4>Constancia DC3 </h4>
							<p>Constancia digital o fisico con codigo Qr. </p>
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
			{{-- <script type="text/javascript" src="{{asset('js/numscroller-1.0.js') }}"></script> --}}
			<!-- //Progressive-Effects-Animation-JavaScript -->
		</div>
	</div>
	<!-- //Stats -->
	<!-- welcome -->

	<div class="welcome">
		<div class="container">
			<h3 class="agileits-title">Constancias DC3</h3>
			<div class="welcomerow-agileinfo">
				<h5>Trabajamos para darte el mejor material educativo</h5>
				<p>Constancias con codigo qr para verificacion  de la autencidad con nuestra agencia</p>
			</div>
			<div class="w3-welcome-grids">

                @foreach($cursos as $key => $curso)

                    <div class="col-md-3 col-xs-6 w3l-welcome-grid">
				    	<img src="{{ asset("storage/$curso->ruta_imagen") }}" alt=" " class="img-responsive"/>
				    	<div class="agileits-welcome-info">
				    		<h4>{{$curso->nombre}}</h4>
				    		<p>
                            {{Str::limit($curso->descripcion, 96, "...")}}
                           </p>
				    	</div>
				    </div>

                @endforeach




				<div class="clearfix"> </div>
			</div>
		</div>
	</div>



	<!-- //welcome -->
	<!-- subscribe -->

	<!-- //subscribe -->

	<!-- testimonial -->

	<!-- //testimonial -->

	<!-- footer -->
		<div class="agileits-w3layouts-footer">
			<div class="container">
				<div class="col-md-4 w3-agile-grid">
					<h5>Sobre nosotros</h5>
					<p>Nos ocupamos por tu seguridad y la de tu empresa,
                        nos especializamos en la capacitación en seguridad industrial,
                         sustentada por las normas oficiales mexicanas(NOM),
                          ultilizando el mejor material didactico para el autoaprendizaje.</p>
					<div class="footer-agileinfo-social">
						<ul>
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-4 w3-agile-grid">
					<h5>Cursos Recientes</h5>
					<div class="w3ls-post-grids">

                        @foreach($ultimosCursos as $key => $ultimosCurso)

                        <div class="w3ls-post-grid">
							<div class="w3ls-post-img">
								<a href="#"><img src="{{ asset("storage/$ultimosCurso->ruta_imagen") }}" alt="" /></a>
							</div>
							<div class="w3ls-post-info">
								<h6><a href="#" data-toggle="modal" data-target="#myModal">{{$ultimosCurso->nombre}}</a></h6>
                                {{-- <p> {{Str::limit($curso->descripcion, 25, '...') }} </p> --}}
							</div>
							<div class="clearfix"> </div>
						</div>

                        @endforeach



					</div>
				</div>
				<div class="col-md-4 w3-agile-grid">
					<h5>Dirección</h5>
					<div class="w3-address">
						<div class="w3-address-grid">
							<div class="w3-address-left">
								<i class="fa fa-phone" aria-hidden="true"></i>
							</div>
							<div class="w3-address-right">
								<h6>Numero de Telefono</h6>
								<p>+52 921 200 79 14</p>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="w3-address-grid">
							<div class="w3-address-left">
								<i class="fa fa-envelope" aria-hidden="true"></i>
							</div>
							<div class="w3-address-right">
								<h6>Email</h6>
								<p>Email :<a href="mailto:example@email.com"> mail@example.com</a></p>
							</div>
							<div class="clearfix"> </div>
						</div>
						{{-- <div class="w3-address-grid">
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
						</div> --}}
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


    <a href="https://api.whatsapp.com/send?phone=+529212007914&text=Hola,%20me%20encuentro%20interesado%20en%20los%20siguientes%20cursos%20&%20deseo%20saber%20m%C3%A1s%20informaci%C3%B3n%20al%20respecto." class="float" target="_blank">
        <i class="fa fa-whatsapp my-float"></i>
     </a>
     <style>
         .card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  transition: 0.3s;
  border: none;
  &:hover {
    box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.4);
  }
  a {
    color: initial;
    &:hover {
      text-decoration: initial;
    }
  }
  .text-muted i {
    margin: 0 10px;
  }
}

     </style>
</body>
</html>
