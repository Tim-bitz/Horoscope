<?php

session_start();

require("./findHoroscope.php");

if(isset($_SERVER["REQUEST_METHOD"])) {

    if($_SERVER['REQUEST_METHOD'] === 'POST'){

        if(isset($_SESSION['date'])){
            echo json_encode(false);
            exit;
            
        }
        else{
            if(isset($_POST['month'])&& isset($_POST['day'])) {

                $day = $_POST['day'];
                $month = $_POST['month'];
                
                $horoscopeQuery = getHoroscope($month, $day);
            
                $_SESSION['date'] = serialize($horoscopeQuery);
                
                echo json_encode(true);
            
                exit;
        
            }else{

            echo json_encode("inget horoskop är sparat.");
        
            }    
        }
    }
}

         //   echo json_encode(unserialize($_SESSION['date']));
        //    echo json_encode(true);
        

       


//    $checkDay= explode('-', json_encode($_SESSION['day']));

/*
            $day = array (
                array("stenbock", "stenbock", "stenbock", "stenbock", "stenbock", "stenbock", "stenbock", "stenbock", "stenbock", "stenbock", "stenbock", "stenbock", "stenbock", "stenbock", "stenbock", "stenbock", "stenbock", "stenbock", "stenbock", "Vattumannen","Vattumannen","Vattumannen","Vattumannen","Vattumannen","Vattumannen","Vattumannen","Vattumannen","Vattumannen","Vattumannen","Vattumannen","Vattumannen","Vattumannen"),
                array("Vattumannen","Vattumannen","Vattumannen","Vattumannen","Vattumannen","Vattumannen","Vattumannen","Vattumannen","Vattumannen","Vattumannen","Vattumannen","Vattumannen","Vattumannen","Vattumannen","Vattumannen","Vattumannen","Vattumannen","Vattumannen","Fiskarna","Fiskarna","Fiskarna","Fiskarna","Fiskarna","Fiskarna","Fiskarna","Fiskarna","Fiskarna","Fiskarna"),
                array("Fiskarna", "Fiskarna", "Fiskarna", "Fiskarna", "Fiskarna", "Fiskarna", "Fiskarna", "Fiskarna", "Fiskarna", "Fiskarna", "Fiskarna", "Fiskarna", "Fiskarna", "Fiskarna", "Fiskarna", "Fiskarna", "Fiskarna", "Fiskarna", "Fiskarna", "Fiskarna","Väduren","Väduren", "Väduren", "Väduren", "Väduren", "Väduren", "Väduren", "Väduren", "Väduren", "Väduren", "Väduren"),
                array("Väduren", "Väduren", "Väduren", "Väduren", "Väduren", "Väduren", "Väduren", "Väduren", "Väduren", "Väduren", "Väduren", "Väduren", "Väduren", "Väduren", "Väduren", "Väduren", "Väduren", "Väduren", "Väduren", "Oxen", "Oxen", "Oxen", "Oxen", "Oxen", "Oxen", "Oxen", "Oxen", "Oxen", "Oxen", "Oxen"),
                array("Oxen", "Oxen", "Oxen", "Oxen", "Oxen", "Oxen", "Oxen", "Oxen", "Oxen", "Oxen", "Oxen", "Oxen", "Oxen", "Oxen", "Oxen", "Oxen", "Oxen", "Oxen", "Oxen", "Oxen", "Tvillingarna", "Tvillingarna", "Tvillingarna", "Tvillingarna", "Tvillingarna", "Tvillingarna", "Tvillingarna", "Tvillingarna", "Tvillingarna", "Tvillingarna", "Tvillingarna", ),
                array("Tvillingarna", "Tvillingarna", "Tvillingarna", "Tvillingarna", "Tvillingarna", "Tvillingarna", "Tvillingarna", "Tvillingarna", "Tvillingarna", "Tvillingarna", "Tvillingarna", "Tvillingarna", "Tvillingarna", "Tvillingarna", "Tvillingarna", "Tvillingarna", "Tvillingarna", "Tvillingarna", "Tvillingarna", "Tvillingarna", "Tvillingarna", "Kräftan", "Kräftan", "Kräftan", "Kräftan", "Kräftan", "Kräftan", "Kräftan", "Kräftan", "Kräftan", "Kräftan", "Kräftan", "Kräftan", ),
                array("Kräftan", "Kräftan", "Kräftan", "Kräftan", "Kräftan", "Kräftan", "Kräftan", "Kräftan", "Kräftan", "Kräftan", "Kräftan", "Kräftan", "Kräftan", "Kräftan", "Kräftan", "Kräftan", "Kräftan", "Kräftan", "Kräftan", "Kräftan", "Kräftan", "Lejonet", "Lejonet", "Lejonet", "Lejonet", "Lejonet", "Lejonet", "Lejonet", "Lejonet", "Lejonet", "Lejonet", "Lejonet", "Lejonet", "Lejonet", "Lejonet", "Lejonet", "Lejonet", ),
                array(),
                array(),
                array(),
                array(),
                array(),

            );
*/
/*

Vattumannen: 20 januari - 18 februari
Fiskarna: 19 februari - 20 mars
Väduren: 21 mars - 19 april
Oxen: 20 april - 20 maj
Tvillingarna: 21 maj - 21 juni
Kräftan: 22 juni - 22 juli
Lejonet: 23 juli - 22 augusti
Jungfrun: 23 augusti - 22 september
Vågen: 23 september - 22 oktober
Skorpionen: 23 oktober - 21 november
Skytten: 22 november - 21 december
Stenbocken: 22 december - 19 januari
*/