<?php

session_start();
include("conexao.php");
$evento = $_POST["evento"];

$resultado = pg_query($bdcon,"SELECT * from evento where idevento = '$evento'");

$aux = pg_affected_rows($resultado);
$vetor = pg_fetch_assoc($resultado);
if($aux == 0){
	
	header("Location:altevento.php");
}

else{
	$_SESSION['existe2'] = $evento;
	header("Location:altevento.php");
	}
?>
