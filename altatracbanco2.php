<?php

session_start();
$atrac = $_POST["atrac"];
$bdcon = pg_connect("dbname=Vikings port=5432 user=postgres password=jukajeffe") or die("erro de conexão");
$resultado = pg_query($bdcon,"SELECT * from atracao where nomeatrac = '$atrac'");

$aux = pg_affected_rows($resultado);
$vetor = pg_fetch_assoc($resultado);
if($aux == 0){
	
	header("Location:altatrac.php");
}

else{
	$_SESSION['existe2'] = $atrac;
	header("Location:altatrac.php");
	}
?>
