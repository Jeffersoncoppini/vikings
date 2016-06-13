<?php

session_start();
$login = $_POST["login"];
$email = $_POST["email"];
$tel = $_POST["tel"];
$senha = $_POST["senha"];
$senha2 = $_POST["senha2"];

if($senha == $senha2){
	$bdcon = pg_connect("dbname=Vikings port=5432 user=postgres password=jukajeffe") or die("erro de conexão");
	$resultado = pg_query($bdcon,"INSERT INTO usuario(login,senha,telefone,email,adm) values('$login','$senha','$tel','$email',0)");

	if($resultado){
		$_SESSION['ok'] = "Usuário Cadastrado com sucesso!";
		header("Location:cadusu.php");
	}

	else{
		$_SESSION['erro'] = "Verifique os dados digitados!";
		header("Location:cadusu.php");
	}
}

else{
	$_SESSION['erro2'] = "Senhas são diferentes!";
	header("Location:cadusu.php");
}
?>
