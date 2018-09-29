<?php
    require_once('../../config.php');
    require_once(DBAPI);
    
    /* guardar um conjunto de registros de usuario */
    $locais = null;
    /* guardará um único cliente, para os casos de inserção e atualização (CREATE e UPDATE) */
    $local = null;
    
    /** *  Listagem de Clientes	 */
    function index() {
        global $locais;
        $locais = find_all('locais');
    }
