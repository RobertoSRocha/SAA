<?php
    require_once('../config.php');
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
    
    function verificaUsuario() {
        $matricula = (isset($_POST['matricula'])) ? $_POST['matricula'] : '';
        $senha = (isset($_POST['senha'])) ? $_POST['senha'] : '';
        if (/*login($matricula, $senha)*/ $matricula/* usuario existir na base de dados */) {
            if ($matricula/* usuario administrador */) {
                //echo '1 - ' . $matricula;
                //echo '1 - ' . $senha;
                header('location: ../admin/index.php');
            } elseif ($matricula/* usuario operacional */) {
                //echo '2 - ' . $matricula;
                header('location: ../operacional/index.php');
            } else {
                /* usuario comum: não tem permissão para logar */
                //echo '3 - ' . $matricula;
                header('location: ../admin/index.php');
            }
        } else {
            /* usuario não encontrado */
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
