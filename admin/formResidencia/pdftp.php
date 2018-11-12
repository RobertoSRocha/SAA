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
$area_atuacao = @$_POST['area_atuacao'];
$matricula = @$_POST['matricula'];
$justificativa = @$_POST['justificativa'];
$data1 = @$_POST['data1'];
$data2 = @$_POST['data2'];
$dataf1 = date('d/m/Y', strtotime($data1));
$dataf2 = date('d/m/Y', strtotime($data2));

// Instanciation of inherited class
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','',14);
$pdf->SetXY(30,70);
$pdf->SetMargins(15,15,15);
$pdf->MultiCell(0,10,utf8_decode("Eu, $nome, regularmente matriculado(a) no Programa de Residência ".
        "Multiprofissional em $area_atuacao, sob a matrícula $matricula, solicito realizar troca do plantão".
        " do dia $dataf1, onde estarei de serviço conforme escala, para o dia $dataf2, pelos motivos $justificativa(motivos).\n"),'C');
$pdf->SetXY(90,230);
$pdf->Cell(0,0,utf8_decode("Caicó/RN,____de__________________de______"));
$pdf->SetXY(45,250);
$pdf->MultiCell(0,8,"__________________________________________________",'C');
$pdf->Cell(0,5,utf8_decode("Assinatura do residente"),0,1,'C');

$pdf->Output();
?>
