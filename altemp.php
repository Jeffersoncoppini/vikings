<!DOCTYPE html>
	<html lang = "pt-br">
	<head>
		<title>Vikings Taberna-Alteração de empresas</title>
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
					echo'<a class="navbar-brand" href="menuadm.php">'.$_SESSION['usuario'].'</a>'
					?>
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
			<form action = "altempbanco.php" method = "POST" accept-charset = "utf-8" class = "form-login">
				<h2 class = "form-login-heading">Alteração de empresas</h2><br>
				<div class ="row">
					<div class="col-xs-10 col-sm-6 col-md-6 col-lg-6 col-xl-6">
						<input type = "text" id = "nome" name = "nome" class = "form-control" placeholder = "nome" required autofocus><br>
					</div>
				</div>
				<button type = "submit" class = "btn btn-lg btn-default btn-block"> Buscar </button>
				
				<br><br><p class = "text-center text-danger">
					<?php
						if(isset($_SESSION['erro'])){
						echo $_SESSION['erro'];
						unset($_SESSION['erro']);
						}
			
					?>
				</p>
				
				<p class = "text-center text-danger">
			<?php
				if(isset($_SESSION['erroemp'])){
					echo $_SESSION['erroemp'];
					unset($_SESSION['erroemp']);
				}
				if(isset($_SESSION['aceptemp'])){
					echo $_SESSION['aceptemp'];
					unset($_SESSION['aceptemp']);
				}
			
			?>
		</p>
				
				
			</form>
			
			<?php
				if(isset($_SESSION['existe'])){
					echo'<form action = "altempbanco2.php" method = "POST" accept-charset = "utf-8" class = "form-login">';
					echo'<div class ="row">';
					$busca = $_SESSION['existe'];
					include("conexao.php");
					$resultado = pg_query($bdcon,"SELECT * FROM empresa where rsocial like'".$busca."%'");
					while($aux2 = pg_fetch_assoc($resultado)){
						echo '<div class="col-xs-10 col-sm-6 col-md-6 col-lg-6 col-xl-6">
								<label class = "text-center"> '.$aux2["rsocial"].' </label><input type="radio" name="emp" id="emp" value="'.$aux2["cnpj"].'" class = "form-control" autofocus><br></label>&nbsp;&nbsp;&nbsp;&nbsp;
							</div>';
					}
					echo'</div>';
					unset($_SESSION['existe']);
					echo'<button type = "submit" class = "btn btn-lg btn-default btn-block"> Alterar</button>';
					echo'</form>';
				}
				if(isset($_SESSION['existe2'])){
					$busca = $_SESSION['existe2'];
					include("conexao.php");
					$resultado = pg_query($bdcon,"SELECT * from empresa where cnpj = '$busca'");
					$aux2 = pg_fetch_assoc($resultado);
					echo'<form action = "altempbanco3.php" method = "POST" accept-charset = "utf-8" class = "form-login">';
					echo'<div class ="row">
							<div class="col-xs-10 col-sm-4 col-md-4 col-lg-4 col-xl-4">
								<input type = "text" id = "nome" value = "'.$aux2["rsocial"].'" name = "nome" class = "form-control" placeholder = "nome" required autofocus><br>
							</div>
						
							<div class="col-xs-10 col-sm-4 col-md-4 col-lg-4 col-xl-4">
								<input type = "text" id = "fant" value = "'.$aux2["nomefant"].'" name = "fant" class = "form-control" placeholder = "nome fantasia" autofocus></br>
							</div>
							
					
							<div class="col-xs-10 col-sm-4 col-md-4 col-lg-4 col-xl-4">
								<input type = "text" id = "ie" value = "'.$aux2["ie"].'" name = "ie" class = "form-control" placeholder = "ie" autofocus></br>
							</div>
						</div>
						
						<div class ="row">
							<div class="col-xs-10 col-sm-4 col-md-4 col-lg-4 col-xl-4">
								<input type = "tel" id = "tel" value = "'.$aux2["telefone"].'" name = "tel" class = "form-control" placeholder = "telefone" required autofocus></br>
							</div>
							
							<div class="col-xs-10 col-sm-8 col-md-8 col-lg-8 col-xl-8">
								<input type = "mail" id = "email" value = "'.$aux2["email"].'" name = "email" class = "form-control" placeholder = "email" autofocus><br>
							</div>
						</div>
						
						<div class ="row">
							<div class="col-xs-10 col-sm-8 col-md-8 col-lg-8 col-xl-8">
								<input type = "text" id = "rua" value = "'.$aux2["rua"].'" name = "rua" class = "form-control" placeholder = "rua" required autofocus><br>
							</div>
							
				
							<div class="col-xs-10 col-sm-4 col-md-4 col-lg-4 col-xl-4">
								<input type = "text" id = "bairro" value = "'.$aux2["bairro"].'" name = "bairro" class = "form-control" placeholder = "bairro" required autofocus><br>
							</div>
						</div>
						
						<div class ="row">
							<div class="col-xs-10 col-sm-4 col-md-4 col-lg-4 col-xl-4">
								<input type = "text" id = "num" value = "'.$aux2["numero"].'" name = "num" class = "form-control" placeholder = "número" required autofocus><br>
							</div>
							
					
							<div class="col-xs-10 col-sm-4 col-md-4 col-lg-4 col-xl-4">
								<input type = "text" id = "compl" value = "'.$aux2["complemento"].'" name = "compl" class = "form-control" placeholder = "complemento" autofocus><br>
							</div>
					
							<div class="col-xs-10 col-sm-4 col-md-4 col-lg-4 col-xl-4">
								<input type = "text" id = "cep" value = "'.$aux2["cep"].'" name = "cep" class = "form-control" placeholder = "cep" autofocus><br>
							</div>
						</div>
						
						<div class ="row">
							<div class="col-xs-10 col-sm-6 col-md-6 col-lg-6 col-xl-6">
								<input type = "text" id = "cid" value = "'.$aux2["cidade"].'" name = "cid" class = "form-control" placeholder = "cidade" autofocus><br>
							</div>
							
						
							<div class="col-xs-10 col-sm-6 col-md-6 col-lg-6 col-xl-6">
								<input type = "text" id = "uf" value = "'.$aux2["uf"].'" name = "uf" class = "form-control" placeholder = "uf" autofocus><br>
							</div>
						</div>
					<button type = "submit" class = "btn btn-lg btn-default btn-block"> Alterar </button><br><br><br>
				
					
					</form>';
					
				}
			?>
		</div>
		
		<footer> <!-- Aqui e a area do footer -->
			<div class="container">
			<br><br>
				<div class ="row">
					<div class="hidden-xs hidden-sm col-md-12 col-lg-12 col-xl-12">	
						<br>Vikings Taberna<br> Rua Benjamin Constant 51-D<br>Chapecó-SC<br>Fone:(49) 3304-3456
					</div>		
				</div>
			</div>
		</footer>
		<script src = "http://code.jquery.com/jquery-latest.js"></script>
		<script src = "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		
	</body>
</html>
