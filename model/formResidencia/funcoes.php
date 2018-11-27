<?php
    require_once('../../config.php');
    require_once PDF;
    require_once(DBAPI);
    
    $formulario = null;
    
   class PDF extends FPDF
    {
    // Page header
    function Header()
    {
        // Logo
        $this->Image('../../dist/img/cabecalho2.png',30,10,150,'C');
        // Arial bold 15
        $this->SetFont('Arial','B',15);
        $this->Ln(20);
    }
    }
    
    //função de adicionar as info do formulario no banco
    function add_form($tipo_req, $tipo_form, $usuario_matricula){
        saveForm($tipo_req, $tipo_form, $usuario_matricula);
        //header('location: index.php');
    }
    
    function form01(){
        if(!empty($_POST['nome']) && !empty($_POST['area_atuacao']) && !empty($_POST['matricula']) && !empty($_POST['motivo']) && !empty($_POST['data1']) && !empty($_POST['data2']) && !empty($_POST['radio'])){
            $nome = @$_POST['nome'];
            $area_atuacao = @$_POST['area_atuacao'];
            $matricula = @$_POST['matricula'];
            $motivo = @$_POST['motivo'];
            $data1 = @$_POST['data1'];
            $data2 = @$_POST['data2'];
            $dataf1 = date('d/m/Y', strtotime($data1));
            $dataf2 = date('d/m/Y', strtotime($data2));
            $radio = @$_POST['radio'];
            
            //adicionar no banco
            add_form("Residência","form01",$matricula);

            // Instanciation of inherited class
            $pdf = new PDF();
            $pdf->AliasNbPages();
            $pdf->AddPage();
            $pdf->SetFont('Times','',14);
            $pdf->SetXY(30,60);
            $pdf->SetMargins(15,15,15);
            $pdf->MultiCell(0,10,utf8_decode("      Eu, $nome, regularmente matriculado(a) no Programa de Residência ".
                    "Multiprofissional em $area_atuacao, sob a matrícula $matricula, venho à presença do Colegiado do ".
                    "Programa requerer afastamento $radio das atividades, durante o período de $dataf1 a $dataf2 para $motivo(motivos),".
                    " situação abrangida pelo art. 38°, §4°, do Regimento Interno da Comissão de Residência Multiprofissional".
                    "-COREMU, estando ciente de que a validação deste documento fica condicionada à aprovação da Coordenação".
                    " do Programa no qual estou inserido(a).\n"),'C');
            $pdf->SetXY(90,160);
            $pdf->Cell(0,0,utf8_decode("Caicó/RN,____de__________________de______"));
            $pdf->SetXY(45,170);
            $pdf->MultiCell(0,8,"__________________________________________________",'C');
            $pdf->Cell(0,5,utf8_decode("Assinatura do residente"),0,1,'C');
            $pdf->MultiCell(0,8,"________________________________________________________________________");
            $pdf->MultiCell(0,8,utf8_decode("   A coordenação do Programa de Residência Multiprofissional em $area_atuacao, examinando o requerimento pelo residente, decide pelo:"));
            $pdf->MultiCell(0,8, utf8_decode("(  )Deferimento, com afastamento ______________________ das atividades pelo período solicitado."),'C');
            $pdf->MultiCell(0,8, utf8_decode("(   )Indeferimento, pelo qual justifico  _________________________________________"),'C');
            $pdf->MultiCell(0,8,"________________________________________________________________________");
            $pdf->MultiCell(0,8,"________________________________________________________________________");
            $pdf->MultiCell(0,8,"________________________________________________________________________");
            $pdf->MultiCell(0,8,"________________________________________________________________________");
            $pdf->Output();
        }
    }
    function form02(){
        if(!empty($_POST['nome']) && !empty($_POST['area_atuacao']) && !empty($_POST['matricula']) && !empty($_POST['motivo']) && !empty($_POST['data1']) && !empty($_POST['data2']) && !empty($_POST['radio'])){
            $nome = @$_POST['nome'];
            $area_atuacao = @$_POST['area_atuacao'];
            $matricula = @$_POST['matricula'];
            $evento = @$_POST['evento'];
            $data1 = @$_POST['data1'];
            $data2 = @$_POST['data2'];
            $dataf1 = date('d/m/Y', strtotime($data1));
            $dataf2 = date('d/m/Y', strtotime($data2));
            $radio = @$_POST['radio'];
            
            //adicionar no banco
            add_form("Residência","form02",$matricula);

            // Instanciation of inherited class
            $pdf = new PDF();
            $pdf->AliasNbPages();
            $pdf->AddPage();
            $pdf->SetFont('Times','',14);
            $pdf->SetXY(30,60);
            $pdf->SetMargins(15,15,15);
            $pdf->MultiCell(0,10,utf8_decode("      Eu, $nome, regularmente matriculado(a) no Programa de Residência ".
                    "Multiprofissional em $area_atuacao, sob a matrícula $matricula, venho à presença do Colegiado do ".
                    "Programa requerer afastamento $radio das atividades, durante o período de $dataf1 a $dataf2 para $evento,".
                    " situação abrangida pelo art. 38°, §4°, do Regimento Interno da Comissão de Residência Multiprofissional".
                    "-COREMU, estando ciente de que a validação deste documento fica condicionada à aprovação da Coordenação".
                    " do Programa no qual estou inserido(a).\n"),'C');
            $pdf->SetXY(90,160);
            $pdf->Cell(0,0,utf8_decode("Caicó/RN,____de__________________de______"));
            $pdf->SetXY(45,170);
            $pdf->MultiCell(0,8,"__________________________________________________",'C');
            $pdf->Cell(0,5,utf8_decode("Assinatura do residente"),0,1,'C');
            $pdf->MultiCell(0,8,"________________________________________________________________________");
            $pdf->MultiCell(0,8,utf8_decode("   A coordenação do Programa de Residência Multiprofissional em $area_atuacao, examinando o requerimento pelo residente, decide pelo:"));
            $pdf->MultiCell(0,8, utf8_decode("(  )Deferimento, com afastamento ______________________ das atividades pelo período solicitado."),'C');
            $pdf->MultiCell(0,8, utf8_decode("(   )Indeferimento, pelo qual justifico  _________________________________________"),'C');
            $pdf->MultiCell(0,8,"________________________________________________________________________");
            $pdf->MultiCell(0,8,"________________________________________________________________________");
            $pdf->MultiCell(0,8,"________________________________________________________________________");
            $pdf->MultiCell(0,8,"________________________________________________________________________");

            $pdf->Output();
        }
    }
    function form03 (){
        if(!empty($_POST['nome']) && !empty($_POST['area_atuacao']) && !empty($_POST['matricula']) && !empty($_POST['justificativa']) && !empty($_POST['data1']) && !empty($_POST['data2'])){
            $nome = @$_POST['nome'];
            $area_atuacao = @$_POST['area_atuacao'];
            $matricula = @$_POST['matricula'];
            $justificativa = @$_POST['justificativa'];
            $data1 = @$_POST['data1'];
            $data2 = @$_POST['data2'];
            $dataf1 = date('d/m/Y', strtotime($data1));
            $dataf2 = date('d/m/Y', strtotime($data2));
            
            //adicionar no banco
            add_form("Residência","form03",$matricula);

            // Instanciation of inherited class
            $pdf = new PDF();
            $pdf->AliasNbPages();
            $pdf->AddPage();
            $pdf->SetFont('Times','',14);
            $pdf->SetXY(30,60);
            $pdf->SetMargins(15,15,15);
            $pdf->MultiCell(0,8,utf8_decode("   Eu, $nome, regularmente matriculado(a) no Programa de Residência ".
                    "Multiprofissional em $area_atuacao, sob a matrícula $matricula, venho à presença do Colegiado do ".
                    "Programa requerer afastamento das atividades, durante o período de $dataf1 a $dataf2 para $justificativa(motivos),".
                    " situação abrangida pelo art. 38°, §4°, do Regimento Interno da Comissão de Residência Multiprofissional".
                    "-COREMU, estando ciente de que a validação deste documento fica condicionada à aprovação da Coordenação".
                    " do Programa no qual estou inserido(a).\n"),'C');
            $pdf->SetXY(90,160);
            $pdf->Cell(0,0,utf8_decode("Caicó/RN,____de__________________de______"));
            $pdf->SetXY(45,170);
            $pdf->MultiCell(0,8,"__________________________________________________",'C');
            $pdf->Cell(0,5,utf8_decode("Assinatura do residente"),0,1,'C');
            $pdf->MultiCell(0,8,"________________________________________________________________________");
            $pdf->MultiCell(0,8,utf8_decode("   A coordenação do Programa de Residência Multiprofissional em $area_atuacao, examinando o requerimento pelo residente, decide pelo:"));
            $pdf->MultiCell(0,8, utf8_decode("(  )Deferimento, com afastamento ______________________ das atividades pelo período solicitado."),'C');
            $pdf->MultiCell(0,8, utf8_decode("(   )Indeferimento, pelo qual justifico  _________________________________________"),'C');
            $pdf->MultiCell(0,8,"________________________________________________________________________");
            $pdf->MultiCell(0,8,"________________________________________________________________________");
            $pdf->MultiCell(0,8,"________________________________________________________________________");
            $pdf->MultiCell(0,8,"________________________________________________________________________");

            $pdf->Output();
        }
    }
    function form04(){
        $matricula = @$_POST['matricula'];
        //adicionar no banco
        add_form("Residência","form04",$matricula);
    }

