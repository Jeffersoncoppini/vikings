<!DOCTYPE html>
	<html lang = "pt-br">
	<head>
		<title>Vikings Taberna-Remover evento</title>
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
					<?php
					echo'<a class="navbar-brand"#">'.$_SESSION['usuario'].'</a>'
					?>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
	
						
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Agenda <span class="caret"></span></a>
							<ul class="dropdown-menu inverse-dropdown">
								<li><a href="cadatrac2.php">Cadastrar atrações...</a></li>
								<li><a href="altatrac2.php">Alterar atrações...</a></li>
								<li><a href="rematrac2.php">Remover atrações...</a></li>
								<li><a href="cadevento2.php">Cadastrar eventos...</a></li>
								<li><a href="altevento2.php">Alterar eventos...</a></li>
								<li><a href="remevento2.php">Remover eventos...</a></li>
								<li role="separator" class="divider"></li>
								<li><a href="relevento2.php">Relatórios</a></li>
							</ul>
						</li>
						
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Perfil <span class="caret"></span></a>
							<ul class="dropdown-menu inverse-dropdown">
								<li><a href="altperfil2.php">Alterar perfil</a></li>
							</ul>
						</li>
						<li><a href="adm.php">Sair</a></li>
					</ul>
				</div><!-- /.navbar-collapse -->
			</div><!-- /.container-fluid -->
		</nav>
		
		<div class = "container">
			<form action = "remeventobanco.php" method = "POST" accept-charset = "utf-8" class = "form-login" enctype ="multipart/form-data">
				<h2 class = "form-login-heading">Remover eventos</h2><br>
				<div class ="row">
				<?php
					include("conexao.php");
					$resultado = pg_query($bdcon,"SELECT * FROM evento");
					while($aux2 = pg_fetch_assoc($resultado)){
						echo'<div class="col-xs-10 col-sm-6 col-md-6 col-lg-6 col-xl-6">	
								<label class = "text-center"> '.$aux2["nomeevento"].' - '.$aux2["dataevento"].' </label><input type="radio" name="evento" id="evento" value="'.$aux2["idevento"].'" class = "form-control" autofocus><br>&nbsp;&nbsp;&nbsp;&nbsp;
							</div>';
					}
				?>
				</div>
				<button type = "submit" class = "btn btn-lg btn-default btn-block"> Remover</button><br><br><br>
				<p class = "text-center text-danger">
			<?php
				if(isset($_SESSION['okevento'])){
					echo $_SESSION['okevento'];
					unset($_SESSION['okevento']);
				}
				if(isset($_SESSION['erroevento'])){
					echo $_SESSION['erroevento'];
					unset($_SESSION['erroevento']);
				}
			
			?>
		</p>
			</form>
		</div>
		<footer> <!-- Aqui e a area do footer -->
			<div class="container">
				<div class ="row">
					<div class="hidden-xs hidden-sm col-md-3 col-lg-3 col-xl-3">	
						<h5><br>Vikings Taberna<br> Rua Benjamin Constant 51-D<br>Chapecó-SC<br>Fone:(49) 3304-3456<h5>
					</div>		
				</div>
			</div>
		</footer>
		<script src = "http://code.jquery.com/jquery-latest.js"></script>
		<script src = "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		
	</body>
</html>
