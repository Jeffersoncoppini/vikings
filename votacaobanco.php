
<?php

session_start();
include("conexao.php");

$atracao = $_POST["atracao"];

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

