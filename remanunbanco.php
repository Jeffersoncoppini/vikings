<?php

session_start();

$anun = $_POST["anun"];


$bdcon = pg_connect("dbname=Vikings port=5432 user=postgres password=jukajeffe") or die("erro de conexão");

$resultado = pg_query($bdcon,"DELETE FROM anuncio where  codanuncio = '$anun'");

if($resultado){
	$_SESSION['okanun'] = "Anuncio Removido com sucesso!";
	header("Location:remanun.php");
}

else{
	$_SESSION['erroanun'] = "Impossivel remover o item!";
	header("Location:remanun.php");
}
?>
