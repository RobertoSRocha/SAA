<?php
    require_once('../../config.php');
    require_once(DBAPI);
    
    /* guardar um conjunto de registros de usuario */
    $itens_emprestimos = null;
    /* guardará um único cliente, para os casos de inserção e atualização (CREATE e UPDATE) */
    $item_emprestimos = null;
    
    /** *  Listagem de Clientes	 */
    function index_emprestimos() {
        global $itens_emprestimos;
        $status = "emprestado";

        if(isset($_POST['filtro'])){
            $status = $_POST['filtro'];
        }
        $itens_emprestimos = find_all_emprestimos('emprestimos',$status);
    }
    
    function add_emprestimos() {
        if (!empty($_POST['user_solicitou']) && !empty($_POST['patrimonio_id']) && !empty($_POST['data_prazo_devolucao']) && !empty($_POST['nome']) 
                && !empty($_POST['destinatario']) && !empty($_POST['matricula'])) {
            
            $user_solicitou = @$_POST['user_solicitou'];
            $patrimonio_id = @$_POST['patrimonio_id'];
            $data_prazo_devolucao = @$_POST['data_prazo_devolucao'];
            $nome = @$_POST['nome'];
            $destinatario = @$_POST['destinatario'];
            $matricula = @$_POST['matricula'];
            
            /* Adicionar emprestimo no banco de dados */
            if(save_emp($user_solicitou, $patrimonio_id, 'emprestado', $data_prazo_devolucao)){
                /* Se adicionou, edita o status do patrimônio */
                update_status('patrimonio', $patrimonio_id, 'indisponivel');
            }
            
            header('location: index.php');
            exit();
            
        // Instanciation of inherited class
            /*
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

            $pdf->Output();  */
        }
        
        
        /*if (!empty($_POST['emprestimos'])) {
            $item_emprestimos = $_POST['emprestimos'];
            save('emprestimos', $item_emprestimos);
            header('location: index.php');
            exit();
        }*/
    }
    
    function edit_emprestimos() {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            if (isset($_POST['emprestimos'])) {
                $item_emprestimos = $_POST['emprestimos'];
                //$customer['modified'] = $now->format("Y-m-d H:i:s");
                update('emprestimos', $id, $item_emprestimos);
                header('location: index.php');
                exit();
            } else {
                global $item_emprestimos;
                $item_emprestimos = find('emprestimos', $id);
            }
        } else {
            header('location: index.php');
            exit();
        }
    }
    
    function verifica_atraso($id) {
    $teste = 0;
    $data_atual = date('d-M-y');
    $data_prazo = find_data_prazo_emprestimo('emprestimos', $id);
    $data1 = new DateTime($data_prazo); //prazo
    $data2 = new DateTime($data_atual); //data atual
    
    $intervalo = $data1->diff($data2);
    if ($intervalo->d > 0 || $intervalo->m > 0 || $intervalo->y > 0) {
        //return "atrasado" . $teste . "dias";
        if($intervalo->y > 0){
            return "atrasado: {$intervalo->y} ano(s), {$intervalo->m} mes(es) e {$intervalo->d} dia(s)";
        }else if($intervalo->m > 0){
            return "atrasado: {$intervalo->m} mes(es) e {$intervalo->d} dia(s)";
        }else{
            return "atrasado: {$intervalo->d} dia(s)";
        }
        
    } else {
        return "não está atrasado";
    }
}

function view_emprestimos($id = null) {
        global $item_emprestimos;
        $item_emprestimos = find('emprestimos', $id);
    }
    
    function delete_emprestimos($id = null) {
        global $item_emprestimos;
        $item_emprestimos = remove('emprestimos', $id);
        header('location: index.php');
        exit();
    }


function filtro()
{
    if(isset($_GET['nome'])){
        $nome = $_GET['nome'];
        echo $nome;
    }
    if(isset($_GET['tombo'])){
        $tombo = $_GET['tombo'];
        echo $tombo;

    }

    if(isset($_GET['local'])){
       $local = $_GET['local'];
        echo $local;
    }

    if(isset($_GET['setor'])){
       $setor = $_GET['setor'];
       echo $setor;
    }
}
