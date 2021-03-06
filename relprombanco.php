<?php
define('FPDF_FONTPATH','font/');
require('fpdf/fpdf.php');
session_start();
include("conexao.php");
$prom = $_POST["prom"];
if($prom == "todosprom"){
	
	$resultado = pg_query($bdcon,"SELECT * from promocao");
	$aux = pg_affected_rows($resultado);
	if($aux == 0){
		$_SESSION['erro'] = "Erro ao gerar relatório!";
		//header("Location:relprod.php");
	}
	
	else{
		$pdf = new FPDF('P','cm','A4');
		$pdf->Open();
		$pdf->AddPage();
		$pdf->SetFont('Arial','',12);
		$pdf->Image('imagens/logo.png',15,2,5,5);
		$pdf->Cell(0,5,utf8_decode('RELATÓRIO DE PROMOÇÕES'),0,1,'F');
		$pdf->Cell(8,1,'Nome',1,0,'C');
		$pdf->Cell(3,1,utf8_decode('Data inicial'),1,0,'C');
		$pdf->Cell(3,1,utf8_decode('Data final'),1,0,'C');
		$pdf->Cell(3,1,utf8_decode('Preço'),1,1,'C');
		while($vetor = pg_fetch_assoc($resultado)){
			$pdf->Cell(8,1,utf8_decode($vetor['nomepromo']),1,0,'C');
			$pdf->Cell(3,1,utf8_decode($vetor['datainicio']),1,0,'C');
			$pdf->Cell(3,1,utf8_decode($vetor['datafim']),1,0,'C');
			$pdf->Cell(3,1,utf8_decode($vetor['precopromo']),1,1,'C');
		}
		$pdf->Output();
	}
}
?>
