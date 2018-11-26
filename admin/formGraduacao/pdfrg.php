<?php
require('./fpdf/fpdf.php');

class PDF extends FPDF
{
// Page header
function Header()
{
    // Logo
    $this->Image('cabecalho.png',30,10,150);
    // Arial bold 15
    $this->SetFont('Arial','B',15);
    $this->Ln(20);
}
}

$nome = @$_POST['nome'];
$matricula = @$_POST['matricula'];
$destinatario = @$_POST['destinatario'];
$nome_destinatario = @$_POST['nome_destinatario'];
$requerimento = @$_POST['requerimento'];

// Instanciation of inherited class
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','',14);
$pdf->SetXY(30,70);
$pdf->SetMargins(15,15,15);
$pdf->MultiCell(190,10,utf8_decode("Senhor(a) $destinatario, $nome_destinatario .\n"),'C');
$pdf->MultiCell(0,10,utf8_decode("$nome, matrícula $matricula, aluno(a) vinculado(a) a esta universidade no curso de Medicina, vem requerer $requerimento"),'C');
$pdf->SetXY(90,240);
$pdf->Cell(0,0,utf8_decode("Caicó/RN,____de__________________de______"));
$pdf->SetXY(40,260);
$pdf->MultiCell(0,8,"__________________________________________________",'C');
$pdf->Cell(0,5,utf8_decode("$nome"),0,1,'C');

$pdf->Output();
?>

