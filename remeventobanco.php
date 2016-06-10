<?php

session_start();

$evento = $_POST["evento"];


$bdcon = pg_connect("dbname=Vikings port=5432 user=postgres password=jukajeffe") or die("erro de conexão");
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
