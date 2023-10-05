<?php 

include("con_db.php");

if (isset($_POST['enviar'])) {
    if (strlen($_POST['login']) >= 1 && strlen($_POST['contrasena']) >= 1) {
	    $login = trim($_POST['login']);
	    $contrasena = trim($_POST['contrasena']);
	    $consulta = "INSERT INTO usuarios(nombre, contrasena) VALUES ('$login','$contrasena')";
	    $resultado = mysqli_query($conex,$consulta);
	    if ($resultado) {
	    	?> 
	    	echo "te has logueado perfectamente"
           <?php
	    } else {
	    	?> 
	    	echo "¡Ups ha ocurrido un error!"
           <?php
	    }
    }   else {
	    	?> 
	    	<h3 class="bad">¡Por favor complete los campos!</h3>
           <?php
    }
}

?>