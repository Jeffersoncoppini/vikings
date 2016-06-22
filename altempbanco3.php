<?php

session_start();
include("conexao.php");

$nome = $_POST["nome"];
$fant = $_POST["fant"];
$ie = $_POST["ie"];
$tel = $_POST["tel"];
$email = $_POST["email"];
$rua = $_POST["rua"];
$bairro = $_POST["bairro"];
$num = $_POST["num"];
$compl = $_POST["compl"];
$cep = $_POST["cep"];
$cid = $_POST["cid"];
$uf = $_POST["uf"];
$valor = $_SESSION['existe2'];
unset($_SESSION['existe2']);

$resultado = pg_query($bdcon,"UPDATE empresa SET rsocial = '$nome', nomefant = '$fant', ie = '$ie', telefone = '$tel', email = '$email', rua = '$rua', bairro = '$bairro',numero = '$num' ,complemento = '$compl',cep = '$cep',cidade = '$cid',uf = '$uf' where cnpj = '$valor'");
if(!$resultado){
	$_SESSION['erroemp'] = "Erro na alteração!";
	header("Location:altemp.php");
}

else{
	$_SESSION['aceptemp'] = "Empresa alterada!";
	header("Location:altemp.php");
	}
?>
