<?php

session_start();
$uploaddir = 'imagens/';
$imagem = $uploaddir . basename($_FILES['imagem']['name']);


if (!move_uploaded_file($_FILES['imagem']['tmp_name'], $imagem)) {
   header("Location:inprom.php");
} 


$nome = $_POST["nome"];
$datai = $_POST["datai"];
$dataf = $_POST["dataf"];
$desc = $_POST["descr"];
$precopromo = $_POST["precopromo"];
$prod = $_POST["prod"];

$bdcon = pg_connect("dbname=Vikings port=5432 user=postgres password=jukajeffe") or die("erro de conexão");
$resultado = pg_query($bdcon,"INSERT INTO promocao(nomepromo,datainicio,descri,precopromo,imagem,datafim) values('$nome','$datai','$desc','$precopromo','$imagem','$dataf')");

foreach($prod as $valor){
	$resultadob = pg_query($bdcon,"INSERT INTO promocao_produto(nomepromo,datainicio,codproduto) values('$nome','$datai','$valor')");
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
