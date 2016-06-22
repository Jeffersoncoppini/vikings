<?php

session_start();
include("conexao.php");

$nome = $_POST["nome"];
$desc = $_POST["desc"];
$un = $_POST["un"];
$preco = $_POST["preco"];
$tipo = $_POST["tipo"];


$resultado = pg_query($bdcon,"INSERT INTO produto(nome,descricao,un,preco,tipo) values('$nome','$desc','$un','$preco','$tipo')");

if($resultado){
	$_SESSION['ok'] = "Produto Cadastrado com sucesso!";
	header("Location:cadprod.php");
}

else{
	$_SESSION['errocad'] = "Verifique os dados digitados!";
	header("Location:cadprod.php");
}
?>
