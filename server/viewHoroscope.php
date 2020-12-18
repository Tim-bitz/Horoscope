<?php

session_start();

if(isset($_SERVER['REQUEST_METHOD'])) {
    if($_SERVER['REQUEST_METHOD'] === 'GET'){
     
        if (isset($_SESSION['date'])) {
            
            echo json_encode(unserialize($_SESSION['date']));
            exit;

        }else{
            echo json_encode("spara ett horoskop.");
            exit;
        }


    }
}


?>