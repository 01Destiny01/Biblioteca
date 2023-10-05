<!DOCTYPE html>
<html>
  <head> 
  <link rel="stylesheet" type="text/css" href="..\views\estilo.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body >
<!-- ejercicio login -->
<form method="post" action="/solucion">   <!-- action define a donde te lleva el formulario una vez se recarga-->
<form class="row g-3">
  <div class="col-md-4">
    <label for="login" class="form-label">LOGIN</label>
    <input type="text" class="form-control" name = "login" id="login" required>
    </br>
  </div>

  <div class="col-md-4">
    <label for="contrasena" class="form-label">CONTRASEÑA</label>
    <input type="text" class="form-control" name = "contrasena"id="contrasena" required>
  </div>
 
  <div class="col-12">
    <button class="btn btn-primary" type="submit"  name = "enviar" id = "enviar">Registrarse</button>
  </div>
</form>
<?php 

if(isset($_POST['enviar']))
{
$login = $_POST['login'];
$contrasena = $_POST['contrasena'];
include("register.php");
}
?>

</body>
</html>