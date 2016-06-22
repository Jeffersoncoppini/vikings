<?php

session_start();
include("conexao.php");
$login = $_SESSION['usuario'];
$tel = $_POST["tel"];
$email = $_POST["email"];
$senha = $_POST["senha"];
$senha2 = $_POST["senha2"];

if($senha == $senha2){
	$resultado = pg_query($bdcon,"UPDATE usuario SET senha = '$senha', telefone = '$tel', email = '$email' where login = '$login'");

	if(!$resultado){
		$_SESSION['erro'] = "Erro na alteração!";
		header("Location:altperfil.php");
	}

	else{
		$_SESSION['acept'] = "Usuário alterado!";
		header("Location:altperfil.php");
	}
}

else{
	$_SESSION['erro2'] = "Senhas são diferentes!";
	header("Location:altperfil.php");
}
?>
