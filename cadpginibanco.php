<?php

session_start();
include("conexao.php");

$promo = $_POST["promo"];

$resultado = pg_query($bdcon,"UPDATE promocao SET pgini = 1 where nomepromo = '$promo'");
$resultado = pg_query($bdcon,"UPDATE promocao SET pgini = 0 where nomepromo != '$promo'");

if(!$resultado){
	$_SESSION['erro'] = "Erro";
	header("Location:altprod.php");
}

else{
	header("Location:cadpgini2.php");
	}
?>
