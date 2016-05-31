<!DOCTYPE html>
	<html lang = "pt-br">
	<head>
		<title>Vikings Taberna-Login</title>
		<!-- Última versão CSS compilada e minificada -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

		<!-- Tema opcional -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

		<!-- Última versão JavaScript compilada e minificada -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		<link rel = "stylesheet" type = "text/css" href="css/logincss.css">
		<meta charset = "utf-8">
	</head>
	<body>
		<?php
			Session_start();
			unset($_SESSION['usuario'],$_SESSION['senha']);
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
					<a class="navbar-brand" href="#">Vikings Taberna</a>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li class="active"></li>
						<li><a href="index.php">Home</a></li>
						<li><a href="#">Cardápio</a></li>
						<li><a href="#">Promoções</a></li>
						<li><a href="#">Reservas</a></li>
						<li><a href="#">Eventos</a></li>
						<li><a href="#">Contato</a></li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<li><a href="adm.php">Acesso Administrador</a></li>
					</ul>
				</div><!-- /.navbar-collapse -->
			</div><!-- /.container-fluid -->
		</nav>
		
		<div class = "container">
			<form action = "entradas.php" method = "POST" accept-charset = "utf-8" class = "form-login">
				<h2 class = "form-login-heading">Acesso administrador</h2><br>
				<label for = "usuario">Usuário:</label>
				<input type = "text" id = "usuario" name = "usuario" class = "form-control" placeholder = "usuario" required autofocus><br>
				
				<label for = "senha"> Senha:</label>
				<input type = "password" id = "senha" name = "senha" class = "form-control" placeholder = "senha" required autofocus></br>
				
				<button type = "submit" class = "btn btn-block btn-default"> Entrar </button>
			</form>
			<br><br><br><br><br><br>
			<p class = "text-center text-danger">
				<?php
					if(isset($_SESSION['loginErro'])){
						echo $_SESSION['loginErro'];
						unset($_SESSION['loginErro']);
					}
				?>
			</p>
		</div>
		<footer> <!-- Aqui e a area do footer -->
			<div class="container">
				<div class="copyright">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<p>&copy; Todos os direitos reservados.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer>
		<script src = "http://code.jquery.com/jquery-latest.js"></script>
		<script src = "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	</body>
</html>
