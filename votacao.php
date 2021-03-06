<!DOCTYPE html>
	<html lang = "pt-br">
	<head>
		<title>Vikings Taberna-Votação</title>
		<!-- Última versão CSS compilada e minificada -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

		<!-- Tema opcional -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

		<!-- Última versão JavaScript compilada e minificada -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		<meta charset = "utf-8">
		<link rel = "stylesheet" type = "text/css" href="css/index.css">
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
		
		<div class="container">
			<h2>Vote na sua atração favorita!</h2><br><br>
			<form action = "votacaobanco.php" method = "POST" accept-charset = "utf-8" class = "form-login" enctype ="multipart/form-data">
				
				<?php
					include("conexao.php");
					$resultado = pg_query($bdcon,"SELECT *from atracao ORDER BY qtvotos");
					while($aux2 = pg_fetch_assoc($resultado)){
						echo '<div class ="row">
								<div class="col-xs-10 col-sm-6 col-md-6 col-lg-6 col-xl-6">
								
									<label class = "text-center"> '.$aux2["nomeatracao"].'</label> <input type="radio" name="atracao" id="atracao" value="'.$aux2["idatracao"].'" class = "form-control" placeholde = "emp" autofocus><br></label>&nbsp;&nbsp;&nbsp;&nbsp;		
								</div>
								
								<div class="col-xs-10 col-sm-6 col-md-6 col-lg-6 col-xl-6">';
									$soma = pg_query($bdcon,"SELECT sum(qtvotos) from atracao");
									$soma2 = pg_fetch_assoc($soma);
									$aux = $soma2["sum"];
									$porcent = (100/$aux )* $aux2["qtvotos"];					
									echo '<h3>'.$porcent.' %<h3>';		
								echo'</div>
							</div>';
					}	
				?>
				<button type = "submit" class = "btn btn-lg btn-default btn-block"> Votar </button><br>
			</form>
			
			<p class = "text-center text-danger">
			<?php
				session_start();
				if(isset($_SESSION['errovoto'])){
					echo $_SESSION['errovoto'];
					unset($_SESSION['errovoto']);
				}
				
				if(isset($_SESSION['okvoto'])){
					echo $_SESSION['okvoto'];
					unset($_SESSION['okvoto']);
				}
			
			?>
		</p>
		</div>
		
		<footer> <!-- Aqui e a area do footer -->
			<div class="container">
				<div class ="row">
					<div class="hidden-xs col-md-6 col-lg-6 hidden-sm col-xl-6">	
						<br>Vikings Taberna<br> Rua Benjamin Constant 51-D<br>Chapecó-SC<br>Fone:(49) 3304-3456
					</div>
					<div class="hidden-xs col-md-1 col-lg-1 hidden-sm col-xl-1">	
						<br><a href = "https://www.facebook.com/Vikings-Taberna-1676370405939228/?fref=ts"><img src="imagens/face.jpg" class = "img-responsive"></img></a>	
					</div>
					
					<div class="hidden-xs hidden-sm col-md-5 col-lg-5 col-xl-5">	
						<br><br><br>Visite nossa página no Facebook
					</div>
					
					
				</div>
			</div>
		</footer>
		<script src = "http://code.jquery.com/jquery-latest.js"></script>
		<script src = "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	</body>
</html>

