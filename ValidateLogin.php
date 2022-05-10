<?php
    $usuario = $_POST['correo'];
    $contraseña = $_POST['contraseña'];
    session_start();
    $_SESSION['correo'] = $usuario;

    $conexion = mysqli_connect("localhost", "id18656049_team2", "#AgileAdmin2022", "id18656049_bts");
    $consulta =  "SELECT * FROM patient WHERE email = '$usuario AND contraseña = '$contraseña'";
    $resultado = mysqli_query($conexion,$consulta);

    $filas=mysqli_num_rows($resultado);

    if($filas){
      
        header("location:BTS_Patient.html");
    
    }else{
        ?>
        <?php
        include("Login_P.html");
    
      ?>
      <h1 class="bad">ERROR DE AUTENTIFICACION</h1>
      <?php
    }
    mysqli_free_result($resultado);
    mysqli_close($conexion);


?>