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
