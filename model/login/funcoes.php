<?php
    require_once(ABSPATH.'config.php');
    require_once(DBAPI);
    
    function fazerLogin() {
        if(isset($_POST['matricula']) && isset($_POST['senha'])){
            $matricula = (isset($_POST['matricula'])) ? $_POST['matricula'] : '';
            $senha = (isset($_POST['senha'])) ? $_POST['senha'] : '';
            if ($result = login('usuario', $matricula, $senha)/* usuario existir na base de dados */) {
                if ($result == 1/* usuario administrador */) {
                    header('location: ../admin/index.php');
                    exit();
                } elseif ($result == 2/* usuario operacional */) {
                    header('location: ../operacional/index.php');
                    exit();
                } else {
                    header('location: index.php');
                    exit();
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
            exit();
        }
        if (isset($_SESSION['id']) && $_SESSION['senha'] == md5("mudar123")){
            header("Location: ".BASEURL."admin/login/mudar_senha.php");
            exit();
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
            exit();

        }
        if (isset($_SESSION['id']) && $_SESSION['senha'] == md5("mudar123")){
            header("Location: ".BASEURL."operacional/login/mudar_senha.php");
            exit();
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
                exit();

            }else{
                // Redireciona para o operacional
                header("Location: ".BASEURL."operacional/index.php");
                exit();

            } 
        }
    }
    
    
    
    function atualizarSenha(){
        if(isset($_POST['id']) && isset($_POST['senha']) && isset($_POST['senha2'])){
            $id = (isset($_POST['id'])) ? $_POST['id'] : '';
            $senha = (isset($_POST['senha'])) ? $_POST['senha'] : '';
            if ($result = updateSenhaLogin('usuario', $id, $senha)/* usuario existir na base de dados */) {
                if ($result == 1/* usuario administrador */) {
                    header("Location: ".BASEURL."admin/index.php");
                } elseif ($result == 2/* usuario operacional */) {
                    header("Location: ".BASEURL."operacional/index.php");
                } else {
                    header("Location: ".BASEURL."index.php");
                }
            } 
        }
    }

