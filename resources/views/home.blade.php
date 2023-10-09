<html>
<head>
<h1>BIBLIOTECA</h1>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<link href="{{ URL::asset('css/estilo.css') }}" rel="stylesheet">

<nav class="navbar bg-body-tertiary">
  <form class="container-fluid justify-content-start" >
    @CSRF
    <button class="btn btn-outline-success me-2" type="button" onClick="location.href='/login'">Iniciar sesion</button>
    <button class="btn btn-outline-success me-2" type="button" onClick="location.href='/registro'">Registrarse</button>
 </br>
 </form>
    <button class="btn btn-sm btn-outline-secondary" type="button" onClick="location.href='/informacion'">Informacion</button>

</nav>

</head>
<body>


</body>

</html>
