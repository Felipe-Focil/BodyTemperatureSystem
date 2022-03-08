<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temperature</title>
    
</head>
<body>
    
    <form method="post">
        <h1>Temperature</h1>
        <input type="text" name="name" placeholder = "Name" autocomplete = "off">
        <br><br>
        <?php
            $temp = rand_float(26,32);
            function rand_float($st_num=0,$end_num=1,$mul=100)
            {
            if ($st_num>$end_num) return false;
            return mt_rand($st_num*$mul,$end_num*$mul)/$mul;
            }   
 
            echo '<input type="number" name="temperature" value = "'.$temp.'"  >'

        ?>
        <br><br>
        <input type="submit" name= "register">
    </form>

    
    <?php
        include("register.php");
    ?>
    
</body>
</html>