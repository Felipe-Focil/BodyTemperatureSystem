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
        <h1>Account Validate</h1>
        <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "bts";
            $user = "patient";
            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);
            // Check connection
            if ($conn->connect_error) {
              die("Connection failed: " . $conn->connect_error);
            }
            
            $sql = "SELECT mail FROM $user";
            $result = $conn->query($sql);
            
            if ($result->num_rows > 0) {
              // output data of each row
              while($row = $result->fetch_assoc()) {
                  $mail = $row["mail"];
                echo "<h3> " . $row["mail"]. "</h3>";
              }
            } else {
              echo "0 results";
            }
            $sql = "UPDATE  $user SET validated = 1 WHERE mail = '$mail' ;";
            $result = $conn->query($sql);

            $conn->close();

            ?>
        

        
        <h4>You can close this window</h4>
    </div>

</body>

</html>