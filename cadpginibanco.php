<?php

session_start();

$promo = $_POST["promo"];
$bdcon = pg_connect("dbname=Vikings port=5432 user=postgres password=jukajeffe") or die("erro de conexão");
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
