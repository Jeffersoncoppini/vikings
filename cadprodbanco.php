<?php

session_start();
$nome = $_POST["nome"];
$desc = $_POST["desc"];
$un = $_POST["un"];
$preco = $_POST["preco"];


$bdcon = pg_connect("dbname=Vikings port=5432 user=postgres password=jukajeffe") or die("erro de conexão");
$resultado = pg_query($bdcon,"INSERT INTO produto(nome,descricao,unidade,preco) values('$nome','$desc','$un','$preco')");

if(resultado){
	$_SESSION['ok'] = "Produto Cadastrado com sucesso!";
	header("Location:cadprod.php");
}

else{
	$_SESSION['errocad'] = "Verifique os dados digitados!";
	header("Location:cadprod.php");
}
?>
