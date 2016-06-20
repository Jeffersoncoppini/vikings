<!DOCTYPE html>
	<html lang = "pt-br">
	<head>
		<title>Vikings Taberna-Home</title>
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
					<a class="navbar-brand" href="#">Vikings Taberna</a>
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
		<div class = "container">
			<section id = "sliderhome">
				<div id="myCarousel" class="carousel slide" data-ride="carousel">
					<!-- Indicators -->
					<ol class="carousel-indicators">
						<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
						<li data-target="#myCarousel" data-slide-to="1"></li>
						<li data-target="#myCarousel" data-slide-to="2"></li>
						<li data-target="#myCarousel" data-slide-to="3"></li>
					</ol>

					<!-- Wrapper for slides -->
					<div class="carousel-inner" role ="listbox">
						<?php
							session_start();
							$bdcon = pg_connect("dbname=Vikings port=5432 user=postgres password=jukajeffe") or die("erro de conexão");
							$resultado = pg_query($bdcon,"SELECT * FROM promocao where pgini = 1");
							$resultadob = pg_query($bdcon,"SELECT * FROM evento where pgini = 1");
							
							$resp = pg_fetch_assoc($resultado);
							$resp2 = pg_fetch_assoc($resultadob);
					
						echo'<div class="item active"><a href = "promocoes.php"><img src = "'.$resp["imagem"].'" class = "img-responsive" alt = "Promoção"></a><span>Promoções</span></div>
						<div class="item"><a href = "eventos.php"><img src = "'.$resp2["imagem"].'" class = "img-responsive" alt = "Evento"></a><span>Eventos</span></div>
						<div class="item"><a href = "reservas.php"><img src = "imagens/votacao.jpg" class = "img-responsive" alt = "Votação"></a><span>Votação</span></div>
						<div class="item"><a href = "reservas.php"><img src = "imagens/reserva.jpg" class = "img-responsive" alt = "Reserva"></a><span>Reservas</span></div>';
						?>
					</div>

					<!-- Left and right controls -->
					<a class="left carousel-control" href="#myCarousel" role = "button"data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
					<a class="right carousel-control" href="#myCarousel" role = "button"data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
				</div>
			</section>
		</div>
		
		<div class="container">
			<div class ="row">
			<?php
				$bdcon = pg_connect("dbname=Vikings port=5432 user=postgres password=jukajeffe") or die("erro de conexão");
				$resultado = pg_query($bdcon,"SELECT * FROM anuncio join empresa on anuncio.cnpj = empresa.cnpj");
				while($aux2 = pg_fetch_assoc($resultado)){
						echo '<div class="hidden-xs col-md-4 col-lg-4 hidden-sm col-xl-4">
								<h4>
									'.$aux2["nomefant"].'<br>
									'.$aux2["descricao"].'<br>
									'.$aux2["email"].'<br>
									Fone: '.$aux2["telefone"].'<br>
								</h4>
							</div>';
					}
			?>
			</div>
		</div>
		<footer> <!-- Aqui e a area do footer -->
			<div class="container">
				<div class ="row">
					<div class="hidden-xs col-md-4 col-lg-4 hidden-sm col-xl-4">
						<a>
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3551.816965525351!2d-52.61780724903035!3d-27.099066607446623!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94e4b69e666506cd%3A0x60bae2452eec1837!2sR.+Benjamin+Constant%2C+51+-+Centro%2C+Chapec%C3%B3+-+SC!5e0!3m2!1spt-BR!2sbr!4v1466012875181"></iframe>	
						</a>	
					</div>
					<div class="hidden-xs col-md-3 col-lg-3 hidden-sm col-xl-3">	
						<br>Vikings Tabernas<br> Rua Benjamin Constant 51-D<br>Chapecó-SC<br>Fone:(49) 3304-3456
					</div>
					<div class="hidden-xs col-md-1 col-lg-1 hidden-sm col-xl-1">
						<br><a href = "https://www.facebook.com/Vikings-Taberna-1676370405939228/?fref=ts"><img src="imagens/face.jpg" class = "img-responsive"></img></a>	
					</div>
					
					<div class="hidden-xs col-md-3 col-lg-3 hidden-sm col-xl-3">
						<br><br><br>Visite nossa página no Facebook
					</div>
					
					
				</div>
			</div>
		</footer>
		<script src = "http://code.jquery.com/jquery-latest.js"></script>
		<script src = "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	</body>
</html>
