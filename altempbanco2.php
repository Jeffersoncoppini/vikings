<?php

session_start();
$emp = $_POST["emp"];
$bdcon = pg_connect("dbname=Vikings port=5432 user=postgres password=jukajeffe") or die("erro de conexão");
$resultado = pg_query($bdcon,"SELECT * from empresa where cnpj = '$emp'");

$aux = pg_affected_rows($resultado);
$vetor = pg_fetch_assoc($resultado);
if($aux == 0){
	
	header("Location:altemp.php");
}

else{
	$_SESSION['existe2'] = $emp;
	header("Location:altemp.php");
	}
?>
