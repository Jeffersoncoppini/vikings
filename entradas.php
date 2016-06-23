<?php

session_start();
include("conexao.php");

$usuario = $_POST["usuario"];
$senha = $_POST["senha"];

$resultado = pg_query($bdcon,"SELECT usuario.login,usuario.senha,usuario.adm FROM usuario WHERE usuario.login = '$usuario' AND usuario.senha = '$senha'");

$aux = pg_affected_rows($resultado);
$vetor = pg_fetch_assoc($resultado);
if($aux == 0){
	$_SESSION['loginErro'] = "Usuário ou senha Inválido";
	header("Location:adm.php");
}

else{
	$_SESSION['usuario'] = $vetor['login'];
	$_SESSION['senha'] = $vetor['senha'];
	$_SESSION['adm'] = $vetor['adm'];
	if($vetor["adm"] == 1){
		header("Location: menuadm.php");
	}
	else{
		header("Location: menupromoter.php");
	}
}

pg_close($bdcon);

?>
