<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Sign Up</title>
</head>

<body>
   <table align="center" >
<FORM  name="fvalida" method="POST">
<tr align="center">
        <td colspan="3"><b><h1 style="color:#060cab;">SIGN UP</h1></b></td>
    </tr>
<tr>
<td align="left">Name:</td>
<td colspan="3" ><INPUT TYPE="Text" id="name" VALUE="" SIZE="30" NAME="name"></td>
</tr>
<br>
<tr>
<td align="left">Last Name:</td>
<td colspan="3" ><INPUT TYPE="Text" id="lname" VALUE="" SIZE="30" NAME="lname"></td>
</tr>
<br>
<tr>
<td align="left">Email:</td>
<td colspan="3" ><INPUT VALUE="" id="email" TYPE="text" SIZE="30" NAME="email" ></td>
</tr>
<br>
<tr>
<td align="left">Password: </td>
<td colspan="3" width="90px"><INPUT VALUE="" id="password" TYPE="password" SIZE="20" NAME="password" ></td>
</tr>
<tr>
<td align="left">Choose the role: </td>
</tr>
 <tr>
          <td colspan="3">
            <input type="radio" name="operando" value="1">Patient
            <input type="radio" name="operando" value="2">Doctor
            <input type="radio" name="operando" value="3">Admin
          </td>
</tr>
<tr>
<td align="left"></td>
<td colspan="2">
<input type="button" value="SIGN_UP" onclick="valida_envia()" style="background-color: rgb(205, 249, 72);"></td>

     <?php
         include("register.php");
    ?>
</tr>		
</form>
</table>
</body>

<script type="text/javascript">
  function valida_envia(){
    if(document.fvalida.name.value==""){
        alert("A name must be entered")
        document.fvalida.name.focus()
        return 0;
      }
      if(document.fvalida.lname.value==""){
        alert("A last name must be entered")
        document.fvalida.lname.focus()
        return 0;
      }
      if(document.fvalida.email.value==""){
        alert("An email must be entered")
        document.fvalida.email.focus()
        return 0;
      }
      if(document.fvalida.password.value==""){
        alert("A password must be entered")
        document.fvalida.password.focus()
        return 0;
      }
  if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/.test(document.fvalida.email.value)) //Validar email
  {
  }
  else {
    alert("The email is not correct");
    document.fvalida.email.focus()
    return 0;
  }
  if(document.fvalida.operando.value==""){
        alert("You must select a role")
        return 0;
      }
      
  alert("Succesfull Sign Up. Please check your email")
  
      document.fvalida.submit();
      

      
  }
</script>


</html>
