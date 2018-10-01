<?php
    require_once('../../config.php');
    require_once(DBAPI);
    
    /* guardar um conjunto de registros de usuario */
    $setores = null;
    /* guardará um único cliente, para os casos de inserção e atualização (CREATE e UPDATE) */
    $setor = null;
    
    /** *  Listagem de Clientes	 */
    function indexSetor() {
        global $setores;
        $setores = find_all('setor');
    }
    
    function addSetor() {
        if (!empty($_POST['setor'])) {
            //$today = date_create('now', new DateTimeZone('America/Sao_Paulo'));
            $setor = $_POST['setor'];
            //$patrimonio['modified'] = $setor['created'] = $today->format("Y-m-d H:i:s");
            save('setor', $setor);
            header('location: index.php');
        }
    }
    
    function editSetor() {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            if (isset($_POST['setor'])) {
                $setor = $_POST['setor'];
                //$customer['modified'] = $now->format("Y-m-d H:i:s");
                update('setor', $id, $setor);
                header('location: index.php');
            } else {
                global $setor;
                $setor = find('setor', $id);
            }
        } else {
            header('location: index.php');
        }
    }
    
    function viewSetor($id = null) {
        global $setor;
        $setor = find('setor', $id);
    }
    
    function deleteSetor($id = null) {
        global $setor;
        $setor = remove('setor', $id);
        header('location: index.php');
    }