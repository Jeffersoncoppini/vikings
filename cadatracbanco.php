<?php

session_start();
include("conexao.php");

$nome = $_POST["nome"];
$email = $_POST["email"];
$tel = $_POST["tel"];
$tipo = $_POST["tipo"];


$resultado = pg_query($bdcon,"INSERT INTO atracao(nomeatracao,email,telefone,tipo) values('$nome','$email','$tel','$tipo')");
if($resultado){
	$_SESSION['okatrac'] = "Atração Cadastrada com sucesso!";
	header("Location:cadatrac.php");
}

else{
	$_SESSION['errocadatrac'] = "Verifique os dados digitados!";
	header("Location:cadatrac.php");
}
?>
