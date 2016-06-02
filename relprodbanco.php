<?php
define('FPDF_FONTPATH','font/');
require('fpdf/fpdf.php');
session_start();
$prod = $_POST["prod"];
if($prod == "todosprod"){
	$bdcon = pg_connect("dbname=Vikings port=5432 user=postgres password=jukajeffe") or die("erro de conexão");
	$resultado = pg_query($bdcon,"SELECT * from produto");
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
		$pdf->Cell(0,5,utf8_decode('RELATÓRIO DE PRODUTOS'),0,1,'F');
		$pdf->Cell(3,1,utf8_decode('código'),1,0,'C');
		$pdf->Cell(3,1,'nome',1,0,'C');
		$pdf->Cell(3,1,utf8_decode('descrição'),1,0,'C');
		$pdf->Cell(3,1,'unidade',1,0,'C');
		$pdf->Cell(3,1,utf8_decode('preço'),1,1,'C');
		while($vetor = pg_fetch_assoc($resultado)){
			$pdf->Cell(3,1,utf8_decode($vetor['codproduto']),1,0,'C');
			$pdf->Cell(3,1,utf8_decode($vetor['nomeprod']),1,0,'C');
			$pdf->Cell(3,1,utf8_decode($vetor['descri']),1,0,'C');
			$pdf->Cell(3,1,utf8_decode($vetor['un']),1,0,'C');
			$pdf->Cell(3,1,utf8_decode($vetor['preco']),1,1,'C');
		}
		$pdf->Output();	
		$_SESSION['existe2'] = "Relatório gerado com sucesso!";
	}
}
?>
