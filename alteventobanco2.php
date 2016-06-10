<?php

session_start();
$evento = $_POST["evento"];
$bdcon = pg_connect("dbname=Vikings port=5432 user=postgres password=jukajeffe") or die("erro de conexão");
$resultado = pg_query($bdcon,"SELECT * from evento where idevento = '$evento'");

$aux = pg_affected_rows($resultado);
$vetor = pg_fetch_assoc($resultado);
if($aux == 0){
	
	header("Location:altevento.php");
}

else{
	$_SESSION['existe2'] = $evento;
	header("Location:altevento.php");
	}
?>
