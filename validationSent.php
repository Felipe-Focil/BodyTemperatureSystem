<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Sent</title>
    <link rel="stylesheet" href="Css/emailSent.css" type="text/css">
</head>

<body>

    <div>
        <h1>Account Created</h1>
        <br>
        <h2>We sent an Email to: </h2>
        <?php
            $mail = $_GET["mail"];
            $user = $_GET["user"];

             echo "<h3> " .$mail. "</h3>";

             //THIS EMAIL CODE IS NOT WORKING
             $subject = "Account Validation"; 
             $message = "<h1> Account Validation </h1> <br><br>";

             //DO NOT TOUCH THIS LINE
             $message .= "<h2>https://agilebts.000webhostapp.com/validate.php?mail=$mail&user=$user </h2>";

            //THIS EMAIL CODE IS NOT WORKING
             mail($mail,$subject,$message);  
        ?>
        <br><h2>Please Complete Verification Proccess</h2><br>
        <h4>You can close this window</h4>
    </div>

</body>

</html>