<?php

session_start();
include("conexao.php");

$desc = $_POST["desc"];
$valor = $_SESSION['existe2'];
unset($_SESSION['existe2']);

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
