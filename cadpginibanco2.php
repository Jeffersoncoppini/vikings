<?php

session_start();

$evento = $_POST["evento"];
$bdcon = pg_connect("dbname=Vikings port=5432 user=postgres password=jukajeffe") or die("erro de conexão");
$resultado = pg_query($bdcon,"UPDATE evento SET pgini = 1 where idevento = '$evento'");
$resultado = pg_query($bdcon,"UPDATE evento SET pgini = 0 where idevento != '$evento'");

if(!$resultado){
	$_SESSION['erro'] = "Erro";
	header("Location:cadpgini2.php");
}

else{
	$_SESSION['ok'] = "Alterado!";
	header("Location:cadpgini2.php");
	
	}
?>
