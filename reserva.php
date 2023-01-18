<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <title>Hotel Alê</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	
	
	
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
	<!-- Codigo para o plugin jQuery de calendário-->
	<link rel="stylesheet" type="text/css" href="js/datetimepicker-master/jquery.datetimepicker.css"/ >
	
	 <?php include 'pixelHomePage.php'; ?>
  </head>
  <body class="is-preload">
  
    <!-- Sidebar -->
    <section id="sidebar">
      <div class="inner">
        <nav>
          <ul>
            <li><a href="index.php#intro">O Hotel</a></li>
            <li><a href="index.php#one">Quartos</a></li>
            <li><a href="index.php#two">Clientes Hosteling</a></li>			
            <li><a href="index.php#three">Contato</a></li>
			<li><a href="/blog">Blog</a></li>
          </ul>
        </nav>
      </div>
		<div class="bottom-menu"></div>
		
	  </section>
    <!-- Wrapper -->
    <div id="wrapper">
      <!-- Intro -->
		
      <section style="background:#fff" class="">
        <div class="inner" style="padding: 30px">			
			<form method="post" action="enviaremail.php">
				<h1 style="margin: auto; color: black;">
					Faça já sua reserva
				</h1>
				<br>
				<label for="name" style="color:#000">Nome</label> <input name="name" type="text" required="required" id="name" style="border-color: rgba(1,1,1,1); color: rgba(1,1,1,1);" placeholder="Nome"><br>
				<label for="email" style="color: #000">E-mail</label> <input name="email" type="email" required="required" id="email" style="border-color: rgba(0,0,0,1); color: rgba(0,0,0,1);"><br>
				
				<label for="email" style="color: #000">data1</label> <input name="periodo1" type="text" required="required" id="email" style="border-color: rgba(0,0,0,1); color: rgba(0,0,0,1);"><br>
				<label for="email" style="color: #000">data2</label> <input name="periodo2" type="text" required="required" id="email" style="border-color: rgba(0,0,0,1); color: rgba(0,0,0,1);"><br>
				
				
			
						<!----<span class="help-block text-muted small-font calendario">Data de Inicio</span>
						<input type="text" class="form-control dataInicio" id="dataInicio" name="dataInicio">
						<span class= "help-block text-muted small-font calendario " >Data de Fim</span>
						<input type="text" class="form-control dataFim" id="dataFim" name="dataFim">
						---->
				
				
				<input type="submit" name="enviar" style="border-color: rgba(0,0,0,0.10); color: rgba(1,1,1,1);" value="VERIFICAR DISPONIBILIDADE">
				  
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
        </div>
      </section>

    <!-- Scripts -->
    <script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/jquery.scrollex.min.js"></script>
    <script src="assets/js/jquery.scrolly.min.js"></script>
    <script src="assets/js/browser.min.js"></script>
    <script src="assets/js/breakpoints.min.js"></script>
    <script src="assets/js/util.js"></script>
	<!-- Codigo para o plugin jQuery de calendário-->
	<script src="js/datetimepicker-master/jquery.datetimepicker.js" />
	<script src="js/jquery.mask.js" />
	
	
	<!----<script> $('.dataInicio').mask('99/99/9999', {placeholder:" __/__/____"})</script>
		<script>
		$.datetimepicker.setLocale('pt');
		$('.dataInicio').datetimepicker({
			  format:'d/m/Y ',
			  timepicker:false,
			  inline:false,
			  lang:'pt'			  
			});</script>
		
		<script> $('.dataFim').mask('99/99/9999', {placeholder:" __/__/____"})</script>
		<script>
		$.datetimepicker.setLocale('pt');
		$('.dataFim').datetimepicker({
			  format:'d/m/Y',
			  timepicker:false,
			  inline:false,
			  lang:'pt'
			});</script>
			<!---->
	
	
    <script src="assets/js/main.js"></script>
	

  </body>
</html>
<!--
	Hyperspace by HTML5 UP	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)-->