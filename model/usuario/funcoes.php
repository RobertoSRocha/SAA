<?php
    require_once('../../config.php');
    require_once(DBAPI);
    
    /* guardar um conjunto de registros de usuario */
    $usuarios = null;
    /* guardará um único cliente, para os casos de inserção e atualização (CREATE e UPDATE) */
    $usuario = null;
    
    /** *  Listagem de Clientes	 */
    function index() {
        global $usuarios;
        $usuarios = find_all('usuario');
    }
    
    function addUsuario() {
        if (!empty($_POST['usuario'])) {
            $usuario = $_POST['usuario'];
            //$usuario['senha'] = base64_encode($usuario['senha']);
            save('usuario', $usuario);
            header('location: index.php');
        }
    }
    
    function editUsuario() {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            if (isset($_POST['usuario'])) {
                $usuario = $_POST['usuario'];
                //$customer['modified'] = $now->format("Y-m-d H:i:s");
                update('usuario', $id, $usuario);
                header('location: index.php');
            } else {
                global $usuario;
                $usuario = find('usuario', $id);
            }
        } else {
            header('location: index.php');
        }
    }
    
    function viewUsuario($id = null) {
        global $usuario;
        $usuario = find('usuario', $id);
    }
    
    function deleteUsuario($id = null) {
        global $usuario;
        $usuario = remove('usuario', $id);
        header('location: index.php');
    }
    
    function verificaID(){
       if (isset($_GET['id'])) {
            if ($_GET['id'] != $_SESSION['id']) {
                header('location: index.php');
            } 
        } 
    }
    
    function redefinirSenha($id = null){
        global $usuario;
        $usuario = updateSenha('usuario', $id, 'mudar123');
        header('location: index.php');
    }
    
    function atualizarSenha() {
        if (isset($_POST['id']) && isset($_POST['senha']) && isset($_POST['senha2']) && isset($_POST['senha_atual'])) {
            $senha_atual = (isset($_POST['senha_atual'])) ? $_POST['senha_atual'] : '';
            if (md5($senha_atual) === $_SESSION['senha']) {
                $id = (isset($_POST['id'])) ? $_POST['id'] : '';
                $senha = (isset($_POST['senha'])) ? $_POST['senha'] : '';
                if ($result = updateSenhaLogin('usuario', $id, $senha)/* usuario existir na base de dados */) {
                    if ($result == 1/* usuario administrador */) {
                        header("Location: " . BASEURL . "admin/index.php");
                        exit();
                    } elseif ($result == 2/* usuario operacional */) {
                        header("Location: " . BASEURL . "operacional/index.php");
                        exit();
                    } else {
                        header("Location: " . BASEURL . "index.php");
                        exit();
                    }
                }
            }
            else{
                $_SESSION['message'] = "Viiixe, você informou sua senha atual errada";
                $_SESSION['type'] = 'warning';
            }
        }
    }
