<?php
    include("con_db.php");
        
        if(isset($_POST["name"]) && isset($_POST["lname"]) && isset($_POST["email"]) && isset($_POST["password"]) && isset($_POST["operando"])){
            $name = $_POST["name"];
            $lastName = $_POST["lname"];
            $email = $_POST["email"];
            $password = $_POST["password"];
            $role = $_POST["operando"];

            if($role == 1){
                $user = "patient";
                $query = "INSERT INTO `patient` (`id`, `name`, `last_name`, `mail`, `Vpassword`, `validated`, `doctor_id`, `temperature_history_id`)
                VALUES(NULL, '$name', '$lastName', '$email','$password','0',NULL,NULL);";
            }else if($role == 2){
                $user = "doctor";
                $query = "INSERT INTO `doctor` (`id`, `name`, `last_name`, `mail`, `Vpassword`, `validated`) 
                            VALUES (NULL, '$name', '$lastName', '$email','$password','0');";
            }else if ($role == 3){
                $user = "administrator";
                $query = "INSERT INTO `administrator` (`id`, `name`, `last_name`, `mail`, `Vpassword`, `super_administrator_id`, `validated`) 
                VALUES (NULL, '$name', '$lastName', '$email', '$password', NULL, '0')";
            }

            echo "<script>window.location = 'validationSent.php?mail=$email&user=$user' </script>";
            $result = mysqli_query($conex,$query);            
        }

?>