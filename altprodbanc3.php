<?php

session_start();
include("conexao.php");

$nome = $_POST["nome"];
$desc = $_POST["desc"];
$un = $_POST["un"];
$preco = $_POST["preco"];
$tipo = $_POST["tipo"];
$valor = $_SESSION['existe2'];
unset($_SESSION['existe2']);


$resultado = pg_query($bdcon,"UPDATE produto SET nome = '$nome', descricao = '$desc', un = '$un', preco = '$preco', tipo = '$tipo' where codproduto = '$valor'");

if(!$resultado){
	$_SESSION['erroaltprod'] = "Erro na alteração!";
	header("Location:altprod.php");
}

else{
	$_SESSION['aceptaltprod'] = "Produdo alterado!";
	header("Location:altprod.php");
	}
?>
