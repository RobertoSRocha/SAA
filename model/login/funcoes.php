<?php
    require_once('../config.php');
    require_once(DBAPI);
    
    function fazerLogin() {
        if(isset($_POST['matricula']) && isset($_POST['senha'])){
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
    }
    
    function verificaLoginAdmin(){
        // A sessão precisa ser iniciada em cada página diferente
        if (!isset($_SESSION))
            session_start();

        // Verifica se não há a variável da sessão que identifica o usuário e sua permissao de admin
        if (!isset($_SESSION['id']) || ($_SESSION['permissao']!=1)) {
            // Destrói a sessão por segurança
            session_destroy();
            // Redireciona o visitante de volta pro login
            header("Location: ".BASEURL."public/index.php");
        }
    }
    
    function verificaLoginOperador(){
        // A sessão precisa ser iniciada em cada página diferente
        if (!isset($_SESSION))
            session_start();

        // Verifica se não há a variável da sessão que identifica o usuário e sua permissao de operador
        if (!isset($_SESSION['id']) || ($_SESSION['permissao']!=2)) {
            // Destrói a sessão por segurança
            session_destroy();
            // Redireciona o visitante de volta pro login
            header("Location: ".BASEURL."public/index.php");
        }
    }
    
    function verificaLoginPublic(){
        // Verifica se está logado
        if (isset($_SESSION['id'])) {
            // A sessão precisa ser iniciada em cada página diferente
            session_start();
            if ($_SESSION['permissao']==1) {
               // Redireciona para o admin
                header("Location: ".BASEURL."admin/index.php"); 
            }else{
                // Redireciona para o operacional
                header("Location: ".BASEURL."operacional/index.php");
            } 
        }
    }
    
    /*function verificarSenha(){
        if (isset($_SESSION['id'])) {
            if ($_SESSION['senha']=="mudar123") {
               // Chama Modal de senha
                //BASEURL.operacional/login/modal.php;
            } 
        }
    }*/

