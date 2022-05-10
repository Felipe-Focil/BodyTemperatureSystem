<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="Ejercicio05.js"></script>

    <title>JQuery</title>
</head>

<body>
    <table align="center">
        <FORM name="fvalida" method="POST">
        <td align="left">Id:</td>
        <td colspan="3" ><INPUT TYPE="Text" name="id" VALUE="" SIZE="30"></td>
            <tr>
                <td colspan="7">
                    <input type="radio" name="operando" value="mon">Monday
                    <input type="radio" name="operando" value="tue">Tuesday
                    <input type="radio" name="operando" value="wen">Wednesday
                    <input type="radio" name="operando" value="thr">Thursday
                    <input type="radio" name="operando" value="fri">Friday
                    <input type="radio" name="operando" value="sat">Saturday
                    <input type="radio" name="operando" value="sun">Sunday
                </td>
            </tr>
            <td align="left">Temperature:</td>
            <td><INPUT TYPE="Number" name="Temperature" MAX="4" width="10px"></td>
            <br>
            <td>
                <input type="button" value="Ok" onclick="valida_envia()" style="background-color: rgb(205, 249, 72);"> </td>
                
                
            </td>
            <?php
                    include("UpdateTemp.php");
                ?>
        </FORM>
    </table>
    <div id="divMsg" style="background: green; display: none; color: white; " align=center>
        Your temperature is normal
    </div>
</body>
<script type="text/javascript">
  function valida_envia(){
  
      document.fvalida.submit();
      

      
  }
</script>
</html>
