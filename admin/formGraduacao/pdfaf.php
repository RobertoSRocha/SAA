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
$evento = @$_POST['evento'];
$titulo = @$_POST['titulo_trabalho'];
$cidade = @$_POST['cidade'];
$estado = @$_POST['estado'];
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
$pdf->MultiCell(190,10,utf8_decode("Senhor(a) Coordenador(a),\n"),'C');

$pdf->MultiCell(0,10,utf8_decode("$nome, matrícula $matricula, aluno(a) vinculado(a) a esta universidade ".
        "no curso de Medicina, vem requerer auxílio financeiro em virtude de participação como ".
        "apresentador(a) do evento $evento, conforme aprovação de trabalho científico de título $titulo.\n"),'C');
$pdf->MultiCell(0,10, utf8_decode("O evento será realizado em $cidade/$estado, de $dataf1  a  $dataf2 ."));
$pdf->MultiCell(0,10,utf8_decode("Nestes termos, pede deferimento."));
$pdf->SetXY(90,230);
$pdf->Cell(0,0,utf8_decode("Caicó/RN,____de__________________de______"));
$pdf->SetXY(45,250);
$pdf->MultiCell(0,8,"__________________________________________________",'C');
$pdf->Cell(0,5,utf8_decode("$nome"),0,1,'C');

$pdf->Output();
?>
