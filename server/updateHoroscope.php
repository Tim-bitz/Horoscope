<?php

session_start();
require("./findHoroscope.php");

if(isset($_SERVER["REQUEST_METHOD"])) {

    if($_SERVER["REQUEST_METHOD"] === "POST") {

        if(isset($_SESSION["date"])) {


            $day = $_POST["day"];
            $month = $_POST["month"];
                

            $horoscopeQuery = getHoroscope($month, $day);
                
            $_SESSION['date'] = serialize($horoscopeQuery);
            echo json_encode(true);
            exit;


        }else{
            
                echo json_encode(false);
                exit;
            }
    }
}


?>