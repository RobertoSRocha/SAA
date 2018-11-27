<?php
    require_once('../../config.php');
    require_once PDF;
    require_once(DBAPI);
    
    $formulario = null;
    
    class PDF extends FPDF {
        function Header() {
            // Logo
            $this->Image("../../dist/img/cabecalho1.png", 30, 10, 150);
            // Arial bold 15
            $this->SetFont('Arial', 'B', 15);
            $this->Ln(20);
        }

    }
    
    //função de adicionar as info do formulario no banco
    function add_form($tipo_req, $tipo_form, $usuario_matricula){
        saveForm($tipo_req, $tipo_form, $usuario_matricula);
        //header('location: index.php');
    }
    
    function form01() {
        if (!empty($_POST['nome']) && !empty($_POST['matricula']) && !empty($_POST['destinatario']) && !empty($_POST['nome_destinatario']) && !empty($_POST['requerimento'])) {
            $nome = @$_POST['nome'];
            $matricula = @$_POST['matricula'];
            $destinatario = @$_POST['destinatario'];
            $nome_destinatario = @$_POST['nome_destinatario'];
            $requerimento = @$_POST['requerimento'];
            
            //adicionar no banco
            add_form("Graduacao","form01",$matricula);
            
        // Instanciation of inherited class
            $pdf = new PDF();
            $pdf->AliasNbPages();
            $pdf->AddPage();
            $pdf->SetFont('Arial', '', 14);
            $pdf->SetXY(30, 70);
            $pdf->SetMargins(15, 15, 15);
            $pdf->MultiCell(190, 10, utf8_decode("Senhor(a) $destinatario, $nome_destinatario .\n"), 'C');
            $pdf->MultiCell(0, 10, utf8_decode("$nome, matrícula $matricula, aluno(a) vinculado(a) a esta universidade no curso de Medicina, vem requerer $requerimento"), 'C');
            $pdf->SetXY(90, 240);
            $pdf->Cell(0, 0, utf8_decode("Caicó/RN,____de__________________de______"));
            $pdf->SetXY(40, 260);
            $pdf->MultiCell(0, 8, "__________________________________________________", 'C');
            $pdf->Cell(0, 5, utf8_decode("$nome"), 0, 1, 'C');

            $pdf->Output();  
        }
    }
    function form02() {
        if (!empty($_POST['nome']) && !empty($_POST['matricula']) && !empty($_POST['evento']) && !empty($_POST['titulo_trabalho']) && !empty($_POST['cidade']) && !empty($_POST['estado']) && !empty($_POST['data1']) && !empty($_POST['data2'])) {
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
            
            //adicionar no banco
            add_form("Graduacao","form02",$matricula);

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
                    "apresentador(a) do evento $evento, conforme aprovação de trabalho científico de título $titulo.".
            " O evento será realizado em $cidade/$estado, de $dataf1  a  $dataf2 ."),'C');
            $pdf->MultiCell(0,10,utf8_decode("            Nestes termos, pede deferimento."));
            $pdf->SetXY(90,240);
            $pdf->Cell(0,0,utf8_decode("Caicó/RN,____de__________________de______"));
            $pdf->SetXY(40,260);
            $pdf->MultiCell(0,8,"__________________________________________________",'C');
            $pdf->Cell(0,5,utf8_decode("$nome"),0,1,'C');

            $pdf->Output();
        }   
    }
    function form03() {
        if(!empty($_POST['nome']) && !empty($_POST['matricula']) && !empty($_POST['modulo']) && !empty($_POST['coordenador_modulo']) && !empty($_POST['data1']) && !empty($_POST['data2']) && 
                !empty($_POST['evento']) && !empty($_POST['cidade']) && !empty($_POST['estado']) && !empty($_POST['data3']) && !empty($_POST['data4'])){
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
            
            //adicionar no banco
            add_form("Graduacao","form03",$matricula);
            // Instanciation of inherited class
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
        }
    }
    function form04() {
        if(!empty($_POST['nome']) && !empty($_POST['matricula']) && !empty($_POST['modulo']) && !empty($_POST['coordenador_modulo']) && !empty($_POST['data1']) && !empty($_POST['data2'])){
            $nome = @$_POST['nome'];
            $matricula = @$_POST['matricula'];
            $modulo = @$_POST['modulo'];
            $coordenador_modulo = @$_POST['coordenador_modulo'];
            $data1 = @$_POST['data1'];
            $data2 = @$_POST['data2'];
            $dataf1 = date('d/m/Y', strtotime($data1));
            $dataf2 = date('d/m/Y', strtotime($data2));

            //adicionar no banco
            add_form("Graduacao","form04",$matricula);

            // Instanciation of inherited class
            $pdf = new PDF();
            $pdf->AliasNbPages();
            $pdf->AddPage();
            $pdf->SetFont('Times','',14);
            $pdf->SetXY(30,70);
            $pdf->SetMargins(15,15,15);
            $pdf->MultiCell(190,10,utf8_decode("Senhor(a) Coordenador(a) $coordenador_modulo,\n"),'C');

            $pdf->MultiCell(0,10,utf8_decode("$nome, matrícula $matricula, aluno(a) vinculado(a) a esta universidade ".
                    "no curso de Medicina, vem requerer execução de exercícios domiciliares no módulo de $modulo,".
                    " de $dataf1 a $dataf2 em virtude de tratamento de saúde, conforme atestado médico anexo .\n"),'C');
            $pdf->MultiCell(0,10,utf8_decode("            Nestes termos, pede deferimento."));
            $pdf->SetXY(90,240);
            $pdf->Cell(0,0,utf8_decode("Caicó/RN,____de__________________de______"));
            $pdf->SetXY(40,260);
            $pdf->MultiCell(0,8,"__________________________________________________",'C');
            $pdf->Cell(0,5,utf8_decode("$nome"),0,1,'C');

            $pdf->Output();
        }
    }




