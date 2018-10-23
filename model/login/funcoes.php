<?php
    require_once('../config.php');
    require_once(DBAPI);
    
    function fazerLogin() {
        $matricula = (isset($_POST['matricula'])) ? $_POST['matricula'] : '';
        $senha = (isset($_POST['senha'])) ? $_POST['senha'] : '';
        if ($result = login('usuario', $matricula, $senha)/* usuario existir na base de dados */) {
            if ($result == 1/* usuario administrador */) {
                header('location: ../admin/index.php');
            } elseif ($result == 2/* usuario operacional */) {
                header('location: ../operacional/index.php');
            } else {
                header('location: index.php');
            }
        } 
    }
    
    function verificaLogin(){
        // A sessão precisa ser iniciada em cada página diferente
        if (!isset($_SESSION))
            session_start();

        // Verifica se não há a variável da sessão que identifica o usuário
        if (!isset($_SESSION['id'])) {
            // Destrói a sessão por segurança
            session_destroy();
            // Redireciona o visitante de volta pro login
            header("Location: BASEURL/public/index.php");
        }
    }

    function logout(){
        session_start(); // Inicia a sessão
        session_destroy(); // Destrói a sessão limpando todos os valores salvos
        header("Location: BASEURL/public/index.php");
    }
