<?php
    require_once '../../config.php';
    logout();
    function logout(){
        session_start(); // Inicia a sessão
        session_destroy(); // Destrói a sessão limpando todos os valores salvos
        header("Location: ".BASEURL."public/index.php");
    }
    

