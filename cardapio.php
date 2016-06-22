<!DOCTYPE html>
	<html lang = "pt-br">
	<head>
		<title>Vikings Taberna-Cardápio</title>
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
			<h2>Cardápio</h2><br><br>
				<?php
					$bdcon = pg_connect("dbname=Vikings port=5432 user=postgres password=jukajeffe") or die("erro de conexão");
					$resultado = pg_query($bdcon,"SELECT *from produto where tipo = 'Porção'");
					echo '<h3>Porções<h3><br><br>';
					while($aux2 = pg_fetch_assoc($resultado)){
						echo '
							<div class ="row">	
								<div class="col-xs-10 col-sm-10 col-md-4 col-lg-4 col-xl-4">
									<h5>'.$aux2["nome"].'</h5>
								</div>
								
								<div class="col-xs-10 col-sm-10 col-md-4 col-lg-4 col-xl-4">
									<h5>'.$aux2["preco"].'</h5>
								</div>
							</div>';
					}
				?>
				<br><br>
				<?php
					$bdcon = pg_connect("dbname=Vikings port=5432 user=postgres password=jukajeffe") or die("erro de conexão");
					$resultado = pg_query($bdcon,"SELECT *from produto where tipo = 'Prato'");
					echo '<h3>Pratos<h3><br><br>';
					while($aux2 = pg_fetch_assoc($resultado)){
						echo '
							<div class ="row">	
								<div class="col-xs-10 col-sm-10 col-md-4 col-lg-4 col-xl-4">
									<h5>'.$aux2["nome"].'</h5>
								</div>
								
								<div class="col-xs-10 col-sm-10 col-md-4 col-lg-4 col-xl-4">
									<h5>'.$aux2["preco"].'</h5>
								</div>
							</div>';
					}
				?>
				
				<br><br>
				<?php
					$bdcon = pg_connect("dbname=Vikings port=5432 user=postgres password=jukajeffe") or die("erro de conexão");
					$resultado = pg_query($bdcon,"SELECT *from produto where tipo = 'Lata'");
					echo '<h3>Bebidas-Lata<h3><br><br>';
					while($aux2 = pg_fetch_assoc($resultado)){
						echo '
							<div class ="row">	
								<div class="col-xs-10 col-sm-10 col-md-4 col-lg-4 col-xl-4">
									<h5>'.$aux2["nome"].'</h5>
								</div>
								
								<div class="col-xs-10 col-sm-10 col-md-4 col-lg-4 col-xl-4">
									<h5>'.$aux2["preco"].'</h5>
								</div>
							</div>';
					}
				?>
				
				<br><br>
				<?php
					$bdcon = pg_connect("dbname=Vikings port=5432 user=postgres password=jukajeffe") or die("erro de conexão");
					$resultado = pg_query($bdcon,"SELECT *from produto where tipo = 'Suco'");
					echo '<h3>Sucos<h3><br><br>';
					while($aux2 = pg_fetch_assoc($resultado)){
						echo '
							<div class ="row">	
								<div class="col-xs-10 col-sm-10 col-md-4 col-lg-4 col-xl-4">
									<h5>'.$aux2["nome"].'</h5>
								</div>
								
								<div class="col-xs-10 col-sm-10 col-md-4 col-lg-4 col-xl-4">
									<h5>'.$aux2["preco"].'</h5>
								</div>
							</div>';
					}
				?>
				
				<br><br>
				<?php
					$bdcon = pg_connect("dbname=Vikings port=5432 user=postgres password=jukajeffe") or die("erro de conexão");
					$resultado = pg_query($bdcon,"SELECT *from produto where tipo = 'Lata'");
					echo '<h3>Bebidas-Lata<h3><br><br>';
					while($aux2 = pg_fetch_assoc($resultado)){
						echo '
							<div class ="row">	
								<div class="col-xs-10 col-sm-10 col-md-4 col-lg-4 col-xl-4">
									<h5>'.$aux2["nome"].'</h5>
								</div>
								
								<div class="col-xs-10 col-sm-10 col-md-4 col-lg-4 col-xl-4">
									<h5>'.$aux2["preco"].'</h5>
								</div>
							</div>';
					}
				?>
				
				<br><br>
				<?php
					$bdcon = pg_connect("dbname=Vikings port=5432 user=postgres password=jukajeffe") or die("erro de conexão");
					$resultado = pg_query($bdcon,"SELECT *from produto where tipo = 'Dose'");
					echo '<h3>Doses<h3><br><br>';
					while($aux2 = pg_fetch_assoc($resultado)){
						echo '
							<div class ="row">	
								<div class="col-xs-10 col-sm-10 col-md-4 col-lg-4 col-xl-4">
									<h5>'.$aux2["nome"].'</h5>
								</div>
								
								<div class="col-xs-10 col-sm-10 col-md-4 col-lg-4 col-xl-4">
									<h5>'.$aux2["preco"].'</h5>
								</div>
							</div>';
					}
				?>
				
				<br><br>
				<?php
					$bdcon = pg_connect("dbname=Vikings port=5432 user=postgres password=jukajeffe") or die("erro de conexão");
					$resultado = pg_query($bdcon,"SELECT *from produto where tipo = 'Garrafa'");
					echo '<h3>Garrafas<h3><br><br>';
					while($aux2 = pg_fetch_assoc($resultado)){
						echo '
							<div class ="row">	
								<div class="col-xs-10 col-sm-10 col-md-4 col-lg-4 col-xl-4">
									<h5>'.$aux2["nome"].'</h5>
								</div>
								
								<div class="col-xs-10 col-sm-10 col-md-4 col-lg-4 col-xl-4">
									<h5>'.$aux2["preco"].'</h5>
								</div>
							</div>';
					}
				?>
				
				<br><br>
				<?php
					$bdcon = pg_connect("dbname=Vikings port=5432 user=postgres password=jukajeffe") or die("erro de conexão");
					$resultado = pg_query($bdcon,"SELECT *from produto where tipo = 'Cerveja'");
					echo '<h3>Cerveja<h3><br><br>';
					while($aux2 = pg_fetch_assoc($resultado)){
						echo '
							<div class ="row">	
								<div class="col-xs-10 col-sm-10 col-md-4 col-lg-4 col-xl-4">
									<h5>'.$aux2["nome"].'</h5>
								</div>
								
								<div class="col-xs-10 col-sm-10 col-md-4 col-lg-4 col-xl-4">
									<h5>'.$aux2["preco"].'</h5>
								</div>
							</div>';
					}
				?>
				
				<br><br>
				<?php
					$bdcon = pg_connect("dbname=Vikings port=5432 user=postgres password=jukajeffe") or die("erro de conexão");
					$resultado = pg_query($bdcon,"SELECT *from produto where tipo = 'Chopp'");
					echo '<h3>Chopps<h3><br><br>';
					while($aux2 = pg_fetch_assoc($resultado)){
						echo '
							<div class ="row">	
								<div class="col-xs-10 col-sm-10 col-md-4 col-lg-4 col-xl-4">
									<h5>'.$aux2["nome"].'</h5>
								</div>
								
								<div class="col-xs-10 col-sm-10 col-md-4 col-lg-4 col-xl-4">
									<h5>'.$aux2["preco"].'</h5>
								</div>
							</div>';
					}
				?>
				
				<br><br>
				<?php
					$bdcon = pg_connect("dbname=Vikings port=5432 user=postgres password=jukajeffe") or die("erro de conexão");
					$resultado = pg_query($bdcon,"SELECT *from produto where tipo = 'Sobremesa'");
					echo '<h3>Sobremesas<h3><br><br>';
					while($aux2 = pg_fetch_assoc($resultado)){
						echo '
							<div class ="row">	
								<div class="col-xs-10 col-sm-10 col-md-4 col-lg-4 col-xl-4">
									<h5>'.$aux2["nome"].'</h5>
								</div>
								
								<div class="col-xs-10 col-sm-10 col-md-4 col-lg-4 col-xl-4">
									<h5>'.$aux2["preco"].'</h5>
								</div>
							</div>';
					}
				?>

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
