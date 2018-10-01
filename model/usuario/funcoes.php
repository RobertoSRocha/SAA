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
            //$today = date_create('now', new DateTimeZone('America/Sao_Paulo'));
            $usuario = $_POST['usuario'];
            //$patrimonio['modified'] = $setor['created'] = $today->format("Y-m-d H:i:s");
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
