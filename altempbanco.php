<?php

session_start();
include("conexao.php");

$busca = $_POST["nome"];

$resultado = pg_query($bdcon,"SELECT * FROM empresa where rsocial like'".$busca."%'");

$aux = pg_affected_rows($resultado);
$vetor = pg_fetch_assoc($resultado);
if($aux == 0){
	
	$_SESSION['erro'] = "Nenhuma empresa encontrada";
	header("Location:altemp.php");
}

else{
	$_SESSION['existe'] = $busca;
	header("Location:altemp.php");
	}
?>
