<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <title>Hotel Alê</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	  
	<?php include 'pixelHomePage.php'; ?>
	
	<link rel="icon" type="image/png" href="img/ico.png" />
	  
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
	
	
    <!-- Sidebar -->
    <section id="sidebar">
      <div class="inner">
        <nav>
          <ul>
            <li><a href="index.php">O Hotel</a></li>
			<li><a href="hotel.php">Instalações</a></li>
            <li><a href="quartos.php">Quartos</a></li>
            <li><a href="hihostel.php">Hi Hostel</a></li>			
            <li><a href="#three">Contato</a></li>
			<li><a href="blog/">Blog</a></li>
			
          </ul>
        </nav>
      </div>
		<div class="bottom-menu"></div>
		
	  </section>
    <!-- Wrapper -->
    <div id="wrapper">
      <!-- Intro -->
      <section id="intro" class="wrapper style1 fullscreen fade-up">
        <div class="inner" style="padding: 20px 0">			
			<img style="width: 50%; display: table; margin: 0 auto;" class="logohotel" src="img/logo.png" />
			<p style="margin-bottom: 0px;" align="center">O Hotel Alê tem jeitinho de casa do interior!</p>
			<p style="margin-top: 0px; margin-bottom: 0px;" align="justify">É para quem gosta das coisas simples da vida: tomar um café, estar entre amigos, passar uns dias com a família. Fica bem no centro de Nova Friburgo, perto de restaurantes, bares, bancos, pontos de ônibus e comércio (inclusive de lingerie). Tem fácil acesso às principais atrações turísticas da cidade.</p>
		    <p style="margin-top: 0px; margin-bottom: 0px;" align="center">Possui quartos de casal, triplo, de familia e idividual.</p>
			<br/>
			<p style="text-align: center"><a href="#one" class="button scrolly" style="background: #078B7D; color: #fff;">Veja os quartos</a></p>			
        </div>
      </section>
	  
	  
	   <!-- Two -->
		<section id="zero" class="wrapper" >
			<div class="inner itemCentralizado roundedCorner albergueForeground bg2">
				<div class="slider">
					<div class="quarto">
						<div class="imagemq">							
								
							<div id="amazingslider-wrapper-1" style="display:block;position:relative;max-width:100%;margin:0px auto 0px;">
								<img style="width: 31vw;" src="img/newImg/porta1.jpeg" />
							</div>
						
						</div>
						<div class="txtq">
							<h3 style="font-size: 150%; font-weight: bold;">O Hotel Alê</h3>						
							<p style="font-weight:bolder">O Hotel Alê fica bem no centro de Nova Friburgo: </p>
							<p></p>
							<p style="background-color: rgba(99,99,99, 0.3)"><!--<img src="img/icone_pessoa.png"-->•Dá para ir a pé aos dois principais shoppings da cidade, à Praça do Suspiro e ao teleférico, ao Country Club e a muitos outros lugares.</p>
							<p></p>
							<p style="background-color: rgba(99,99,99, 0.3)"><!--<img src="img/icone_pessoa.png"-->•Fica situado em um prédio histórico que já estava aqui em 1954!</p>
							<p></p>
							<p style="background-color: rgba(99,99,99, 0.3)"><!--<img src="img/icone_pessoa.png"-->•Foi aqui que Benito di Paula iniciou sua carreira.</p><br>
							
						</div>
					</div>
					<div class="quarto">
						<div class="imagemq">							
								
							<div id="amazingslider-wrapper-1" style="display:block;position:relative;max-width:100%;margin:0px auto 0px;">
								<img style="width: 31vw;" src="img/newImg/foto2.jpeg" />
							</div>
						
						</div>
						<div class="txtq">
							<h3 style="font-size: 150%; font-weight: bold;">Localização</h3>						
							<p style="font-weight:bolder">No Hotel Alê, o atendimento é realizado de maneira individualizada</p>
							<p></p>
							<p style="background-color: rgba(99,99,99, 0.3)"><img src="img/icone_pessoa.png">"Bem no Centro de Friburgo, proprietários super acolhedores[...]"<br> -C.M. comentário do Google</p>
							<p></p>
							<p style="background-color: rgba(99,99,99, 0.3)"><img src="img/icone_pessoa.png">"É sempre bom vir a nova Friburgo e ter um aconchego. Sra Silvia é super acolhedora. O Hotel Alê é super bem localizado, limpo e bom para descansar após um dia de trabalho."<br> -R.C. comentário do Google</p>
							
						</div>
					
					</div>
					<div class="quarto">
						<div class="imagemq">							
								
							<div id="amazingslider-wrapper-1" style="display:block;position:relative;max-width:100%;margin:0px auto 0px;">
								<img style="width: 31vw;" src="img/newImg/foto3.jpeg" />
							</div>
						
						</div>
						<div class="txtq">
							<h3 style="font-size: 150%; font-weight: bold;">Instalações</h3>						
							<p style="font-weight:bolder">No Hotel Alê, o ambiente é familiar e aconchegante</p>
							<p></p>
							<p style="background-color: rgba(99,99,99, 0.3)"><!--<img src="img/icone_pessoa.png"-->Hall de Estar com:<br>&nbsp;• Wi-fi grátis<br>&nbsp;• Espaço para leitura<br>&nbsp;• Painel para fotos</p>
							<p></p>
							<p style="background-color: rgba(99,99,99, 0.3)"><!--<img src="img/icone_pessoa.png"-->Decoração:<br>&nbsp;• Estilo casa do interior. <br>&nbsp;• Decoração rústica com material reutilizado</p><br>
							<p></p>
							<p style="background-color: rgba(99,99,99, 0.3)"><!--<img src="img/icone_pessoa.png"-->&nbsp;• 100% piso de madeira maciça</p><br>
							<p></p>
							<p style="background-color: rgba(99,99,99, 0.3)"><!--<img src="img/icone_pessoa.png"-->&nbsp;• 100% não fumante</p><br>
							
							
							
						</div>
						
					
					</div>
					<div class="quarto">
						<div class="imagemq">							
								
							<div id="amazingslider-wrapper-1" style="display:block;position:relative;max-width:100%;margin:0px auto 0px;">
								<img style="width: 31vw;" src="img/newImg/foto4.jpeg" />
							</div>
						
						</div>
						<div class="txtq">
							<h3 style="font-size: 150%; font-weight: bold;">Recepção</h3>						
							<p style="font-weight:bolder">No Hotel Alê, o atendimento é realizado de maneira individualizada</p>
							<p></p>
							<p style="background-color: rgba(99,99,99, 0.3)"><img src="img/icone_pessoa.png">"Bem no Centro de Friburgo, proprietários super acolhedores[...]"<br> -C.M. comentário do Google</p>
							<p></p>
							<p style="background-color: rgba(99,99,99, 0.3)"><img src="img/icone_pessoa.png">"É sempre bom vir a nova Friburgo e ter um aconchego. Sra Silvia é super acolhedora.  [...]"<br> -R.C. comentário do Google</p>
							
							
							
						</div>
					
					</div>
					<div class="quarto">
						<div class="imagemq">							
								
							<div id="amazingslider-wrapper-1" style="display:block;position:relative;max-width:100%;margin:0px auto 0px;">
								<img style="width: 31vw;" src="img/newImg/foto5.jpeg" />
							</div>
						
						</div>
						<div class="txtq">
							<h3 style="font-size: 150%; font-weight: bold;">Recepção</h3>						
							<p style="font-weight:bolder">No Hotel Alê, o atendimento é realizado de maneira individualizada</p>
							<p></p>
							<p style="background-color: rgba(99,99,99, 0.3)"><img src="img/icone_pessoa.png">"Bem no Centro de Friburgo, proprietários super acolhedores[...]"<br> -C.M. comentário do Google</p>
							<p></p>
							<p style="background-color: rgba(99,99,99, 0.3)"><img src="img/icone_pessoa.png">"É sempre bom vir a nova Friburgo e ter um aconchego. Sra Silvia é super acolhedora. O Hotel Alê é super bem localizado, limpo e bom para descansar após um dia de trabalho."<br> -R.C. comentário do Google</p>
							
							
							
						</div>
					
					</div>
					<div class="quarto">
						<div class="imagemq">							
								
							<div id="amazingslider-wrapper-1" style="display:block;position:relative;max-width:100%;margin:0px auto 0px;">
								<img style="width: 31vw;" src="img/newImg/foto6.jpeg" />
							</div>
						
						</div>
						<div class="txtq">
							<h3 style="font-size: 150%; font-weight: bold;">Conveniência</h3>						
							<p style="font-weight:bolder">O Hotel Alê oferece as seguintes conveniências:</p>
							<p></p>
							<p style="background-color: rgba(99,99,99, 0.3)"><!--<img src="img/icone_pessoa.png"-->•Recepção 24h</p>
							<p></p>
							<p style="background-color: rgba(99,99,99, 0.3)"><!--<img src="img/icone_pessoa.png"-->•Check-in a partir das 14h<br>•Check-out até às 12h</p>
							<p></p>
							<p style="background-color: rgba(99,99,99, 0.3)"><!--<img src="img/icone_pessoa.png"-->•Vendinha com doces, chocolates, biscoitos e bebidas não alcoólicas</p><br>
							
							
						</div>
					
					</div>
					<div class="quarto">
						<div class="imagemq">							
								
							<div id="amazingslider-wrapper-1" style="display:block;position:relative;max-width:100%;margin:0px auto 0px;">
								<img style="width: 31vw;" src="img/newImg/foto7.jpeg" />
							</div>
						
						</div>
						<div class="txtq">
							<h3 style="font-size: 150%; font-weight: bold;">Café da Manhã</h3>						
							<p style="font-weight:bolder">No Hotel Alê, o café da manhã com produtos da região está incluído no valor da diária e é servido em um aconchegante salão estilo colonial</p>
							<p></p>
							<p style="background-color: rgba(99,99,99, 0.3)"><img src="img/icone_pessoa.png">"[...] o café da manhã super generoso, bem variado[...]"<br> -L.B. comentário do Google</p>
							<p></p>
							<p style="background-color: rgba(99,99,99, 0.3)"><img src="img/icone_pessoa.png">"[...] o serviço de café da manhã muito aconchegante tudo quentinho uma delícia!<br> -A.S.S comentário do Google</p>
							
							
							
						</div>
					
					</div>
				</div>
			</div>
			
		</section>
	  
	  
	  
      <!-- One -->  
	  <section id="one" class="wrapper">
			<div class="containerCentralizado inner itemCentralizado roundedCorner albergueForeground" style="background:#fff">
				<div class="itemCentralizado" style="max-width: 100%;">
					<div class="itemGrid1" style="width:100%">
						<h2>Quartos</h2>
						<p style="color: #000">Os quartos são simples, aconchegantes e com decoração no estilo rústico. Ficam no segundo e terceiro andares e o acesso é feito através de escadas no estilo colonial. As camas foram fabricadas exclusivamente para o Hotel Alê por Ely Araujo - moveleiro tradicional e renomado de Nova Friburgo.<br> Conheça os vários tamanhos:</p>
						
						
						
						<div class="quarto">
							<div class="imagemq">							
								
							<div id="amazingslider-wrapper-1" style="display:block;position:relative;max-width:100%;margin:0px auto 0px;">
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
								<h3 style="font-size: 150%; font-weight: bold;">Quarto Triplo Especial</h3>						
								<p><img src="img/icone_pessoa.png"> Até 3 pessoas</p>
								<p><img src="img/cama-solteiro.png"> 3 camas de solteiro</p>
								<p><img src="img/banheiro.png"> Amplo banheiro privativo com secador de cabelo</p>
								<p><img src="img/frigobar.png"> Frigobar</p>
								<p></p>
								
								<div class="booking"><p style="width:100%; text-align: center;">Reserve por aqui e ganhe um brinde!</p><p style="width:100%; text-align: center;"><a href="https://hotelale.ibookingpms.com.br/motor-de-reservas/?idioma=por" class="button scrolly" style="background: #078B7D; color: #fff;">Reservar Agora</a></p></div>
							</div>
						
						</div>
					
					
					
						<div class="quarto">
							<div class="imagemq">
								
								<div id="amazingslider-wrapper-2" style="display:block;position:relative;max-width:100%;margin:0px auto 0px;">
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
								<h3 style="font-size: 150%; font-weight: bold;">Quarto Conjugado Especial</h3>
								<!--<p>Quarto para família ou grupo de amigos de até quatro pessoas. Formado por um quarto de casal com banheiro privativo e um quarto com duas camas de solteiro e sacada para a rua.</p>-->
								<p><img src="img/icone_pessoa.png"> Até 4 pessoas</p>
								<p><img src="img/cama-casal.png"> 1 cama de casal <img src="img/cama-solteiro.png"> 2 camas de solteiro</p>							
								<p><img src="img/banheiro.png"> Amplo banheiro privativo com secador de cabelo</p>
								<p><img src="img/frigobar.png"> Frigobar, sacada para a rua</p>
								
								<div class="booking"><p style="width:100%; text-align: center;">Reserve por aqui e ganhe um brinde!</p><p style="width:100%; text-align: center;"><a href="https://hotelale.ibookingpms.com.br/motor-de-reservas/?idioma=por" class="button scrolly" style="background: #078B7D; color: #fff;">Reservar Agora</a></p></div>
							</div>
						</div>
					
					
					
					
						<div class="quarto">
							<div class="imagemq">
								
								<div id="amazingslider-wrapper-3" style="display:block;position:relative;max-width:100%;margin:0px auto 0px;">
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
								<h3 style="font-size: 150%; font-weight: bold;">Quarto Casal +1 Especial</h3>
								
								<p><img src="img/icone_pessoa.png"> Até 3 pessoas</p>
								<p><img src="img/cama-casal.png"> 1 cama de casal <img src="img/cama-solteiro.png"> 1 cama de solteiro</p>							
								<p><img src="img/banheiro.png"> Amplo banheiro privativo com secador de cabelo</p>
								<p><img src="img/frigobar.png"> Frigobar</p>
								
								<div class="booking"><p style="width:100%; text-align: center;">Reserve por aqui e ganhe um brinde!</p><p style="width:100%; text-align: center;"><a href="https://hotelale.ibookingpms.com.br/motor-de-reservas/?idioma=por" class="button scrolly" style="background: #078B7D; color: #fff;">Reservar Agora</a></p></div>
							</div>
						</div>
					
					
					
					
					
					
						
						<div class="quarto">
							<div class="imagemq">
								
								<div id="amazingslider-wrapper-4" style="display:block;position:relative;max-width:100%;margin:0px auto 0px;">
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
								<h3 style="font-size: 150%; font-weight: bold;">Quarto de Casal Especial</h3>
								<!--<p>Quarto com uma cama de casal, frigobar e amplo banheiro com secador de cabelo e box de cortina.</p>-->
								<p><img src="img/icone_pessoa.png"> 2 pessoas</p>
								<p><img src="img/cama-casal.png"> 1 cama de casal</p>
								<p><img src="img/banheiro.png"> Amplo banheiro privativo com secador de cabelo</p>
								<p><img src="img/frigobar.png"> Frigobar</p>
								
								<div class="booking"><p style="width:100%; text-align: center;">Reserve por aqui e ganhe um brinde!</p><p style="width:100%; text-align: center;"><a href="https://hotelale.ibookingpms.com.br/motor-de-reservas/?idioma=por" class="button scrolly" style="background: #078B7D; color: #fff;">Reservar Agora</a></p></div>
							</div>
						</div>
						
					

					
						
						<div class="quarto">
							<div class="imagemq">
								
								<div id="amazingslider-wrapper-5" style="display:block;position:relative;max-width:100%;margin:0px auto 0px;">
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
								<h3 style="font-size: 150%; font-weight: bold;">Quarto de Casal Básico</h3>								
								<p><img src="img/icone_pessoa.png"> 2 pessoas</p>
								<p><img src="img/cama-casal.png"> 1 cama de casal</p>							
								<p><img src="img/banheiro.png"> Banheiro privativo</p>
								<p><img src="img/frigobar.png"> Frigobar</p>
								
								<div class="booking"><p style="width:100%; text-align: center;">Reserve por aqui e ganhe um brinde!</p><p style="width:100%; text-align: center;"><a href="https://hotelale.ibookingpms.com.br/motor-de-reservas/?idioma=por" class="button scrolly" style="background: #078B7D; color: #fff;">Reservar Agora</a></p></div>
							</div>
						</div>
					
					
					
					
					
					
						<div class="quarto">
							<div class="imagemq">
								
								<div id="amazingslider-wrapper-6" style="display:block;position:relative;max-width:100%;margin:0px auto 0px;">
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
								<h3 style="font-size: 150%; font-weight: bold;">Quarto de Casal Bem Simples</h3>
								<!--<p>Quarto para quem quer uma opção mais econômica de hospedagem. Com duas camas de solteiro, ou um beliche de madeira maciça fabricado para grandes adultos.<br/>Os banheiros ficam no corredor e atendem até 3 quartos.</p>-->
								<p><img src="img/icone_pessoa.png"> 2 pessoas</p>
								<p><img src="img/cama-casal.png"> 1 cama de casal</p>							
								<p><img src="img/banheiro.png"> Banheiro privativo</p>								
								<p></p>
								
								<div class="booking"><p style="width:100%; text-align: center;">Reserve por aqui e ganhe um brinde!</p><p style="width:100%; text-align: center;"><a href="https://hotelale.ibookingpms.com.br/motor-de-reservas/?idioma=por" class="button scrolly" style="background: #078B7D; color: #fff;">Reservar Agora</a></p></div>
							</div>
						</div>
					
					
					
					
					
					
					
						<div class="quarto">
							<div class="imagemq">
								
								<div id="amazingslider-wrapper-7" style="display:block;position:relative;max-width:100%;margin:0px auto 0px;">
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
								<h3 style="font-size: 150%; font-weight: bold;">Quarto de Hostel</h3>
								<!--<p>Quarto para quem quer uma opção mais econômica de hospedagem. Com duas camas de solteiro, ou um beliche de madeira maciça fabricado para grandes adultos.<br/>Os banheiros ficam no corredor e atendem até 3 quartos.</p>-->
								<p><img src="img/icone_pessoa.png"> Até 2 pessoas</p>
								<p><img src="img/cama-solteiro.png"> 2 camas de solteiro ou <img src="img/beliche.png"> 1 beliche</p>							
								<p><img src="img/banheiro.png"> Banheiro no corredor, atendendo até 3 quartos</p>
								<p><img src="img/frigobar.png"> Sacada para rua</p>
								
								<div class="booking"><p style="width:100%; text-align: center;"><a href="#three" class="button scrolly" style="background: #078B7D; color: #fff;">Reverve Conosco</a></p></div>
							</div>
						</div>
					
					
					
					</div>					
				</div>
		  </div>	
	  </section>
	  
	  
	  
      <!-- Two -->
	  <section id="two" class="wrapper" >
			<div class="containerCentralizado inner itemCentralizado roundedCorner albergueForeground bg2">
				<div class="itemCentralizado" style="max-width: 100%;">
					<div class="itemGrid1" style="width:100%">
						
						<div class="tophi">							
							<div class="logohi"><a href="https://hihostelbrasil.com.br/pt/hostels/al-hostel"><img class="hilogo" src="img/icon-hostelling-international-logo2.png"></a></div>
							<div class="txthi"><h1 class="txthih2">É associado da Hostelling International?</h1></div>
						</div>
												
						<div class="subtxthi"> <p style = "text-align: center;"> Aproveite as tarifas especiais em quartos compartilhados <br> Com beliches de madeira maciça, fabricados especialmente para adultos.</p></div>
						
						<div class="quarto" style="background: #e67716 ; border-radius: 10px">
							
							<div class="imagemq">
								
								<div id="amazingslider-wrapper-8" style="display:block;position:relative;max-width:100%;margin:0px auto 0px;">
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
      
		  
		  
		  
      <!-- Three -->
      <section id="three" class="wrapper fade-up" style="background:#fff">
        <div class="inner">
          <h2 style="color: #000">Fale Conosco</h2>
			<br>
          <div class="split style1">
            <section>
              <form method="post" action="enviaremail.php">
				  
				 <label for="name" style="color:#000">Nome</label> <input name="name" type="text" required="required" id="name" style=" border-color: rgba(0,0,0,0.10); color: rgba(0,0,0,0.50); border-width: 2px;" placeholder="Nome"><br>
				 <label for="email" style="color: #000">E-mail</label> <input name="email" type="email" required="required" id="email" style="border-color: rgba(0,0,0,0.10); color: rgba(0,0,0,0.50); border-width: 2px;"><br>
				 <label for="message" style="color: #000">Mensagem</label> <textarea name="message" rows="5" required="required" id="message" style="border-color: rgba(0,0,0,0.10); color: rgba(0,0,0,0.50);border-width: 2px;"></textarea> <br>
				  <input type="submit" name="enviar" style="background: #078B7D; color: #fff;" value="Enviar Mensagem">
				  
				  
               <!-- <div class="fields">
                  <div class="field half"> <label for="name" style="color: #000">Nome</label> <input name="name" type="text" required="required" id="name" style="border-color: rgba(0,0,0,0.10); color: rgba(0,0,0,0.50);"> </div>
                  <div class="field half"> <label for="email" style="color: #000">Email</label> <input name="email" type="email" required="required" id="email" style="border-color: rgba(0,0,0,0.10); color: rgba(0,0,0,0.50);"> </div>
                  <div class="field"> <label for="message" style="color: #000">Mensagem</label> <textarea name="message" rows="5" required="required" id="message" style="border-color: rgba(0,0,0,0.10); color: rgba(0,0,0,0.50);"></textarea> 
                  </div>-->
					
               <!-- </div>
                <ul class="actions">
                  <li><a href="" class="button submit" name="enviar" style="border-color: rgba(0,0,0,0.10); color: rgba(0,0,0,0.50);">Enviar Mensagem</a></li>
                </ul>-->
              </form>
			  <div style="background-color: red;"><?php include 'faleConosco.php'; ?></div>
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
                  <a href="mailto:contato@hotelale.com" style="color: #222; font-size: 15px">contato@hotelale.com</a> </li>
                <li>
                  <h3 style="color: #000">Telefone</h3>
                  <span style="color: #222; font-size: 15px"><a href="tel:+552225263478"> +55 (22) 2526-3478</a></span> </li>
                <li>
                  <h3 style="color: #000">Social</h3>
                  <ul class="icons">
                    <li><a href="https://twitter.com/hotelale" class="fa-twitter" style="color: #222"><span class="label">Twitter</span></a></li>
                    <li><a href="https://www.facebook.com/HotelAle" class="fa-facebook" style="color: #222" target="_blank"><span class="label">Facebook</span></a></li>                   
                    <li><a href="https://www.instagram.com/hotel.ale/" class="fa-instagram" style="color: #222" target="_blank"><span class="label">Instagram</span></a></li>
                    <!--<li><a class="fa-linkedin" style="color: #222"><span class="label">LinkedIn</span></a></li>-->
                  </ul>
                </li>
				<li>
					<h3 style="color: #222;" >Blog</h3>
					<a href="../blog" class="button scrolly" style="background: #078B7D; color: #fff;">Acessar o Blog</a>
				</li>
			  </ul>
              
				
            </section>
          </div>
        </div>
      </section>
    </div>
    <!-- Footer -->
    <footer id="footer" class="wrapper style1-alt">
      <div class="inner">
		 	  		  
     	 <ul class="menu">
          <li style="line-height: 50px;">2019 © Hotel Alê. Todos os direitos reservados</li>
          <li style="line-height: 50px;"><a href="http://ledesigner.com.br" target="_blank"><img src="img/ledesigner.png" /></a></li>
      	</ul>
		  
		  
      </div>
    </footer>
    <!-- Scripts -->
	<script>
	  fbq('track', 'ViewContent');
	</script>
	
	
	
    <script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/jquery.scrollex.min.js"></script>
    <script src="assets/js/jquery.scrolly.min.js"></script>
    <script src="assets/js/browser.min.js"></script>
    <script src="assets/js/breakpoints.min.js"></script>
    <script src="assets/js/util.js"></script>
    <script src="assets/js/main.js"></script>	  
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
	
	<script src="js/slick/jquery.min.js"></script>
	<script src="js/slick/slick.js"></script>
	
	<script>
		$('.slider').slick({
		  slidesToShow: 1,
		  slidesToScroll: 1,
		  /*autoplay: true,*/
		  autoplaySpeed: 2000,
		});
	</script>
	
  </body>
</html>
<!--
	Hyperspace by HTML5 UP	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)-->