<?php

session_start();
include("conexao.php");

$busca = $_POST["nome"];

$resultado = pg_query($bdcon,"SELECT * FROM produto where nome like'".$busca."%'");

$aux = pg_affected_rows($resultado);
$vetor = pg_fetch_assoc($resultado);
if($aux == 0){
	
	$_SESSION['erro'] = "Nenhum produto encontrado";
	header("Location:altprod.php");
}

else{
	$_SESSION['existe'] = $busca;
	header("Location:altprod.php");
	}
?>
