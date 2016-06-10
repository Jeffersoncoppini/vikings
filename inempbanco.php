<?php

session_start();

$cnpj = $_POST["cnpj"];
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

$bdcon = pg_connect("dbname=Vikings port=5432 user=postgres password=jukajeffe") or die("erro de conexão");
$resultado = pg_query($bdcon,"INSERT INTO empresa(cnpj,rsocial,nomefant,ie,telefone,email,rua,bairro,numero,complemento,cep,cidade,uf) values('$cnpj','$nome','$fant','$ie','$tel','$email','$rua','$bairro','$num','$compl','$cep','$cid','$uf')");

foreach($atrac as $valor){
	$resultadob = pg_query($bdcon,"INSERT INTO evento_atracao(data,nomeatrac) values('$data','$valor')");
}

if($resultado){
	$_SESSION['okemp'] = "Empresa Cadastrada com sucesso!";
	header("Location:inemp.php");
}

else{
	$_SESSION['erroemp'] = "Verifique os dados digitados!";
	header("Location:inemp.php");
}
?>

