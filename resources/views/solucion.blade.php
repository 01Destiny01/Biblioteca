<html>

    <head>
        <h1>Bienvenido</h1>
       
    </head>
 

</html>


<?php

session_start(); //metodo del servidor para inicializar la sesion


if(isset($_POST['enviar']))
{
$login = $_POST['login'];
echo $login;

$contrasena = $_POST['contrasena'];


//$_SESSION['login'] = $suma; #recupero el valor del index, el cual se comparte en la sesion

}
?>
