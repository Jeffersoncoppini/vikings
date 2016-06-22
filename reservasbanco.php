<?php

session_start();
include("conexao.php");

$nome = $_POST["nome"];
$cpf = $_POST["cpf"];
$data = $_POST["data"];
$hora = $_POST["hora"];
$qt = $_POST["qtpessoas"];

$resultado = pg_query($bdcon,"INSERT INTO reserva(cpf,datar,nome,qtpessoas,hora) values('$cpf','$data','$nome','$qt','$hora')");

if($resultado){
	$_SESSION['ok'] = "Reserva efetuada!";
	header("Location:reservas.php");
}

else{
	$_SESSION['errores'] = "Verifique os dados digitados!";
	header("Location:reservas.php");
}
?>

