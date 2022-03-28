<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validating</title>
    <link rel="stylesheet" href="Css/emailSent.css" type="text/css">
</head>

<body>

    <div>
      <?php
           include("con_db.php");
            
            
            $mail = $_GET["mail"];
            $user = $_GET["user"];
            
            

            $query = "UPDATE  $user SET validated = 1 WHERE mail = '$mail';";
            echo "<h1>Account Verified</h1>";
            $result = mysqli_query($conex,$query);

            

            ?>
        

        
        <h4>You can close this window</h4>
    </div>

</body>

</html>