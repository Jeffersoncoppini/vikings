<?php

session_start();
include("conexao.php");
$prod = $_POST["prod"];

$resultado = pg_query($bdcon,"SELECT * from produto where codproduto = '$prod'");

$aux = pg_affected_rows($resultado);
$vetor = pg_fetch_assoc($resultado);
if($aux == 0){
	
	header("Location:altprod.php");
}

else{
	$_SESSION['existe2'] = $prod;
	header("Location:altprod.php");
	}
?>
