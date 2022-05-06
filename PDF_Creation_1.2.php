<?php
ob_start();
require('fpdf.php');
$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(40,10,'Ar',1,1,'C!');
$pdf->Output();
ob_end_flush();
?>

