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
                echo "<h3> " . $row["mail"]. "</h3>";
              }
            } else {
              echo "0 results";
            }


            $conn->close();

            ?>
        

        <br><h2>Please Complete Verification Proccess</h2><br>
        <h4>You can close this window</h4>
    </div>

</body>

</html>