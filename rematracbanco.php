<?php

session_start();
include("conexao.php");

$atrac = $_POST["atrac"];

$resultado = pg_query($bdcon,"DELETE FROM evento_atracao where idatracao = '$atrac'");
$resultadob = pg_query($bdcon,"DELETE FROM atracao where idatracao = '$atrac'");

if($resultado){
	$_SESSION['okatrac'] = "Atração Removida com sucesso!";
	header("Location:rematrac.php");
}

else{
	$_SESSION['erroatrac'] = "Impossivel remover o item!";
	header("Location:rematrac.php");
}
?>
