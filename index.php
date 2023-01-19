<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">

    <title>Hotel Alê</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	  
	<?php include 'pixelHomePage.php'; ?>
	
	<link rel="icon" type="image/png" href="img/ico.png" />
	
	<link rel="stylesheet" href="assets/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/main.css">
	<link rel="stylesheet" href="assets/css/grid.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	  
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
	
	
	<div class="notificacoes" id="modal-notificacao" style="display:none">
		<div class="bg-light border rounded notificacoes_inner">
			<div class="">
				<h1 class="text-center">Quer receber ofertas exclusivas?</h1>
				<div class="text-center"><img src="img/notification.png" /></div>
				<p class="text-dark text-center">Ative nossas notificações:</p>
			</div>
			<div class="background-verde-escuro row-auto p-2" id="botao-eu-quero">
				<p class="text-center eu-quero" >EU QUERO!</p>
			</div>
			<br>
			<div id="botao-agr-nao">
				<p class="text-dark">Agora Não</p>
			</div>

		</div>
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
	  
	  
	  
	  <nav class="navbar navbar-expand-md sticky-top navbar-dark bg-dark menu">
		<a class="navbar-brand d-md-none" href="index.php"><img style="max-height: 7vh;vertical-align: top" src="img/logo.png"></img></a>
		<button style="max-height: 8vh;" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		
		<div class="collapse navbar-collapse justify-content-between bg-dark" id="navbarToggler">
			<a></a>
			<a></a>
			<a class="nav-link " href="hotel.php">Sobre Nós</a>
			<a class="nav-link " href="quartos.php">Quartos</a>
			<a class="nav-link d-none d-md-block" href="index.php"><img style="max-height: 7vh;" src="img/logo.png"></img></a>
			<a class="nav-link " href="hotel.php">Hi Hostel</a>
			<a class="nav-link " href="index.php">Blog</a>
			<a class="nav-link reserva-nav" href="reserve.php">Reservar</a>
			
		</div>
	</nav>
	  
	  
	  
	  
    <!-- Wrapper -->
    <div id="wrapper">
      <!-- Intro -->
		
		<section  id="intro" class="wrapper style1 fullscreen fade-up d-flex flex-column">
			<div class="d-flex flex-column vh100" style="background-color: rgba(0,0,0,0.5);">
				<div class="inner w-100 golden-ratio-maior-quarto" style="padding: 20px 0;"></div>
				
				<div id="texto-inicial" class="inner w-100 flex-grow-1 main text-glow" style="padding: 20px 0; ">			
					<!--p id="recuo">Visite Nova Friburgo e fique no primeiro hotel temático da cidade. <br> Sinta-se em uma casa do interior. Divirta-se com a decoração caipira e seja acolhido por uma família local.</p-->
					<p id="recuo">Visite Nova Friburgo e <br class="texto-inicial-quebra">viva experiências únicas e inesquecíveis. <br class="texto-inicial-quebra"><br class="texto-inicial-quebra">
					Fique no Hotel Alê e<br class="texto-inicial-quebra">sinta-se em uma casa do interior.</p>
					
				</div>
				
				
				<div class="inner w-100 golden-ratio-maior-quarto pb-0" style="padding: 20px 0;">
					<div class="mx-auto text-center"><a href="#section-mensagem"><img style="width: 75px;" src="img/down-arrow-white.png"></img></a></div>
				</div>
			</div>
		</section>
		<section id="section-mensagem" class="fullscreen">
			<!-- <div id="chamada" style="width:100%;">
			
				<div id="slide-1" class="slide">
					<p>- Os suíços vieram para Nova Friburgo em 1818.</p>
				</div>
				<div id="slide-2" class="slide">
					<p >- Os alemães vieram em 1824.</p>
				</div>
				<div id="slide-3" class="slide">
					<p>- Depois foram os italianos, espanhóis, libaneses, húngaros, austríacos, japoneses...</p>
				</div>
					<div id="slide-4" class="call-to-action slide-grow"><p  class="bolder text-center texto-verde-escuro text-white">E você, quando vem?</p></div>

				<div class="booking">
					<p style="width:100%; text-align: center;">
						<a href="https://hotelale.ibookingpms.com.br/motor-de-reservas/?idioma=por" class="button scrolly reservar-main" style="background: #078B7D; color: #fff;">Fale conosco</a>
					</p>
				</div> -->
			
		</section>
		

		<section class="wrapper style1 fullscreen fade-up d-flex flex-column" style="background-color: #D8FFE5; background-image: url('img/recepcao.jpg'); background-size: cover; background-position: 0 45%;">
			<div class="fullscreen" style="padding: 0px; height: 100%; width: 100%;background-color: rgba(0,0,0,0.5);">
				<div id="table-cidade">
					<div class="text-respiro">
						<h2>Mais que só um hotel em Nova Friburgo</h2>
					</div>
					<div class="mensagem-vo">
						<div >
							<div class="texto-hotel">
								<span style="display: inline-block;">O Hotel Alê é um hotel simples e familiar, que fica no centro de Nova Friburgo.</span> 
								<span style="display: inline-block;">Trabalhamos com carinho e dedicação para você se sentir em uma casa de amigos. </span>
								<span style="display: inline-block;">Decoração, arrumação e atendimento com jeitinho de casa do interior. Tudo bem informal e aconchegante.</span><br><br>
							</div>
							<!-- <div class="texto-vo">
								<span style="display: block; font-weight: normal;">"Este hotel tem que ser sobre acolhimento, amizade e simplicidade." </span>
								<span style="display: block; font-weight: bolder; margin: 0.5em; color: #015950;">- Silvia Marotti, fundadora do Hotel Alê</span>
							</div> -->
						</div>
						<!-- <div class="foto-vo"><img src="img/Dona-Silvia.png" alt="Foto Dona silvia"></div> -->
						
					</div>
					<div class="text-respiro2">
						<div class="text-center respiro-pergunta">Diferente de um hotel tradicional, né?</div>
					</div>
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
		
		
		<section id="three" class="wrapper style1 fullscreen fade-up d-flex flex-column flex-wrap" style="background-color: #9DD3AF;">
			<div id="saiba-mais" class="inner d-lg-flex ">
				
				<div class="d-flex flex-column background-cinza-escuro" style="padding:10px 10px 10px 10px; margin: 0px 5px 0px 5px;">
					<div class="mx-auto" style="width: 100%;"><img src="img/photo-cards/card-1.jpg" class="img-thumbnail" style="width: 100%; background-size: cover;"/></div>
					<div class="mx-auto">
						<h2 class=" main txt-white text-center">Presenteie-se com uma escapada da rotina</h2>
						<p class="txt-white">Nova friburgo não para de encantar. Presenteie você e sua família com um fim de semana no Hotel Alê.</p>
					</div>
					
					<div class="mx-auto"><p style="text-align: center"><a href="#one" class="button scrolly" style="background: #078B7D; color: #fff;">Descubra</a></p></div>
				</div>
				
				
				<div class="d-flex flex-column background-cinza-escuro" style="padding:10px 10px 10px 10px; margin: 0px 5px 0px 5px;">
					<div class="mx-auto"><img src="img/photo-cards/card-2.jpg" class="img-thumbnail" /></div>
					<div class="mx-auto">
						<h2 class=" main txt-white text-center">Ofertas e Pacotes</h2>
						<p class="txt-white">Apresentamos charmosas opções românticas para você e seu amor.<br>Aproveite as ofertas especiais do Hotel Alê para experiências da vida do interior.</p>
					</div>
					
					<div class="mx-auto"><p style="text-align: center"><a href="ofertas.php" class="button scrolly" style="background: #078B7D; color: #fff;">Descubra</a></p></div>
				</div>
					

				
				
				<div class="d-flex flex-column background-cinza-escuro" style="padding:10px 10px 10px 10px; margin: 0px 5px 0px 5px;">
					<div class="mx-auto"><img src="img/newImg/foto3.png" class="img-thumbnail" /></div>
					<div class="mx-auto">
						<h2 class=" main txt-white text-center">Inspiração:<br>Motivos para amar Nova Friburgo</h2>
						<p class="txt-white">Fique fascinado com um mundo de experiências únicas que Nova Friburgo tem a oferecer.</p>
					</div>
					
					<div class="mx-auto"><p style="text-align: center"><a href="#one" class="button scrolly" style="background: #078B7D; color: #fff;">Descubra</a></p></div>
				</div>
				
				
			</div>
			
			
		</section>
		
		<section id="four" class="wrapper style1 fullscreen fade-up d-flex flex-column flex-wrap align-items-stretch">
			<!-- SEÇÃO PARA "AINDA ESTÁ COM DUVIDAS? FALE CONOSCO"-->
			<div id="duvidas">
				<span id="moldura-duvida">
					<div class="inner">
						<h2 class="main text-center">Ainda tem dúvidas?</h2>
						<p class="text-center">Fale conosco e saiba mais sobre o Hotel Alê.</p>
						<p class="text-center">
							<a href="https://wa.me/message/CA47NOMUZZ56B1" class="button scrolly " style="background: #078B7D; color: #fff;">
								Telefone
								<!--font awesome fone icon-->
								<i class="fas fa-phone"></i>
							</a>
						</p>
						<p class="text-center">
							<a href="https://wa.me/message/CA47NOMUZZ56B1" class="button scrolly " style="background: #078B7D; color: #fff;">
								WhatsApp
								<i class="fab fa-whatsapp"></i>	
							</a>
						</p>
						<p class="text-center">
							<a href="https://wa.me/message/CA47NOMUZZ56B1" class="button scrolly " style="background: #078B7D; color: #fff;">
								WhatsApp
								<i class="fab fa-whatsapp"></i>	
							</a>
						</p>
					</div>
				</span>
			</div>
		</section>
		
      <!-- One ->  

	  <section id="one" class="wrapper">
			<div class="containerCentralizado inner itemCentralizado roundedCorner albergueForeground" style="background:#fff">
				<div class="itemCentralizado" style="max-width: 100%;">
					<div class="itemGrid1" style="width:100%">
						<h2>Quartos</h2>
						<p style="color: #000">Os quartos possuem um estilo rústico e aconchegante:</p>
						
						
						
						<div class="quarto">
							<div class="imagemq">							
								
							<div id="amazingslider-wrapper-1" style="display:block;position:relative;max-width:250px;margin:0px auto 0px;">
								<div id="amazingslider-1" style="display:block;position:relative;margin:0 auto;">
									<ul class="amazingslider-slides" style="display:none;">
										<li><a href="img/quarto-triplo/triplo1.jpg" class="html5lightbox"><img src="img/quarto-triplo/triplo1_thumb.jpg"/></a></li>
										<li><a href="img/quarto-triplo/triplo2.jpg" class="html5lightbox"><img src="img/quarto-triplo/triplo2_thumb.jpg"/></a></li>	
										<li><a href="img/quarto-triplo/triplo3.jpg" class="html5lightbox"><img src="img/quarto-triplo/triplo3_thumb.jpg"/></a></li>	
										<li><a href="img/quarto-triplo/triplo4.jpg" class="html5lightbox"><img src="img/quarto-triplo/triplo4_thumb.jpg"/></a></li>	
									</ul>
								</div>
							</div>
							
							</div>
							<div class="txtq">
								<h3>Quarto triplo especial</h3>								
								<p><img src="img/icone_pessoa.png"> Até 3 pessoas</p>
								<p><img src="img/cama-solteiro.png"> 3 camas de solteiro</p>
								<p><img src="img/banheiro.png"> Amplo banheiro privativo com secador de cabelo</p>
								<p><img src="img/frigobar.png"> Frigobar</p>
								
								<div class="booking"><a alt="Reserve pelo Booking.com" title="Reserve pelo Booking.com" href="https://www.booking.com/hotel/br/alaa.pt-br.html" target="_blank"><img src="img/reserva_booking.png" width="80" height="23" alt=""/></a></div>
							</div>
						
						</div>
					
					
					
						<div class="quarto">
							<div class="imagemq">
								
								<div id="amazingslider-wrapper-2" style="display:block;position:relative;max-width:250px;margin:0px auto 0px;">
									<div id="amazingslider-2" style="display:block;position:relative;margin:0 auto;">
										<ul class="amazingslider-slides" style="display:none;">
											<li><a href="img/quarto-conjugado/conjugado1.jpg" class="html5lightbox"><img src="img/quarto-conjugado/conjugado1_thumb.jpg"  /></a></li>
											<li><a href="img/quarto-conjugado/conjugado2.jpg" class="html5lightbox"><img src="img/quarto-conjugado/conjugado2_thumb.jpg"  /></a></li>
											<li><a href="img/quarto-conjugado/conjugado3.jpg" class="html5lightbox"><img src="img/quarto-conjugado/conjugado3_thumb.jpg"  /></a></li>
											<li><a href="img/quarto-conjugado/conjugado4.jpg" class="html5lightbox"><img src="img/quarto-conjugado/conjugado4_thumb.jpg"  /></a></li>
											

										</ul>
									</div>
								</div>
							</div>
							<div class="txtq">
								<h3>Quarto Conjugado Especial</h3>
								<!--<p>Quarto para família ou grupo de amigos de até quatro pessoas. Formado por um quarto de casal com banheiro privativo e um quarto com duas camas de solteiro e sacada para a rua.</p>--><!--
								<p><img src="img/icone_pessoa.png"> Até 4 pessoas</p>
								<p><img src="img/cama-casal.png"> 1 cama de casal <img src="img/cama-solteiro.png"> 2 camas de solteiro</p>							
								<p><img src="img/banheiro.png"> Amplo banheiro privativo com secador de cabelo</p>
								<p><img src="img/frigobar.png"> Frigobar, sacada para a rua</p>
								
								<div class="booking"><a alt="Reserve pelo Booking.com" title="Reserve pelo Booking.com" href="https://www.booking.com/hotel/br/alaa.pt-br.html" target="_blank"><img src="img/reserva_booking.png" width="80" height="23" alt=""/></a></div>
							</div>
						</div>
					
					
					
					
						<div class="quarto">
							<div class="imagemq">
								
								<div id="amazingslider-wrapper-3" style="display:block;position:relative;max-width:250px;margin:0px auto 0px;">
									<div id="amazingslider-3" style="display:block;position:relative;margin:0 auto;">
										<ul class="amazingslider-slides" style="display:none;">
											<li><a href="img/quarto-casal-1/casal_1_1.jpg" class="html5lightbox"><img src="img/quarto-casal-1/casal_1_1_thumb.jpg"/></a></li>
											<li><a href="img/quarto-casal-1/casal_1_2.jpg" class="html5lightbox"><img src="img/quarto-casal-1/casal_1_2_thumb.jpg"/></a></li>
											<li><a href="img/quarto-casal-1/casal_1_3.jpg" class="html5lightbox"><img src="img/quarto-casal-1/casal_1_3_thumb.jpg"/></a></li>
											<li><a href="img/quarto-casal-1/casal_1_5.jpg" class="html5lightbox"><img src="img/quarto-casal-1/casal_1_5_thumb.jpg"/></a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="txtq">
								<h3>Quarto Casal +1 Especial</h3>
								
								<p><img src="img/icone_pessoa.png"> Até 3 pessoas</p>
								<p><img src="img/cama-casal.png"> 1 cama de casal <img src="img/cama-solteiro.png"> 1 cama de solteiro</p>							
								<p><img src="img/banheiro.png"> Amplo banheiro privativo com secador de cabelo</p>
								<p><img src="img/frigobar.png"> Frigobar</p>
								
								<div class="booking"><a alt="Reserve pelo Booking.com" title="Reserve pelo Booking.com" href="https://www.booking.com/hotel/br/alaa.pt-br.html" target="_blank"><img src="img/reserva_booking.png" width="80" height="23" alt=""/></a></div>
							</div>
						</div>
					
					
					
					
					
					
						
						<div class="quarto">
							<div class="imagemq">
								
								<div id="amazingslider-wrapper-4" style="display:block;position:relative;max-width:250px;margin:0px auto 0px;">
									<div id="amazingslider-4" style="display:block;position:relative;margin:0 auto;">
										<ul class="amazingslider-slides" style="display:none;">
											<li><a href="img/quarto-casal-especial/casal1.jpg" class="html5lightbox"><img src="img/quarto-casal-especial/casal1_thumb.jpg" /></a></li>
											<li><a href="img/quarto-casal-especial/casal2.jpg" class="html5lightbox"><img src="img/quarto-casal-especial/casal2_thumb.jpg" /></a></li>
											<li><a href="img/quarto-casal-especial/casal3.jpg" class="html5lightbox"><img src="img/quarto-casal-especial/casal3_thumb.jpg" /></a></li>
											<li><a href="img/quarto-casal-especial/casal4.jpg" class="html5lightbox"><img src="img/quarto-casal-especial/casal4_thumb.jpg" /></a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="txtq">
								<h3>Quarto de Casal especial</h3>
								<!--<p>Quarto com uma cama de casal, frigobar e amplo banheiro com secador de cabelo e box de cortina.</p>-->
								<!--<p><img src="img/icone_pessoa.png"> 2 pessoas</p>
								<p><img src="img/cama-casal.png"> 1 cama de casal</p>
								<p><img src="img/banheiro.png"> Amplo banheiro privativo com secador de cabelo</p>
								<p><img src="img/frigobar.png"> Frigobar</p>
								
								<div class="booking"><a alt="Reserve pelo Booking.com" title="Reserve pelo Booking.com" href="https://www.booking.com/hotel/br/alaa.pt-br.html" target="_blank"><img src="img/reserva_booking.png" width="80" height="23" alt=""/></a></div>
							</div>
						</div>
						
					

					
						
						<div class="quarto">
							<div class="imagemq">
								
								<div id="amazingslider-wrapper-5" style="display:block;position:relative;max-width:250px;margin:0px auto 0px;">
									<div id="amazingslider-5" style="display:block;position:relative;margin:0 auto;">
										<ul class="amazingslider-slides" style="display:none;">
											<li><a href="img/casal-basico/basico1.jpg" class="html5lightbox"><img src="img/casal-basico/basico1_thumb.jpg"/></a></li>
											<li><a href="img/casal-basico/basico2.jpg" class="html5lightbox"><img src="img/casal-basico/basico2_thumb.jpg"/></a></li>
											<li><a href="img/casal-basico/basico3.jpg" class="html5lightbox"><img src="img/casal-basico/basico3_thumb.jpg"/></a></li>
											<li><a href="img/casal-basico/basico4.jpg" class="html5lightbox"><img src="img/casal-basico/basico4_thumb.jpg"/></a></li>											
										</ul>
									
									</div>
								</div></div>
							<div class="txtq">
								<h3>Quarto de casal básico</h3>								
								<p><img src="img/icone_pessoa.png"> 2 pessoas</p>
								<p><img src="img/cama-casal.png"> 1 cama de casal</p>							
								<p><img src="img/banheiro.png"> Banheiro privativo</p>
								<p><img src="img/frigobar.png"> Frigobar</p>
								
								<div class="booking"><a alt="Reserve! Fale conosco" title="Reserve! Fale conosco" href="#three"><img src="img/reserva_email.png" width="80" height="23" alt=""/></a></div>
							</div>
						</div>
					
					
					
					
					
					
						<div class="quarto">
							<div class="imagemq">
								
								<div id="amazingslider-wrapper-6" style="display:block;position:relative;max-width:250px;margin:0px auto 0px;">
									<div id="amazingslider-6" style="display:block;position:relative;margin:0 auto;">
										<ul class="amazingslider-slides" style="display:none;">
											<li><a href="img/casal-simples/simples1.jpg" class="html5lightbox"><img src="img/casal-simples/simples1_thumb.jpg" /></a></li>
											<li><a href="img/casal-simples/simples2.jpg" class="html5lightbox"><img src="img/casal-simples/simples2_thumb.jpg" /></a></li>										
											<li><a href="img/casal-simples/simples3.jpg" class="html5lightbox"><img src="img/casal-simples/simples3_thumb.jpg" /></a></li>										
											<li><a href="img/casal-simples/simples4.jpg" class="html5lightbox"><img src="img/casal-simples/simples4_thumb.jpg" /></a></li>										
											
										</ul>
									
									</div>
								</div></div>
							<div class="txtq">
								<h3>Quarto de casal simples</h3>
								<!--<p>Quarto para quem quer uma opção mais econômica de hospedagem. Com duas camas de solteiro, ou um beliche de madeira maciça fabricado para grandes adultos.<br/>Os banheiros ficam no corredor e atendem até 3 quartos.</p>-->
								<!--<p><img src="img/icone_pessoa.png"> 2 pessoas</p>
								<p><img src="img/cama-casal.png"> 1 cama de casal</p>							
								<p><img src="img/banheiro.png"> Banheiro privativo</p>								
								<p></p>
								
								<div class="booking"><a alt="Reserve! Fale conosco" title="Reserve! Fale conosco" href="#three"><img src="img/reserva_email.png" width="80" height="23" alt=""/></a></div>
							</div>
						</div>
					
					
					
					
					
					
					
						<div class="quarto">
							<div class="imagemq">
								
								<div id="amazingslider-wrapper-7" style="display:block;position:relative;max-width:250px;margin:0px auto 0px;">
									<div id="amazingslider-7" style="display:block;position:relative;margin:0 auto;">
										<ul class="amazingslider-slides" style="display:none;">
											<li><a href="img/quarto-hostel/hostel1.jpg" class="html5lightbox"><img src="img/quarto-hostel/hostel1_thumb.jpg" /></a></li>
											<li><a href="img/quarto-hostel/hostel2.jpg" class="html5lightbox"><img src="img/quarto-hostel/hostel2_thumb.jpg" /></a></li>
											<li><a href="img/quarto-hostel/hostel3.jpg" class="html5lightbox"><img src="img/quarto-hostel/hostel3_thumb.jpg" /></a></li>
											<li><a href="img/quarto-hostel/hostel4.jpg" class="html5lightbox"><img src="img/quarto-hostel/hostel4_thumb.jpg" /></a></li>										
										</ul>
									
									</div>
								</div></div>
							<div class="txtq">
								<h3>Quarto de hostel</h3>
								<!--<p>Quarto para quem quer uma opção mais econômica de hospedagem. Com duas camas de solteiro, ou um beliche de madeira maciça fabricado para grandes adultos.<br/>Os banheiros ficam no corredor e atendem até 3 quartos.</p>-->
								<!--<p><img src="img/icone_pessoa.png"> Até 2 pessoas</p>
								<p><img src="img/cama-solteiro.png"> 2 camas de solteiro ou <img src="img/beliche.png"> 1 beliche</p>							
								<p><img src="img/banheiro.png"> Banheiro no corredor, atendendo até 3 quartos</p>
								<p><img src="img/frigobar.png"> Sacada para rua</p>
								
								<div class="booking"><a alt="Reserve! Fale conosco" title="Reserve! Fale conosco" href="#three"><img src="img/reserva_email.png" width="80" height="23" alt=""/></a></div>
							</div>
						</div>
					
					
					
					</div>					
				</div>
		  </div>	
	  </section>
	  
	  
	  
      <!-- Two --><!--
	  <section id="two" class="wrapper" >
			<div class="containerCentralizado inner itemCentralizado roundedCorner albergueForeground bg2">
				<div class="itemCentralizado" style="max-width: 100%;">
					<div class="itemGrid1" style="width:100%">
						
						<div class="tophi">							
							<div class="logohi"><img class="hilogo" src="img/icon-hostelling-international-logo2.png"></div>
							<div class="txthi"><h2 class="txthih2">É associado da Hostelling International?</h2></div>
						</div>
												
						<div class="subtxthi" >Aproveite as tarifas especiais em quartos compartilhados - com beliches de madeira maciça, fabricados especialmente para adultos.</div>
						
						<div class="quarto" style="background: #e67716 ; border-radius: 10px">
							
							<div class="imagemq">
								
								<div id="amazingslider-wrapper-8" style="display:block;position:relative;max-width:250px;margin:0px auto 0px;">
									<div id="amazingslider-8" style="display:block;position:relative;margin:0 auto;">
										<ul class="amazingslider-slides" style="display:none;">
											<li><a href="img/quarto-hi/hi1.jpg" class="html5lightbox"><img src="img/quarto-hi/hi1.jpg"  title="QuartoConjugado(21)" /></a></li>
											<li><a href="img/quarto-hi/hi2.jpg" class="html5lightbox"><img src="img/quarto-hi/hi2.jpg"  title="QuartoConjugado(21)" /></a></li>
											<li><a href="img/quarto-hi/hi3.jpg" class="html5lightbox"><img src="img/quarto-hi/hi3.jpg"  title="QuartoConjugado(21)" /></a></li>
											<li><a href="img/quarto-hi/hi4.jpg" class="html5lightbox"><img src="img/quarto-hi/hi4.jpg"  title="QuartoConjugado(21)" /></a></li>
											<li><a href="img/quarto-hi/hi5.jpg" class="html5lightbox"><img src="img/quarto-hi/hi5.jpg"  title="QuartoConjugado(21)" /></a></li>											
										</ul>
									
									</div>
								</div></div>
							<div class="txtq" style="color: #fff;">
								<p>Alojamentos Masculinos e Femininos</p>
								<p>2 beliches por quarto</p>
								<p>Armários individuais</p>
								<p>Edredon + coberta + toalha de banho</p>
								<p>Sacada para a rua</p>
								<p>Banheiro compartilhado</p>
								<p>Ferro de passar roupa + secador de cabelo disponíveis</p>

							</div>
						</div>
							<br>
							<p style="text-align: center"><a href="https://hihostelbrasil.com.br/pt/hostels/al-hostel" target="_blank" class="button scrolly" style="background: #e67716; color: #fff">Reserve pelo HiHostels</a></p>

					</div>
					
				</div>
		  </div>	
	  </section>
      
		  
		  
		  
      <!-- Three --><!--
      <section id="three" class="wrapper fade-up" style="background:#fff">
        <div class="inner">
          <h2 style="color: #000">Fale Conosco</h2>
			<br>
          <div class="split style1">
            <section>
              <form method="post" action="enviaremail.php">
				  
				 <label for="name" style="color:#000">Nome</label> <input name="name" type="text" required="required" id="name" style="border-color: rgba(0,0,0,0.10); color: rgba(0,0,0,0.50);" placeholder="Nome"><br>
				 <label for="email" style="color: #000">E-mail</label> <input name="email" type="email" required="required" id="email" style="border-color: rgba(0,0,0,0.10); color: rgba(0,0,0,0.50);"><br>
				 <label for="message" style="color: #000">Mensagem</label> <textarea name="message" rows="5" required="required" id="message" style="border-color: rgba(0,0,0,0.10); color: rgba(0,0,0,0.50);"></textarea> <br>
				  <input type="submit" name="enviar" style="border-color: rgba(0,0,0,0.10); color: rgba(0,0,0,0.50);" value="Enviar Mensagem">
				  
               <!-- <div class="fields">
                  <div class="field half"> <label for="name" style="color: #000">Nome</label> <input name="name" type="text" required="required" id="name" style="border-color: rgba(0,0,0,0.10); color: rgba(0,0,0,0.50);"> </div>
                  <div class="field half"> <label for="email" style="color: #000">Email</label> <input name="email" type="email" required="required" id="email" style="border-color: rgba(0,0,0,0.10); color: rgba(0,0,0,0.50);"> </div>
                  <div class="field"> <label for="message" style="color: #000">Mensagem</label> <textarea name="message" rows="5" required="required" id="message" style="border-color: rgba(0,0,0,0.10); color: rgba(0,0,0,0.50);"></textarea> 
                  </div>-->
					
               <!-- </div>
                <ul class="actions">
                  <li><a href="" class="button submit" name="enviar" style="border-color: rgba(0,0,0,0.10); color: rgba(0,0,0,0.50);">Enviar Mensagem</a></li>
                </ul>--><!--
              </form>
            </section>
            <section>
              <ul class="contact">
                <li>
                  <h3 style="color: #000">Endereço</h3>
                  <span style="color: #222; font-size: 15px">Rua Dante Laginestra, 89, Centro<br>
                    Nova Friburgo, RJ 28610-005<br>
                    Brasil</span> </li>
                <li>
                  <h3 style="color: #000">E-mail</h3>
                  <a href="mailto:hotel.ale@hotmail.com" style="color: #222; font-size: 15px">hotel.ale@hotmail.com</a> </li>
                <li>
                  <h3 style="color: #000">Telefone</h3>
                  <span style="color: #222; font-size: 15px">(22) 2526-3478</span> </li>
                <li>
                  <h3 style="color: #000">Social</h3>
                  <ul class="icons">
                    <li><a href="https://twitter.com/hotelale" class="fa-twitter" style="color: #222"><span class="label">Twitter</span></a></li>
                    <li><a href="https://www.facebook.com/HotelAle" class="fa-facebook" style="color: #222" target="_blank"><span class="label">Facebook</span></a></li>                   
                    <li><a href="https://www.instagram.com/hotel.ale/" class="fa-instagram" style="color: #222" target="_blank"><span class="label">Instagram</span></a></li>
                    <!--<li><a class="fa-linkedin" style="color: #222"><span class="label">LinkedIn</span></a></li>-->
                  <!--</ul>
                </li>
              </ul>
				<h3 style="color: #222;" >Blog</h3>
                <a href="../blog" style="color: #222; font-size: 15px;">Acessar o Blog</a>
                
              
				
            </section>
          </div>
        </div>
      </section>
	  <!---->
    <!--</div>
    <!-- Footer -->
    <!--<footer id="footer" class="wrapper style1-alt">
      <div class="inner">
		 	  		  
     	 <ul class="menu">
          <li style="line-height: 50px;">2019 © Hotel Alê. Todos os direitos reservados</li>
          <li style="line-height: 50px;"><a href="http://ledesigner.com.br" target="_blank"><img src="img/ledesigner.png" /></a></li>
      	</ul>
		  
		  
      </div>
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
	<script src="js/index.js"></script>

	<script src="assets/bootstrap/bootstrap.bundle.min.js"></script>
	<!--script src="js/animations-main-page.js"></script-->
	
  </body>
</html>