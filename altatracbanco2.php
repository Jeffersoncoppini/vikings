<?php

session_start();
include("conexao.php");

$atrac = $_POST["atrac"];

$resultado = pg_query($bdcon,"SELECT * from atracao where idatracao = '$atrac'");

$aux = pg_affected_rows($resultado);
$vetor = pg_fetch_assoc($resultado);
if($aux == 0){
	
	header("Location:altatrac.php");
}

else{
	$_SESSION['existe2'] = $atrac;
	header("Location:altatrac.php");
	}
?>
