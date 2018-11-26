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
$modulo = @$_POST['modulo'];
$coordenador_modulo = @$_POST['coordenador_modulo'];
$data1 = @$_POST['data1'];
$data2 = @$_POST['data2'];
$dataf1 = date('d/m/Y', strtotime($data1));
$dataf2 = date('d/m/Y', strtotime($data2));
$evento = @$_POST['evento'];
$cidade = @$_POST['cidade'];
$estado = @$_POST['estado'];
$data3 = @$_POST['data3'];
$data4 = @$_POST['data4'];
$dataf3 = date('d/m/Y', strtotime($data3));
$dataf4 = date('d/m/Y', strtotime($data4));

// Instanciation of inherited class
//addForm('FORM03', 'RADUACAO', )
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','',14);
$pdf->SetXY(30,70);
$pdf->SetMargins(15,15,15);
$pdf->MultiCell(190,10,utf8_decode("Senhor(a) Coordenador(a), $coordenador_modulo.\n"),'C');

$pdf->MultiCell(0,10,utf8_decode("$nome, matrícula $matricula, aluno(a) vinculado(a) a esta universidade ".
        "no curso de Medicina, vem requerer execução de exercícios domiciliares no módulo de $modulo, ".
        "de $dataf1 a $dataf2 em virtude de participação no evento $evento, a ser realizado em $cidade/$estado, ".
        "de $dataf3 a $dataf4, conforme comprovante de inscrição anexo.\n"),'C');
$pdf->MultiCell(0,10,utf8_decode("           Nestes termos, pede deferimento."));
$pdf->SetXY(90,240);
$pdf->Cell(0,0,utf8_decode("Caicó/RN,____de__________________de______"));
$pdf->SetXY(40,260);
$pdf->MultiCell(0,8,"__________________________________________________",'C');
$pdf->Cell(0,5,utf8_decode("$nome"),0,1,'C');

$pdf->Output();
?>

