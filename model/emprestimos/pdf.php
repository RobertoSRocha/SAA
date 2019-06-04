<?php
require_once('../../config.php');
require_once EMPRESTIMOS;
require_once PATRIMONIO;
require_once USUARIO;


indexPatrimonio();
view_emprestimos($_GET['id']);


if ($patrimonios) :
    foreach ($patrimonios as $patrimonio) :
        if ($patrimonio['id'] == $item_emprestimos['patrimonio_id']) :

            $nome_patri = $patrimonio['nome']; //nome do patrimonio
            $tombo_patri =  $patrimonio['tombo'];// Tombo
            $data_emprestimo =  date('d/m/Y', strtotime($item_emprestimos['data_emprestimo']));//Data de imprestimo

            $partes = explode("/", $data_emprestimo);
            $dia = $partes[0];
            $mes =(int)$partes[1];
            $ano = $partes[2];

            $meses = ["Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro"];

            $data_emprestimo = $dia." de ".$meses[$mes -1]." de ".$ano;

            $data_prazo = date('d/m/Y', strtotime($item_emprestimos['data_prazo_devolucao']));//prazo de devolucão
            $user_realizou = index_nome_user($item_emprestimos['user_realizou']);//usuario que realizou o imprestimo
            $user_solicitou = index_nome_user($item_emprestimos['user_solicitou']);//Usuario que solicitou

            //busca o usuario pelo seu id
            viewUsuario($item_emprestimos['user_solicitou']);
            $user_matricula = $usuario['matricula'];//matricula do usuario que solicitou o emmprestimo
            $user_categoria = $usuario['categoria'];
        endif;
    endforeach;
endif;

pdf_emprestimos($nome_patri, $tombo_patri, $data_emprestimo, $data_prazo, $user_realizou, $user_solicitou, $user_matricula, $user_categoria);