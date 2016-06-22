<?php

session_start();
include("conexao.php");

$emp = $_POST["emp"];

$resultado = pg_query($bdcon,"SELECT * from empresa where cnpj = '$emp'");

$aux = pg_affected_rows($resultado);
$vetor = pg_fetch_assoc($resultado);
if($aux == 0){
	
	header("Location:altemp.php");
}

else{
	$_SESSION['existe2'] = $emp;
	header("Location:altemp.php");
	}
?>
