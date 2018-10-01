<?php
    require_once('../../config.php');
    require_once(DBAPI);
    
    /* guardar um conjunto de registros de usuario */
    $patrimonios = null;
    /* guardará um único cliente, para os casos de inserção e atualização (CREATE e UPDATE) */
    $patrimonio = null;
    
    /** *  Listagem de Clientes	 */
    function indexPatrimonio() {
        global $patrimonios;
        $patrimonios = find_all('patrimonio');
    }

    /** *  Cadastro de Patrimônios	 */
    function addPatrimonio() {
        if (!empty($_POST['patrimonio'])) {
            //$today = date_create('now', new DateTimeZone('America/Sao_Paulo'));
            $patrimonio = $_POST['patrimonio'];
            //$patrimonio['modified'] = $patrimonio['created'] = $today->format("Y-m-d H:i:s");
            save('patrimonio', $patrimonio);
            header('location: index.php');
        }
    }
    
    function editPatrimonio() {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            if (isset($_POST['patrimonio'])) {
                $patrimonio = $_POST['patrimonio'];
                //$customer['modified'] = $now->format("Y-m-d H:i:s");
                update('patrimonio', $id, $patrimonio);
                header('location: index.php');
            } else {
                global $patrimonio;
                $patrimonio = find('patrimonio', $id);
            }
        } else {
            header('location: index.php');
        }
    }
    
    function viewPatrimonio($id = null) {
        global $patrimonio;
        $patrimonio = find('patrimonio', $id);
    }
    
    function deletePatrimonio($id = null) {
        global $patrimonio;
        $patrimonio = remove('patrimonio', $id);
        header('location: index.php');
    }
