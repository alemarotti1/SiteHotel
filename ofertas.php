<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <title>Hotel Alê</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	  
	<?php include 'pixelHomePage.php'; ?>
	
	<link rel="icon" type="image/png" href="img/ico.png" size="16x16" />
	
	<link rel="stylesheet" href="assets/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/main.css">        
	<link rel="stylesheet" href="assets/css/grid.css">
	  
    <link rel="stylesheet" type="text/css" href="sliderengine/amazingslider-1.css">
	<link rel="stylesheet" type="text/css" href="sliderengine/amazingslider-2.css">
	<link rel="stylesheet" type="text/css" href="sliderengine/amazingslider-3.css">
	<link rel="stylesheet" type="text/css" href="sliderengine/amazingslider-4.css">
	<link rel="stylesheet" type="text/css" href="sliderengine/amazingslider-5.css">
	<link rel="stylesheet" type="text/css" href="sliderengine/amazingslider-6.css">
	<link rel="stylesheet" type="text/css" href="sliderengine/amazingslider-7.css">
	<link rel="stylesheet" type="text/css" href="sliderengine/amazingslider-8.css">
	<link rel="stylesheet" type="text/css" href="sliderengine/amazingslider-9.css">
	<link rel="stylesheet" type="text/css" href="sliderengine/amazingslider-10.css">
	  
  </head>
  <body class="is-preload">
	<!-- Load Facebook SDK for JavaScript -->
      <div id="fb-root"></div>
      <script>
        window.fbAsyncInit = function() {
          FB.init({
            xfbml            : true,
            version          : 'v5.0'
          });
        };

        (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/pt_BR/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));</script>

      <!-- Your customer chat code -->
      <div class="fb-customerchat"
        attribution=setup_tool
        page_id="355261131198572"
  theme_color="#67b868"
  logged_in_greeting="Olá! Como podemos ajudar?"
  logged_out_greeting="Olá! Como podemos ajudar?">
      </div>
	
	
	
	
    <!-- Sidebar >
    <section id="sidebar">
      <div class="inner">
        <nav>
          <ul>
            <li><a href="index1.php#intro">O Hotel</a></li>
			<li><a href="index1.php#zero">Instalações</a></li>
            <li><a href="index1.php#one">Quartos</a></li>
            <li><a href="index1.php#two">Hi Hostel</a></li>			
            <li><a href="index1.php#three">Contato</a></li>
			<li><a href="blog/">Blog</a></li>
			
          </ul>
        </nav>
      </div>
		<div class="bottom-menu"></div>
		
	  </section-->
	  
	  
	  
	  <nav class="navbar navbar-expand-md sticky-top navbar-dark bg-dark" style="height: 10vh;">
		<a class="navbar-brand d-md-none" href="index.php"><img style="max-height: 7vh;vertical-align: top" src="img/logo.png"></img></a>
		<button style="max-height: 8vh;" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		
		<div style="max-height: 10vh" class="collapse navbar-collapse justify-content-around bg-dark" id="navbarTogglerDemo02">
			<a></a>
			<a class="nav-link " href="hotel.php">Sobre Nós</a>
			<a class="nav-link " href="quartos.php">Quartos</a>
			<a class="nav-link d-none d-md-block" href="index.php"><img style="max-height: 7vh;" src="img/logo.png"></img></a>
			<a class="nav-link " href="hotel.php">Hi Hostel</a>
			<a class="nav-link " href="index.php">Blog</a>
			<a></a>
		</div>
	</nav>
	  
	  
	  
	  
    <!-- Wrapper -->
    <div id="wrapper">
      <!-- Intro -->
		<!-- <section id="three" class="wrapper style1 fullscreen fade-up d-flex flex-column flex-wrap" style="background-color: #9DD3AF; justify-content: space-between">
			<div><h1 class="text-center" style="width: 100%; margin: auto"> Experimente o charme da vida no interior, ao estilo de Nova Friburgo</h1></div>
			<div id="saiba-mais" class="inner d-lg-flex ">
				
				<!-- <div style="width:20%;">
				
				</div> ->
				
				<div class="d-flex flex-column background-cinza-escuro" style="padding:10px 10px 10px 10px; margin: 0px 5px 0px 5px;">
					<div class="mx-auto"><img src="img/Eu2.png" class="img-thumbnail" /></div>
					<div class="mx-auto">
						<h2 class=" main txt-white text-center">Compra antecipada<br>Pague 1 diária e fique 2</h2>
						<p class="txt-white text-center">Reserve com antecedência e ganhe uma diária grátis<br>	CAFÉ DA MANHÃ INCLUSO<br>(oferta sujeita à disponibilidade <br> pagamento no momento da reserva não reembolsável)<br><br>De 19 de setembro a 20 de dezembro de 2020</p>
					</div>
					
					<div class="mx-auto"><p style="text-align: center"><a href="ofertas.php" class="button scrolly" style="background: #078B7D; color: #fff;">Reserve Já</a></p></div>
				</div>
				
				<div class="d-flex flex-column background-cinza-escuro" style="padding:10px 10px 10px 10px; margin: 0px 5px 0px 5px;">
					<div class="mx-auto"><img src="img/Eu2.png" class="img-thumbnail" /></div>
					<div class="mx-auto">
						<h2 class=" main txt-white text-center">Oferta Flexível</h2>
						<p class="txt-white text-center">Pode ser cancelada, sem a necessidade de pré-pagamento.<br> Sua próxima estadia sem preocupações<br><br>CAFÉ DA MANHÃ INCLUSO<br><br><br> De 19 de setembro a 20 de dezembro de 2020</p>
					</div>
					
					<div class="mx-auto"><p style="text-align: center"><a href="ofertas.php" class="button scrolly" style="background: #078B7D; color: #fff;">Reserve Já</a></p></div>
				</div>


				<div class="d-flex flex-column background-cinza-escuro" style="padding:10px 10px 10px 10px; margin: 0px 5px 0px 5px;">
					<div class="mx-auto"><img src="img/Eu2.png" class="img-thumbnail" /></div>
					<div class="mx-auto">
						<h2 class=" main txt-white text-center">Oferta Flexível</h2>
						<p class="txt-white text-center">Pode ser cancelada, sem a necessidade de pré-pagamento.<br> Sua próxima estadia sem preocupações<br><br>CAFÉ DA MANHÃ INCLUSO<br><br><br> De 19 de setembro a 20 de dezembro de 2020</p>
					</div>
					
					<div class="mx-auto"><p style="text-align: center"><a href="ofertas.php" class="button scrolly" style="background: #078B7D; color: #fff;">Reserve Já</a></p></div>
				</div>
				
				<!-- <div style="width:20%;">
				
				</div> ->
				
				
			</div>

		</section> -->


		<section id="three" class="wrapper style1 fullscreen fade-up d-flex flex-column flex-wrap" style="background-color: #9DD3AF;">
			<div id="saiba-mais" class="inner d-lg-flex ">
				
				
				<div class="d-flex flex-column background-cinza-escuro" style="padding:10px 10px 10px 10px; margin: 0px 5px 0px 5px;">
					<div class="mx-auto"><img src="img/newImg/foto3.png" class="img-thumbnail" /></div>
					<div class="mx-auto">
						<h2 class=" main txt-white text-center">Compra antecipada<br>Pague 1 diária e fique 2</h2>
						<p class="txt-white text-center">Reserve com antecedência e ganhe uma diária grátis<br>	CAFÉ DA MANHÃ INCLUSO<br>(oferta sujeita à disponibilidade <br> pagamento no momento da reserva não reembolsável)<br><br>De 19 de setembro a 20 de dezembro de 2020</p>
					</div>
					
					<div class="mx-auto"><p style="text-align: center"><a href="#one" class="button scrolly" style="background: #078B7D; color: #fff;">Descubra</a></p></div>
				</div>
				
				<div class="d-flex flex-column background-cinza-escuro" style="padding:10px 10px 10px 10px; margin: 0px 5px 0px 5px;">
					<div class="mx-auto"><img src="img/newImg/foto3.png" class="img-thumbnail" /></div>
					<div class="mx-auto">
						<h2 class=" main txt-white text-center">Oferta Flexível</h2>
						<p class="txt-white text-center">Pode ser cancelada, sem a necessidade de pré-pagamento.<br> Sua próxima estadia sem preocupações<br><br>CAFÉ DA MANHÃ INCLUSO<br><br><br> De 19 de setembro a 20 de dezembro de 2020</p>
					</div>
					
					<div class="mx-auto"><p style="text-align: center"><a href="ofertas.php" class="button scrolly" style="background: #078B7D; color: #fff;">Descubra</a></p></div>
				</div>
					
				<div class="d-flex flex-column background-cinza-escuro" style="padding:10px 10px 10px 10px; margin: 0px 5px 0px 5px;">
					<div class="mx-auto"><img src="img/newImg/foto3.png" class="img-thumbnail" /></div>
					<div class="mx-auto">
						<h2 class=" main txt-white text-center">Presenteie-se com uma escapada da rotina</h2>
						<p class="txt-white">Nova friburgo não para de encantar. Presenteie você e sua família com um fim de semana no Hotel Alê.</p>
					</div>
					
					<div class="mx-auto"><p style="text-align: center"><a href="#one" class="button scrolly" style="background: #078B7D; color: #fff;">Descubra</a></p></div>
				</div>
				
				
			</div>
			
			
		</section>
			
		<section id="one" class="wrapper style1 fullscreen fade-up d-flex flex-column" style="background-color: #D8FFE5;">
			
			
			<div class="d-flex flex-column text-dark bolder">
				<div class="inner w-100 main row m-0" style="padding: 20px 0;">	
					<div class="col-md-3 p-0"></div>
					<div class="col-md-6 p-0" >
						<h2 style="margin: 0px"> Experimente o charme da vida no interior, ao estilo de Nova Friburgo</h2>
						  <div ><img style="width: 70%; height: auto; display: block; margin-left: auto; margin-right: auto; " src="img/Eu2.png" /></div>
						<p style="margin: 0px;" class="p-2 text-center"><br>
						  <b class="bolder texto-verde-escuro">De 19 de setembro a 20 de dezembro de 2020</b><br>
						  Compra antecipada - Pague 1 diária e fique 2<br>
						  <b style="color: rgba(000, 0, 0, 0.60)" ></b></p><br>
						  Reserve com antecedência e ganhe uma diária grátis<br>
						  CAFÉ DA MANHÃ INCLUSO<br>
						  (oferta sujeita à disponibilidade - pagamento no momento da reserva - não reembolsável)<br>
						  Oferta flexível - pode ser cancelada, sem a necessidade de pré-pagamento. Sua próxima estadia sem preocupações<br>
						  FOTO<br>
						</p>
						<p class="bolder text-center texto-verde-escuro">E você, quando vem?</p>
					</div>
					<div class="col-md-3"></div>
				</div>
				
				<div class="inner w-100 grid text-center flex-grow-1" style="padding: 20px 0;">
					<div><p>"Este hotel tem que ser sobre acolhimento, amizade e simplicidade." <br>- Silvia Marotti, fundadora do Hotel Alê</p></div>
					<div class="inner w-100 pb-0" style="padding: 20px 0;"><p class="text-center bolder texto-verde-escuro main">Está pronto para iniciar sua jornada?</p></div>
				</div>
			</div>
		</section>
		
		<!--section id="two" class="wrapper style1 fullscreen fade-up d-flex flex-column" style="background-color: #EEEEEE;">
			<div style="max-width: 100vw;">
				<div class="text-dark bolder d-flex w-75">
					<div class="container div-imagem-flutuante"><img class="imagem-flutuante" src="img/newImg/background.png"></img></div>
					<div class="texto-flutuante">Nosso hotel é perfeito para uma escapapa da rotina</div>
				</div>
			</div>
		</section-->
		
		

    </footer>
    <!-- Scripts -->
	<script>
	  //fbq('track', 'ViewContent');
	</script>
	
    <script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/jquery.scrollex.min.js"></script>
    <script src="assets/js/jquery.scrolly.min.js"></script>
    <script src="assets/js/browser.min.js"></script>
    <script src="assets/js/breakpoints.min.js"></script>
    <script src="assets/js/util.js"></script>
    <script src="assets/js/main.js"></script>

	<script src="assets/bootstrap/bootstrap.bundle.min.js"></script>
	
	<script src="sliderengine/amazingslider.js"></script>
    <script src="sliderengine/initslider-1.js"></script>
	<script src="sliderengine/initslider-2.js"></script>
	<script src="sliderengine/initslider-3.js"></script>
	<script src="sliderengine/initslider-4.js"></script>
	<script src="sliderengine/initslider-5.js"></script>
	<script src="sliderengine/initslider-6.js"></script>
	<script src="sliderengine/initslider-7.js"></script>
	<script src="sliderengine/initslider-8.js"></script>
	<script src="sliderengine/initslider-9.js"></script>
	<script src="sliderengine/initslider-10.js"></script>	
  </body>
</html>