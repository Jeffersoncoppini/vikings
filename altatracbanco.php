<?php

session_start();
include("conexao.php");

$busca = $_POST["nome"];

$resultado = pg_query($bdcon,"SELECT * FROM atracao where nomeatracao like'".$busca."%'");

$aux = pg_affected_rows($resultado);
$vetor = pg_fetch_assoc($resultado);
if($aux == 0){
	
	$_SESSION['erro'] = "Nenhum atração encontrada";
	header("Location:altatrac.php");
}

else{
	$_SESSION['existe'] = $busca;
	header("Location:altatrac.php");
}
?>
