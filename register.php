<?php

    include("con_db.php");


    if(isset($_POST['register'])){
        
            $names = trim($_POST['name']);
            $temp = $_POST['temperature'];
            $query = "INSERT INTO `temperature`(`Id`, `name`, `temp`)
            VALUES('', '$names', '$temp')";
            $result = mysqli_query($conex,$query);

            if($result){
                echo "<h1>Data Inserted Succesfully</h1>";
            }else{
                echo "<h1>Data Insert Failed</h1>";
            }
           
            }
        
    




?>