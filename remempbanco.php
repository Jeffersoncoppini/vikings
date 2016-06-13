<?php

session_start();

$emp = $_POST["emp"];


$bdcon = pg_connect("dbname=Vikings port=5432 user=postgres password=jukajeffe") or die("erro de conexão");
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
