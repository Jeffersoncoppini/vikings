<?php

session_start();
$busca = $_POST["nome"];
$bdcon = pg_connect("dbname=Vikings port=5432 user=postgres password=jukajeffe") or die("erro de conexão");
$resultado = pg_query($bdcon,"SELECT * FROM produto where nome like'".$busca."%'");

$aux = pg_affected_rows($resultado);
$vetor = pg_fetch_assoc($resultado);
if($aux == 0){
	
	$_SESSION['erro'] = "Nenhum produto encontrado";
	header("Location:altprod.php");
}

else{
	$_SESSION['existe'] = $busca;
	header("Location:altprod.php");
	}
?>
