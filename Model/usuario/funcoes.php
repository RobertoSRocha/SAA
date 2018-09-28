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
