<?php

session_start();

$atrac = $_POST["atrac"];


$bdcon = pg_connect("dbname=Vikings port=5432 user=postgres password=jukajeffe") or die("erro de conexão");
$resultado = pg_query($bdcon,"DELETE FROM evento_atracao where idatracao = '$atrac'");
$resultadob = pg_query($bdcon,"DELETE FROM atracao where idatracao = '$atrac'");

if($resultado){
	$_SESSION['okatrac'] = "Atração Removida com sucesso!";
	header("Location:rematrac.php");
}

else{
	$_SESSION['erroatrac'] = "Impossivel remover o item!";
	header("Location:rematrac.php");
}
?>
