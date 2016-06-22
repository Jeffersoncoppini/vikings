<?php

session_start();
include("conexao.php");

$evento = $_POST["evento"];

$resultado = pg_query($bdcon,"DELETE FROM evento_atracao where idevento = '$evento'");
$resultadob = pg_query($bdcon,"DELETE FROM evento where idevento = '$evento'");

if($resultado){
	$_SESSION['okevento'] = "Evento removido com sucesso!";
	header("Location:remevento.php");
}

else{
	$_SESSION['erroevento'] = "Impossivel remover o item!";
	header("Location:remevento.php");
}
?>
