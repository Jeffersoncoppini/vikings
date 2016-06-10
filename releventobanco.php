<?php
define('FPDF_FONTPATH','font/');
require('fpdf/fpdf.php');
session_start();
$eventos = $_POST["eventos"];
if($eventos == "todoseventos"){
	$bdcon = pg_connect("dbname=Vikings port=5432 user=postgres password=jukajeffe") or die("erro de conexão");
	$resultado = pg_query($bdcon,"SELECT * from evento");
	$aux = pg_affected_rows($resultado);
	if($aux == 0){
		$_SESSION['erro'] = "Erro ao gerar relatório!";
		header("Location:relevento.php");
	}
	
	else{
		$pdf = new FPDF('P','cm','A4');
		$pdf->Open();
		$pdf->AddPage();
		$pdf->SetFont('Arial','',12);
		$pdf->Cell(0,5,utf8_decode('RELATÓRIO DE EVENTOS'),0,1,'F');
		$pdf->Cell(5,1,'Nome',1,0,'C');
		$pdf->Cell(5,1,'Data',1,0,'C');
		$pdf->Cell(5,1,'HORA',1,1,'C');
		
		while($vetor = pg_fetch_assoc($resultado)){
			$pdf->Cell(5,1,utf8_decode($vetor['nomeevento']),1,0,'C');
			$pdf->Cell(5,1,utf8_decode($vetor['dataevento']),1,0,'C');
			$pdf->Cell(5,1,utf8_decode($vetor['hora']),1,1,'C');
		}
		$pdf->Output();	
		$_SESSION['existe2'] = "Relatório gerado com sucesso!";
	}
}
?>
