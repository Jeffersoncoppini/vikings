<!DOCTYPE html>
	<html lang = "pt-br">
	<head>
		<title>Vikings Taberna-Alteração de atrações</title>
		<!-- Última versão CSS compilada e minificada -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

		<!-- Tema opcional -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

		<!-- Última versão JavaScript compilada e minificada -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		<meta charset = "utf-8">
		<link rel = "stylesheet" type = "text/css" href="css/cadprod.css">
	</head>
	<body>
		<?php
			session_start();
			ob_start();
			if(($_SESSION['usuario'] == "")  || ($_SESSION['senha'] == "")){
				header("Location: adm.php");
			}
		?>
		<nav class="navbar navbar-default">
			<div class="container-fluid">
			<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="menuadm.php">Vikings Taberna</a>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Produtos <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="cadprod.php">Cadastrar...</a></li>
								<li><a href="altprod.php">Alterar...</a></li>
								<li role="separator" class="divider"></li>
								<li><a href="relprod.php">Relatórios</a></li>
							</ul>
						</li>
						
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Cardápio <span class="caret"></span></a>							
							<ul class="dropdown-menu">
								<li><a href="altcar.php">Alterar...</a></li>
								<li role="separator" class="divider"></li>
								<li><a href="relcar.php">Relatórios</a></li>
							</ul>
						</li>
						
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Promoções <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="inprom.php">Incluir...</a></li>
								<li><a href="remprom.php">Remover...</a></li>
								<li role="separator" class="divider"></li>
								<li><a href="relprom.php">Relatórios</a></li>
							</ul>
						</li>
						
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Agenda <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="cadatrac.php">Cadastrar atrações...</a></li>
								<li><a href="altatrac.php">Alterar atrações...</a></li>
								<li><a href="rematrac.php">Remover atrações...</a></li>
								<li><a href="cadevento.php">Cadastrar eventos...</a></li>
								<li><a href="altevento.php">Alterar eventos...</a></li>
								<li><a href="remevento.php">Remover eventos...</a></li>
								<li role="separator" class="divider"></li>
								<li><a href="relevento.php">Relatórios</a></li>
							</ul>
						</li>
						
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Anuncios <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="inanun.php">Incluir anuncios...</a></li>
								<li><a href="altanun.php">Alterar anuncios...</a></li>
								<li><a href="remanun.php">Remover anuncios...</a></li>
								<li><a href="inemp.php">Incluir empresas...</a></li>
								<li><a href="altemp.php">Alterar empresas...</a></li>
								<li><a href="rememp.php">Remover empresas...</a></li>
								<li role="separator" class="divider"></li>
								<li><a href="relemp.php">Relatórios</a></li>
							</ul>
						</li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<li><a href="#">Perfil</a></li>
						<li><a href="adm.php">Sair</a></li>
					</ul>
				</div><!-- /.navbar-collapse -->
			</div><!-- /.container-fluid -->
		</nav>
		
		<div class = "container">
			<form action = "altatracbanco.php" method = "POST" accept-charset = "utf-8" class = "form-login">
				<h2 class = "form-login-heading">Alteração de atrações</h2><br>
				<label for = "nome">Busca:</label>
				<input type = "text" id = "nome" name = "nome" class = "form-control" placeholde = "nome" required autofocus><br>
				
				<button type = "submit" class = "btn btn-lg btn-primary btn-block"> Buscar </button>
				
				<br><br><p class = "text-center text-danger">
					<?php
						if(isset($_SESSION['erro'])){
						echo $_SESSION['erro'];
						unset($_SESSION['erro']);
						}
			
					?>
				</p>
				
				
			</form>
			
			<?php
				if(isset($_SESSION['existe'])){
					echo'<form action = "altatracbanco2.php" method = "POST" accept-charset = "utf-8" class = "form-login">';
					$busca = $_SESSION['existe'];
					$bdcon = pg_connect("dbname=Vikings port=5432 user=postgres password=jukajeffe") or die("erro de conexão");
					$resultado = pg_query($bdcon,"SELECT * FROM atracao where nomeatrac like'".$busca."%'");
					while($aux2 = pg_fetch_assoc($resultado)){
						echo '<label class = "text-center"> '.$aux2["nomeatrac"].' <input type="radio" name="atrac" id="atrac" value="'.$aux2["nomeatrac"].'" class = "form-control" autofocus><br></label>&nbsp;&nbsp;&nbsp;&nbsp;';
					}
					unset($_SESSION['existe']);
					echo'<button type = "submit" class = "btn btn-lg btn-primary btn-block"> Alterar</button>';
					echo'</form>';
				}
				if(isset($_SESSION['existe2'])){
					$busca = $_SESSION['existe2'];
					$bdcon = pg_connect("dbname=Vikings port=5432 user=postgres password=jukajeffe") or die("erro de conexão");
					$resultado = pg_query($bdcon,"SELECT * from atracao where nomeatrac = '$busca'");
					$aux2 = pg_fetch_assoc($resultado);
					echo'<form action = "altatracbanc3.php" method = "POST" accept-charset = "utf-8" class = "form-login">';
					echo'<label for = "nome">Nome:</label>
					<input type = "text" id = "nome" value ="'.$aux2["nomeatrac"].'" name = "nome" class = "form-control" placeholde = "nome" required autofocus><br>
				
					<label for = "email"> E-mail:</label>
					<input type = "mail" id = "email" value ="'.$aux2["email"].'" name = "email" class = "form-control" placeholde = "email" autofocus></br>
				
					<label for = "telefone"> Telefone:</label>
					<input type = "tel" id = "tel" value ="'.$aux2["telefone"].'" name = "tel" class = "form-control" placeholde = "tel" required autofocus></br>
		
					<label for = "tipo">Tipo:</label>
					<input type = "text" id = "tipo" value="'.$aux2["tipo"].'" name = "tipo" class = "form-control" placeholde = "tipo" required autofocus><br>
				
					<button type = "submit" class = "btn btn-lg btn-primary btn-block"> Alterar </button>
					
					</form>';
					
				}
			?>
		</div>
		<p class = "text-center">
			<?php
				if(isset($_SESSION['erroaltprod'])){
					echo $_SESSION['erroaltprod'];
					unset($_SESSION['erroaltprod']);
				}
				if(isset($_SESSION['aceptaltprod'])){
					echo $_SESSION['aceptaltprod'];
					unset($_SESSION['aceptaltprod']);
				}
			
			?>
		</p>
		<script src = "http://code.jquery.com/jquery-latest.js"></script>
		<script src = "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		
	</body>
</html>
