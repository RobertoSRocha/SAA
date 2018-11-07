<?php
    redirecionar();
    function redirecionar(){
        sleep(5);
        header("Location: ".BASEURL."public/index.php");
    }
    
