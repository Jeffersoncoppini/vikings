<?php
define('FPDF_FONTPATH','font/');
require('fpdf/fpdf.php');
session_start();
$emp = $_POST["emp"];
if($emp == "todosemp"){
	$bdcon = pg_connect("dbname=Vikings port=5432 user=postgres password=jukajeffe") or die("erro de conexão");
	$resultado = pg_query($bdcon,"SELECT * from empresa");
	$aux = pg_affected_rows($resultado);
	if($aux == 0){
		$_SESSION['erro'] = "Erro ao gerar relatório!";
		header("Location:relemp.php");
	}
	
	else{
		$pdf = new FPDF('P','cm','A4');
		$pdf->Open();
		$pdf->AddPage();
		$pdf->SetFont('Arial','',12);
		$pdf->Image('imagens/logo.png',15,2,5,5);
		$pdf->Cell(0,5,utf8_decode('RELATÓRIO DE EMPRESAS'),0,1,'F');
		$pdf->Cell(6,1,'Nome',1,0,'C');
		$pdf->Cell(6,1,'Nome Fantasia',1,0,'C');
		$pdf->Cell(6,1,'CNPJ',1,1,'C');
		
		while($vetor = pg_fetch_assoc($resultado)){
			$pdf->Cell(6,1,utf8_decode($vetor['rsocial']),1,0,'C');
			$pdf->Cell(6,1,utf8_decode($vetor['nomefant']),1,0,'C');
			$pdf->Cell(6,1,utf8_decode($vetor['cnpj']),1,1,'C');
		}
		$pdf->Output();
	}
}
?>
