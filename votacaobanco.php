
<?php

session_start();

$atracao = $_POST["atracao"];
$ip = $_SERVER['REMOTE_ADDR'];

$bdcon = pg_connect("dbname=Vikings port=5432 user=postgres password=jukajeffe") or die("erro de conexão");
$resultado = pg_query($bdcon,"SELECT atracao.qtvotos from atracao where atracao.idatracao = '$atracao'");
$aux = pg_fetch_assoc($resultado);
$aux2 = $aux["qtvotos"];
$aux2 = $aux2+1;
echo $aux2;
$resultadob = pg_query($bdcon,"UPDATE atracao SET qtvotos = '$aux2' where idatracao = '$atracao'");


if($resultadob){
	$_SESSION['okvoto'] = "Voto efetuado!";
	header("Location:votacao.php");
}

else{
	$_SESSION['errovoto'] = "Erro!";
	header("Location:votacao.php");
}
?>

