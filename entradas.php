<?php

session_start();
$usuario = $_POST["usuario"];
$senha = $_POST["senha"];

$bdcon = pg_connect("dbname=Vikings port=5432 user=postgres password=jukajeffe") or die("erro de conexão");
$resultado = pg_query($bdcon,"SELECT usuario.login,usuario.senha,usuario.nivel FROM usuario WHERE usuario.login = '$usuario' AND usuario.senha = '$senha'");

$aux = pg_affected_rows($resultado);
$vetor = pg_fetch_assoc($resultado);
if($aux == 0){
	$_SESSION['loginErro'] = "Usuário ou senha Inválido";
	header("Location:adm.php");
}

else{
	$_SESSION['usuario'] = $vetor['login'];
	$_SESSION['senha'] = $vetor['senha'];
	if($vetor["nivel"] == 1){
		header("Location: menuadm.php");
	}
	else{
		header("Location: menupromoter.php");
	}
}

pg_close($bdcon);

?>
