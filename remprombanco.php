<?php

session_start();
include("conexao.php");

$promo = $_POST["promo"];

$resultado = pg_query($bdcon,"DELETE FROM promocao_produto where nomepromo = '$promo'");
$resultadob = pg_query($bdcon,"DELETE FROM promocao where nomepromo = '$promo'");

if($resultado){
	$_SESSION['okprom'] = "Promoção Removida com sucesso!";
	header("Location:remprom.php");
}

else{
	$_SESSION['erroprom'] = "Impossivel remover o item!";
	header("Location:remprom.php");
}
?>
