<?php
define('FPDF_FONTPATH','font/');
require('fpdf/fpdf.php');
session_start();
$prom = $_POST["prom"];
if($prom == "todosprom"){
	$bdcon = pg_connect("dbname=Vikings port=5432 user=postgres password=jukajeffe") or die("erro de conexão");
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
		$pdf->Cell(0,5,utf8_decode('RELATÓRIO DE PROMOÇÕES'),0,1,'F');
		$pdf->Cell(3,1,'nome',1,0,'C');
		$pdf->Cell(3,1,utf8_decode('descrição'),1,0,'C');
		$pdf->Cell(3,1,utf8_decode('data inicial'),1,0,'C');
		$pdf->Cell(3,1,utf8_decode('data final'),1,0,'C');
		$pdf->Cell(3,1,utf8_decode('preço'),1,1,'C');
		while($vetor = pg_fetch_assoc($resultado)){
			$pdf->Cell(3,1,utf8_decode($vetor['nomepromo']),1,0,'C');
			$pdf->Cell(3,1,utf8_decode($vetor['descri']),1,0,'C');
			$pdf->Cell(3,1,utf8_decode($vetor['datainicio']),1,0,'C');
			$pdf->Cell(3,1,utf8_decode($vetor['datafim']),1,0,'C');
			$pdf->Cell(3,1,utf8_decode($vetor['precopromo']),1,1,'C');
		}
		$pdf->Output();
	}
}
?>
