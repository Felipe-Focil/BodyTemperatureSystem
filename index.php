<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temperature</title>
    <link rel="stylesheet" href="Css/takingTemperature.css" type="text/css">
    
</head>
<body>
    
    <form method="post">
        <h1>Temperature</h1>
        <input type="text" name="name" placeholder = "Name" autocomplete = "off">
        <br><br>
        <?php
            $temp = 24.5;
            
            if($temp <=27.0){
                echo '<div class ="typeNormal">'.$temp.'</div>';
            }else{
                echo '<div class ="typeFever">'.$temp.'</div>';
            }
 
            

        ?>
        <br><br>
        <input type="submit" name= "register">
    </form>

    
    <?php
        include("register.php");
    ?>
    
</body>
</html>