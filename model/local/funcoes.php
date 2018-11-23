<?php
    require_once('../../config.php');
    require_once(DBAPI);
    
    /* guardar um conjunto de registros de usuario */
    $locais = null;
    /* guardará um único cliente, para os casos de inserção e atualização (CREATE e UPDATE) */
    $local = null;
    
    /** *  Listagem de Clientes	 */
    function indexLocal() {
        global $locais;
        $locais = find_all('locais');
    }
    
    /** *  Pega nome do local através do setor	 */
    function nome_setor_local($local_id){
        return find_nome('locais', $local_id);
    }
    
    function addLocal() {
        if (!empty($_POST['locais'])) {
            //$today = date_create('now', new DateTimeZone('America/Sao_Paulo'));
            $local = $_POST['locais'];
            //$patrimonio['modified'] = $patrimonio['created'] = $today->format("Y-m-d H:i:s");
            save('locais', $local);
            header('location: index.php');
        }
    }
    
    function editLocal() {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            if (isset($_POST['locais'])) {
                $local = $_POST['locais'];
                //$customer['modified'] = $now->format("Y-m-d H:i:s");
                update('locais', $id, $local);
                header('location: index.php');
            } else {
                global $local;
                $local = find('locais', $id);
            }
        } else {
            header('location: index.php');
        }
    }
    
    function viewLocal($id = null) {
        global $local;
        $local = find('locais', $id);
    }
    
    function deleteLocal($id = null) {
        global $local;
        $local = remove('locais', $id);
        header('location: index.php');
    }
