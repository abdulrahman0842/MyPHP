<?php
require('./fpdf.php');
$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16,'Center');
$pdf->Cell(10,20,'Professor',10,0,'C');
$pdf->Cell(0,10,'This is a sample pdf.',10,0,'C');
$pdf->Cell(10,20,'Hello world.',10,0,'C');

$pdf->Output();
?>

