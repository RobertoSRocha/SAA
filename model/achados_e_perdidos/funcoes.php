<?php
    require_once('../../config.php');
    require_once(DBAPI);
    
    /* guardar um conjunto de registros de usuario */
    $itens = null;
    /* guardará um único cliente, para os casos de inserção e atualização (CREATE e UPDATE) */
    $item = null;
    
    /** *  Listagem de Clientes	 */
    function indexAchados_e_Perdidos() {
        global $itens;
        $itens = find_all('achados_e_perdidos');
    }
    
    function addAchados_e_Perdidos() {
        if (!empty($_POST['achados_e_perdidos'])) {
            $item = $_POST['achados_e_perdidos'];
            save('achados_e_perdidos', $item);
            header('location: index.php');
            exit();
        }
    }
    
    function editAchados_e_Perdidos() {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            if (isset($_POST['achados_e_perdidos'])) {
                $item = $_POST['achados_e_perdidos'];
                //$customer['modified'] = $now->format("Y-m-d H:i:s");
                update('achados_e_perdidos', $id, $item);
                header('location: index.php');
                exit();
            } else {
                global $item;
                $item = find('achados_e_perdidos', $id);
            }
        } else {
            header('location: index.php');
            exit();
        }
    }
    
    function viewAchados_e_Perdidos($id = null) {
        global $item;
        $item = find('achados_e_perdidos', $id);
    }
    
    function deleteAchados_e_Perdidos($id = null) {
        global $item;
        $item = remove('achados_e_perdidos', $id);
        header('location: index.php');
        exit();
    }
