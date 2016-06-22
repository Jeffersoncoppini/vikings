<?php

session_start();
include("conexao.php");
$anun = $_POST["anun"];

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
