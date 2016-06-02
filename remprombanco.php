<?php

session_start();

$promo = $_POST["promo"];


$bdcon = pg_connect("dbname=Vikings port=5432 user=postgres password=jukajeffe") or die("erro de conexão");
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
