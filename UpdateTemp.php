<?php
    include("con_db.php");

    if(isset($_POST["id"]) && isset($_POST["operando"]) && isset($_POST["Temperature"])){
            
            $id = $_POST["id"];
            $day = $_POST["operando"];
            $temp = $_POST["Temperature"];
            
            $query = "UPDATE `temperature_history` SET $day = $temp WHERE id = $id";
            $result = mysqli_query($conex,$query);  
    }
?>