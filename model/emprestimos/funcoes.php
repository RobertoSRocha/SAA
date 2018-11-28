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
        $itens_emprestimos = find_all('emprestimos');
    }
    
    function add_emprestimos() {
        if (!empty($_POST['emprestimos'])) {
            $item_emprestimos = $_POST['emprestimos'];
            save('emprestimos', $item_emprestimos);
            header('location: index.php');
            exit();
        }
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
