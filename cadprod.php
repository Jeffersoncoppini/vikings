<!DOCTYPE html>
	<html lang = "pt-br">
	<head>
		<title>Vikings Taberna-Cadastro de produtos</title>
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
		<?php
			session_start();
			ob_start();
			if(($_SESSION['usuario'] == "")  || ($_SESSION['senha'] == "")){
				header("Location: adm.php");
			}
		?>
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
					<a class="navbar-brand" href="menuadm.php">Vikings Taberna</a>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Produtos <span class="caret"></span></a>
							<ul class="dropdown-menu inverse-dropdown">
								<li><a href="cadprod.php">Cadastrar...</a></li>
								<li><a href="altprod.php">Alterar...</a></li>
								<li role="separator" class="divider"></li>
								<li><a href="relprod.php">Relatórios</a></li>
							</ul>
						</li>
						
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Promoções <span class="caret"></span></a>
							<ul class="dropdown-menu inverse-dropdown">
								<li><a href="inprom.php">Incluir...</a></li>
								<li><a href="remprom.php">Remover...</a></li>
								<li role="separator" class="divider"></li>
								<li><a href="relprom.php">Relatórios</a></li>
							</ul>
						</li>
						
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Agenda <span class="caret"></span></a>
							<ul class="dropdown-menu inverse-dropdown">
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
							<ul class="dropdown-menu inverse-dropdown">
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
						<li><a href="cadpgini.php">Gerenciar página inicial</a></li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Perfil <span class="caret"></span></a>
							<ul class="dropdown-menu inverse-dropdown">
								<li><a href="altperfil.php">Alterar perfil</a></li>
								<li><a href="cadusu.php">Criar usuário</a></li>
							</ul>
						</li>
						<li><a href="adm.php">Sair</a></li>
					</ul>
				</div><!-- /.navbar-collapse -->
			</div><!-- /.container-fluid -->
		</nav>
		
		<div class = "container">
			<form action = "cadprodbanco.php" method = "POST" accept-charset = "utf-8" class = "form-login">
				<h2 class = "form-login-heading">Cadastro de produtos</h2><br>
				<input type = "text" id = "nome" name = "nome" class = "form-control" placeholder = "Nome" required autofocus><br>
				
				<input type = "text" id = "desc" name = "desc" class = "form-control" placeholder = "Descrição" autofocus></br>
				
				<input type = "text" id = "un" name = "un" class = "form-control" placeholder = "Un" required autofocus></br>
				
				<input type = "number" step = 0.01 id = "preco" name = "preco" class = "form-control" placeholder = "Preço" required autofocus></br>
				
				<input type = "text" id = "tipo" name = "tipo" class = "form-control" placeholder = "Tipo" required autofocus></br>
				<button type = "submit" class = "btn btn-lg btn-default btn-block"> Cadastrar </button><br><br><br>
				
				<p class = "text-center text-danger">
			<?php
				if(isset($_SESSION['ok'])){
					echo $_SESSION['ok'];
					unset($_SESSION['ok']);
				}
				if(isset($_SESSION['errocad'])){
					echo $_SESSION['errocad'];
					unset($_SESSION['errocad']);
				}
			
			?>
		</p>
			</form>
		</div>
		
		<script src = "http://code.jquery.com/jquery-latest.js"></script>
		<script src = "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		
	</body>
</html>
