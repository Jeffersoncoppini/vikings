<?php

session_start();
include("conexao.php");

$anun = $_POST["anun"];


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
