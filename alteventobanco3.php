<?php

session_start();

$nome = $_POST["nome"];
$hora = $_POST["hora"];
$data = $_POST["data"];
$valor = $_SESSION['existe2'];
unset($_SESSION['existe2']);
$bdcon = pg_connect("dbname=Vikings port=5432 user=postgres password=jukajeffe") or die("erro de conexão");
$resultado = pg_query($bdcon,"UPDATE evento SET dataevento = '$data', nomeevento = '$nome', hora = '$hora' where idevento = '$valor'");
if(!$resultado){
	$_SESSION['erroevento'] = "Erro na alteração!";
	header("Location:altevento.php");
}

else{
	$_SESSION['aceptevento'] = "Evento alterado!";
	header("Location:altevento.php");
	}
?>
