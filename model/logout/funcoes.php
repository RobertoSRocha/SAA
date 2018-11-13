<?php
    require_once '../../config.php';
    logout(isset($_GET["id"]));
    function logout($acao){
        session_start(); // Inicia a sessão
        session_destroy(); // Destrói a sessão limpando todos os valores salvos
        if($acao == 'sair' ){
            header("Location: ".BASEURL."public/logout/modal.php");
        }else{
            header("Location: ".BASEURL."public/logout/tempo_sessao.php");
        }
    }
    

