<?php

session_start();

$desc = $_POST["desc"];
$valor = $_SESSION['existe2'];
unset($_SESSION['existe2']);
$bdcon = pg_connect("dbname=Vikings port=5432 user=postgres password=jukajeffe") or die("erro de conexão");
$resultado = pg_query($bdcon,"UPDATE anuncio SET descricao = '$desc' where codanuncio = '$valor'");
if(!$resultado){
	$_SESSION['erroanun'] = "Erro na alteração!";
	header("Location:altanun.php");
}

else{
	$_SESSION['aceptanun'] = "Anuncio alterado!";
	header("Location:altanun.php");
	}
?>
