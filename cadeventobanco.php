
<?php


$uploaddir = 'imagens/';
$imagem = $uploaddir . basename($_FILES['arquivo']['name']);


if (!move_uploaded_file($_FILES['arquivo']['tmp_name'], $imagem)) {
   header("Location:cadevento.php");
} 

session_start();

$nome = $_POST["nome"];
$hora = $_POST["hora"];
$data = $_POST["data"];
$atrac = $_POST["atrac"];

$bdcon = pg_connect("dbname=Vikings port=5432 user=postgres password=jukajeffe") or die("erro de conexão");
$resultado = pg_query($bdcon,"INSERT INTO evento(dataevento,nomeevento,imagem,hora,pgini) values('$data','$nome','$imagem','$hora',0)");
$resultadob = pg_query($bdcon,"SELECT max(idevento) FROM evento");
$aux = pg_fetch_assoc($resultadob);
$aux2 = $aux["max"];


foreach($atrac as $valor){
	$resultadob = pg_query($bdcon,"INSERT INTO evento_atracao(idevento,idatracao) values('$aux2','$valor')");
}

if($resultado){
	$_SESSION['okevento'] = "Evento Cadastrado com sucesso!";
	header("Location:cadevento.php");
}

else{
	$_SESSION['errocadevento'] = "Verifique os dados digitados!";
	header("Location:cadevento.php");
}
?>

