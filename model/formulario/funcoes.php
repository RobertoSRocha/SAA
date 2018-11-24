<?php
    require_once('../../config.php');
    require_once(DBAPI);
    
    function add_form($tipo_req, $tipo_form, $usuario_matricula){
        saveForm($tipo_req, $tipo_form, $usuario_matricula);
        //header('location: index.php');
    }


