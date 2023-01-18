<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <title>Hotel Alê</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	  
	<?php include 'pixelHomePage.php'; ?>
	
	<link rel="icon" type="image/png" href="img/ico.png" />
	 
	 
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
	
	<nav class="navbar navbar-expand-md sticky-top navbar-dark bg-dark" style="height: 10vh;">
		<a class="navbar-brand d-md-none" href="index.php"><img style="max-height: 7vh;vertical-align: top" src="img/logo.png"></img></a>
		<button style="max-height: 8vh;" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		
		<div class="collapse navbar-collapse justify-content-around bg-dark" id="navbarTogglerDemo02">
			<a></a>
			<a class="nav-link " href="hotel.php">Sobre Nós</a>
			<a class="nav-link " href="quartos.php">Quartos</a>
			<a class="nav-link d-none d-md-block" href="index.php"><img style="max-height: 7vh;" src="img/logo.png"></img></a>
			<a class="nav-link " href="hotel.php">Hi Hostel</a>
			<a class="nav-link " href="index.php">Blog</a>
			<a></a>
		</div>
	</nav>
	
	<!--nav class="navbar navbar-expand-md sticky-top navbar-dark bg-dark">
		<a class="navbar-brand" href="#">Hotel Alê</a>
		<button style="max-height: 8vh;" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarTogglerDemo02">
			<div class="container justify-content-center sidebar">
				<ul class="nav navbar-nav mt-2 mt-lg-0 d-flex justify-content-around">
				
					<li class="nav-item active">
						<a class="nav-link" href="index.php">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="quartos.php">Quartos</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="quartos.php"><img style="max-height: 6vh; vertical-align: middle;" src="img/logo.png" /></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="hotel.php">Sobre Nós</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="hihostel.php">Hi Hostel</a>
					</li>
				  
				</ul>
			</div-->
			<!--div class="my-2 my-lg-0">
				<a href="#three">Fale Conosco</a>
			</div-->
		</div>
	</nav>
	
	
	
    <!-- Sidebar 
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
		
	  </section>-->
    <!-- Wrapper -->
    <div id="wrapper">
	   <!-- Two -->
		<!--<section id="zero" class="wrapper">
			<div class="inner itemCentralizado roundedCorner albergueForeground bg2">
			
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
						<p style="background-color: rgba(99,99,99, 0.3)"><!--<img src="img/icone_pessoa.png" ->•Dá para ir a pé aos dois principais shoppings da cidade, à Praça do Suspiro e ao teleférico, ao Country Club e a muitos outros lugares.</p>
						<p></p>
						<p style="background-color: rgba(99,99,99, 0.3)"><!--<img src="img/icone_pessoa.png" ->•Fica situado em um prédio histórico que já estava aqui em 1954!</p>
						<p></p>
						<p style="background-color: rgba(99,99,99, 0.3)"><!--<img src="img/icone_pessoa.png" ->•Foi aqui que Benito di Paula iniciou sua carreira.</p><br>
						
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
						<p style="background-color: rgba(99,99,99, 0.3)"><!--<img src="img/icone_pessoa.png" ->Hall de Estar com:<br>&nbsp;• Wi-fi grátis<br>&nbsp;• Espaço para leitura<br>&nbsp;• Painel para fotos</p>
						<p></p>
						<p style="background-color: rgba(99,99,99, 0.3)"><!--<img src="img/icone_pessoa.png" ->Decoração:<br>&nbsp;• Estilo casa do interior. <br>&nbsp;• Decoração rústica com material reutilizado</p><br>
						<p></p>
						<p style="background-color: rgba(99,99,99, 0.3)"><!--<img src="img/icone_pessoa.png" ->&nbsp;• 100% piso de madeira maciça</p><br>
						<p></p>
						<p style="background-color: rgba(99,99,99, 0.3)"><!--<img src="img/icone_pessoa.png" ->&nbsp;• 100% não fumante</p><br>
						
						
						
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
						<p style="background-color: rgba(99,99,99, 0.3)"><!--<img src="img/icone_pessoa.png" ->•Recepção 24h</p>
						<p></p>
						<p style="background-color: rgba(99,99,99, 0.3)"><!--<img src="img/icone_pessoa.png" ->•Check-in a partir das 14h<br>•Check-out até às 12h</p>
						<p></p>
						<p style="background-color: rgba(99,99,99, 0.3)"><!--<img src="img/icone_pessoa.png" ->•Vendinha com doces, chocolates, biscoitos e bebidas não alcoólicas</p><br>
						
						
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
			
		</section>-->
		
		<section style="max-width: 100%;" class="wrapper">
			<!-- START THE FEATURETTES -->

			

			<div class="row featurette" style="background-color: #F7F7F7;">
			  <div class="col-md-7">
				<h2 class="featurette-heading" style="text-align: center;">O Hotel Alê</h2>
				<p class="lead" style="font-weight:bolder">O Hotel Alê fica bem no centro de Nova Friburgo: </p>
				<p class="lead"><!--<img src="img/icone_pessoa.png" -->•Dá para ir a pé aos dois principais shoppings da cidade, à Praça do Suspiro e ao teleférico, ao Country Club e a muitos outros lugares.</p>
				<p class="lead"><!--<img src="img/icone_pessoa.png" -->•Fica situado em um prédio histórico que já estava aqui em 1954!</p>
				<p class="lead"><!--<img src="img/icone_pessoa.png" -->•Foi aqui que Benito di Paula iniciou sua carreira.</p>
			  </div>
			  <div class="col-md-5">
				<img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" src="img/newImg/porta1.png" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><title>Placeholder</title></img>
			  </div>
			</div>

			<hr class="featurette-divider">

			<div class="row featurette" style="background-color: #E7E7E7;">
			  <div class="col-md-7 order-md-2">
				<h2 class="featurette-heading" style="text-align: center;">Localização</h2>
				<p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
			  </div>
			  <div class="col-md-5 order-md-1">
				<img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" src="img/newImg/foto2.png" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><title>Placeholder</title></img>
			  </div>
			</div>

			<hr class="featurette-divider">

			<div class="row featurette" style="background-color: #F7F7F7;">
			  <div class="col-md-7">
				<h2 class="featurette-heading" style="text-align: center;">Instalações</h2>
				<p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
			  </div>
			  <div class="col-md-5">
				<img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" src="img/newImg/foto3.png" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><title>Placeholder</title></img>
			  </div>
			</div>

			<hr class="featurette-divider">

			<div class="row featurette" style="background-color: #E7E7E7;">
			  <div class="col-md-7 order-md-2">
				<h2 class="featurette-heading" style="text-align: center;">Recepção</h2>
				<p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
			  </div>
			  <div class="col-md-5 order-md-1">
				<img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" src="img/newImg/foto4.png" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><title>Placeholder</title></img>
			  </div>
			</div>

			<hr class="featurette-divider">

			<div class="row featurette" style="background-color: #F7F7F7;">
			  <div class="col-md-7">
				<h2 class="featurette-heading" style="text-align: center;">Recepção</h2>
				<p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
			  </div>
			  <div class="col-md-5">
				<img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" src="img/newImg/foto5.png" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 500x500"><title>Placeholder</title></img>
			  </div>
			</div>

			<hr class="featurette-divider">
			
			<div class="row featurette" style="background-color: #E7E7E7;">
			  <div class="col-md-7 order-md-2">
				<h2 class="featurette-heading" style="text-align: center;">Conveniência</h2>
				<p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
			  </div>
			  <div class="col-md-5 order-md-1">
				<img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" src="img/newImg/foto6.png" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"></rect></img>
			  </div>
			</div>

			<hr class="featurette-divider">

			<div class="row featurette" style="background-color: #F7F7F7;">
			  <div class="col-md-7">
				<h2 class="featurette-heading" style="text-align: center;">Café da Manhã</h2>
				<p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
			  </div>
			  <div class="col-md-5">
				<img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" src="img/newImg/foto7.png" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 500x500"><title>Placeholder</title></img>
			  </div>
			</div>

			<hr class="featurette-divider">

			<!-- /END THE FEATURETTES -->
		</section>
		  
		  
      <!-- Three -->
      <section id="three" class="wrapper fade-up" style="background:#fff">
        <div class="inner">
          <h2 style="color: #000">Fale Conosco</h2>
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
	
	
	<script src="js/slick/slick.js"></script>
	
	
  </body>
</html>
<!--
	Hyperspace by HTML5 UP	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)-->