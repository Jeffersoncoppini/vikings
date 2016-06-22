<?php

session_start();
include("conexao.php");
$uploaddir = 'imagens/';
$imagem = $uploaddir . basename($_FILES['imagem']['name']);


if (!move_uploaded_file($_FILES['imagem']['tmp_name'], $imagem)) {
   header("Location:inprom.php");
} 


$nome = $_POST["nome"];
$datai = $_POST["datai"];
$dataf = $_POST["dataf"];
$desc = $_POST["des"];
$precopromo = $_POST["precopromo"];
$prod = $_POST["prod"];


$resultado = pg_query($bdcon,"INSERT INTO promocao(nomepromo,datainicio,descricao,precopromo,imagem,datafim,pgini) values('$nome','$datai','$desc','$precopromo','$imagem','$dataf', 0)");

foreach($prod as $valor){
	$resultadob = pg_query($bdcon,"INSERT INTO promocao_produto(nomepromo,codproduto) values('$nome','$valor')");
}

if($resultado){
	$_SESSION['okprom'] = "Promoção Cadastrada com sucesso!";
	header("Location:inprom.php");
}

else{
	$_SESSION['erroprom'] = "Verifique os dados digitados!";
	header("Location:inprom.php");
}
?>
