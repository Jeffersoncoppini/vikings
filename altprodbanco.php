<?php
$busca = $_POST["bnome"];
$bdcon = pg_connect("dbname=Vikings port=5432 user=postgres password=jukajeffe") or die("erro de conexão");
$resultado = pg_query($bdcon,"SELECT * FROM produto where nomeprod like'".$busca."%'");
$resp = pg_fetch_assoc($resultado);
echo $resp["nomeprod"];
?>
