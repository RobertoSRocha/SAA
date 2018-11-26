<?php
    require_once('../../config.php');
    require_once(DBAPI);
    
    $formulario = null;
    
    function addForm(){
        if(!empty($_POST['formulario'])){
            $data_requerimento = now();
            
            $formulario = $_POST['formulario'];
            
            save('formulario',$formulario);
            
        }
    }
    
    

    
    
    
    
?>


