
<?php

session_start();

$desc = $_POST["desc"];
$emp = $_POST["emp"];


$bdcon = pg_connect("dbname=Vikings port=5432 user=postgres password=jukajeffe") or die("erro de conexão");
$resultado = pg_query($bdcon,"INSERT INTO anuncio(descricao,cnpj) values('$desc','$emp')");


if($resultado){
	$_SESSION['okanuncio'] = "Anuncio Cadastrado com sucesso!";
	header("Location:inanun.php");
}

else{
	$_SESSION['erroanuncio'] = "Verifique os dados digitados!";
	header("Location:inanun.php");
}
?>

