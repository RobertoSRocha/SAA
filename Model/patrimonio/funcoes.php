<?php
    require_once('../../config.php');
    require_once(DBAPI);
    
    /* guardar um conjunto de registros de usuario */
    $patrimonios = null;
    /* guardará um único cliente, para os casos de inserção e atualização (CREATE e UPDATE) */
    $patrimonio = null;
    
    /** *  Listagem de Clientes	 */
    function index() {
        global $patrimonios;
        $patrimonios = find_all('patrimonio');
    }
