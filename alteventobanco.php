<?php

session_start();
include("conexao.php");

$busca = $_POST["nome"];

$resultado = pg_query($bdcon,"SELECT * FROM evento where nomeevento like'".$busca."%'");

$aux = pg_affected_rows($resultado);
$vetor = pg_fetch_assoc($resultado);
if($aux == 0){
	
	$_SESSION['erro'] = "Nenhum evento encontrado";
	header("Location:altevento.php");
}

else{
	$_SESSION['existe'] = $busca;
	header("Location:altevento.php");
	}
?>
