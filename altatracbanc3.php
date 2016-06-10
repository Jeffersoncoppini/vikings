<?php

session_start();

$nome = $_POST["nome"];
$email = $_POST["email"];
$tel = $_POST["tel"];
$tipo = $_POST["tipo"];
$valor = $_SESSION['existe2'];
unset($_SESSION['existe2']);
echo $valor;
$bdcon = pg_connect("dbname=Vikings port=5432 user=postgres password=jukajeffe") or die("erro de conexão");
$resultado = pg_query($bdcon,"UPDATE atracao SET nomeatracao = '$nome', email = '$email', telefone = '$tel', tipo = '$tipo' where idatracao = '$valor'");
if(!$resultado){
	$_SESSION['erroaltprod'] = "Erro na alteração!";
	header("Location:altatrac.php");
}

else{
	$_SESSION['aceptaltprod'] = "Atração alterada!";
	header("Location:altatrac.php");
	}
?>
