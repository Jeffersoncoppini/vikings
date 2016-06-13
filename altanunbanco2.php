<?php

session_start();
$anun = $_POST["anun"];
$bdcon = pg_connect("dbname=Vikings port=5432 user=postgres password=jukajeffe") or die("erro de conexão");
$resultado = pg_query($bdcon,"SELECT * from anuncio where codanuncio = '$anun'");

$aux = pg_affected_rows($resultado);
$vetor = pg_fetch_assoc($resultado);
if($aux == 0){
	
	header("Location:altanun.php");
}

else{
	$_SESSION['existe2'] = $anun;
	header("Location:altanun.php");
	}
?>
