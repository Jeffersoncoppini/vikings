<?php

session_start();
$nome = $_POST["nome"];
$email = $_POST["email"];
$tel = $_POST["tel"];
$tipo = $_POST["tipo"];


$bdcon = pg_connect("dbname=Vikings port=5432 user=postgres password=jukajeffe") or die("erro de conexão");
$resultado = pg_query($bdcon,"INSERT INTO atracao(nomeatracao,email,telefone,tipo) values('$nome','$email','$tel','$tipo')");
if($resultado){
	$_SESSION['okatrac'] = "Atração Cadastrada com sucesso!";
	header("Location:cadatrac.php");
}

else{
	$_SESSION['errocadatrac'] = "Verifique os dados digitados!";
	header("Location:cadatrac.php");
}
?>
