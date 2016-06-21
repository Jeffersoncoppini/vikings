<!DOCTYPE html>
	<html lang = "pt-br">
	<head>
		<title>Vikings Taberna-Reservas</title>
		<!-- Última versão CSS compilada e minificada -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

		<!-- Tema opcional -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

		<!-- Última versão JavaScript compilada e minificada -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		<meta charset = "utf-8">
		<link rel = "stylesheet" type = "text/css" href="css/menu.css">
	</head>
	<body>
		<nav class="navbar navbar-inverse">
			<div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<div class ='logo'><a class="navbar-brand" href="#"><img src = "imagens/logo.png" class = "img-responsive" alt = "logo"></a></div>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li class="active"></li>
						<li><a href="index.php">Home</a></li>
						<li><a href="cardapio.php">Cardápio</a></li>
						<li><a href="promocoes.php">Promoções</a></li>
						<li><a href="reservas.php">Reservas</a></li>
						<li><a href="eventos.php">Agenda</a></li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<li><a href="adm.php">Acesso Administrador</a></li>
					</ul>
				</div><!-- /.navbar-collapse -->
			</div><!-- /.container-fluid -->
		</nav>
		
		<div class "container">
			<form action = "reservasbanco.php" method = "POST" accept-charset = "utf-8" class = "form-login" enctype ="multipart/form-data">
			
				<h2 class = "form-login-heading">Faça sua reserva</h2><br>
			
				<div class ="row">
					<div class="col-xs-10 col-sm-6 col-md-6 col-lg-6 col-xl-6">
						<input type = "text" id = "nome" name = "nome" class = "form-control" placeholder = "Nome" required autofocus><br>
					</div>
					
					<div class="col-xs-10 col-sm-6 col-md-6 col-lg-6 col-xl-6">
						<input type = "text" id = "cpf" name = "cpf" class = "form-control" placeholder = "CPF" autofocus>
					</div>
				</div>
				<div class ="row">
					<div class="col-xs-10 col-sm-6 col-md-6 col-lg-6 col-xl-6">
						<label for = "data"> Data:</label>
						<input type = "date" id = "data" name = "data" class = "form-control" placeholder = "Data" required autofocus>
					</div>
				
					<div class="col-xs-10 col-sm-6 col-md-6 col-lg-6 col-xl-6">
						<label for = "hora"> Hora:</label>
						<input type = "time" id = "hora" name = "hora" class = "form-control" placeholder = "Hora" required autofocus><br><br>
					</div>
				</div>
				<div class ="row">				
					<div class="col-xs-5 col-sm-3 col-md-3 col-lg-3 col-xl-3">
						<input type = "number" id = "qtpessoas" name = "qtpessoas" class = "form-control" placeholder = "Lugares" required autofocus></br><br>
					</div>
				</div>
				
				<button type = "submit" class = "btn btn-lg btn-default btn-block"> Reservar	 </button><br>
				
				<p class = "text-center text-danger">
			<?php
				session_start();
				if(isset($_SESSION['ok'])){
					echo $_SESSION['ok'];
					unset($_SESSION['ok']);
				}
				if(isset($_SESSION['errores'])){
					echo $_SESSION['errores'];
					unset($_SESSION['errores']);
				}
			
			?>
		</p>
			
			</form>
		</div>
		<footer> <!-- Aqui e a area do footer -->
			<div class="container">
				<div class ="row">
					<div class="hidden-xs col-md-6 col-lg-6 hidden-sm col-xl-6">	
						<br>Vikings Tabernas<br> Rua Benjamin Constant 51-D<br>Chapecó-SC<br>Fone:(49) 3304-3456
					</div>
					<div class="hidden-xs col-md-1 col-lg-1 hidden-sm col-xl-1">	
						<br><a href = "https://www.facebook.com/Vikings-Taberna-1676370405939228/?fref=ts"><img src="imagens/face.jpg" class = "img-responsive"></img></a>	
					</div>
					
					<div class="hidden-xs col-md-5 col-lg-5 hidden-sm col-xl-5">	
						<br><br><br>Visite nossa página no Facebook
					</div>
					
					
				</div>
			</div>
		</footer>
		<script src = "http://code.jquery.com/jquery-latest.js"></script>
		<script src = "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	</body>
</html>
