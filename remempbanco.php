<?php

session_start();
include("conexao.php");

$emp = $_POST["emp"];

$resultado = pg_query($bdcon,"DELETE FROM empresa where cnpj = '$emp'");

if($resultado){
	$_SESSION['okemp'] = "Empresa Removida com sucesso!";
	header("Location:rememp.php");
}

else{
	$_SESSION['erroemp'] = "Erro! Empresa vinculada a anuncio!";
	header("Location:rememp.php");
}
?>
