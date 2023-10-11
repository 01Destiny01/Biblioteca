


<html style ="background-color:#84abca">
<head>
  <link  rel="stylesheet" href= {{asset('css/estilo.css') }}> 


</head>
<body style=" width:auto; height: auto; text-align:center; " >
  <?php
  
  use Illuminate\Support\Facades\DB;
  $libros = DB::select('select * from libros');

?>
  <div class="padreCard">
    <div class="cardHijo">
      <p class="card-text">{{print_r($libros[0]->titulo)}}</p>
      <p class="autorlibro">{{print_r($libros[0]->editorial)}}</p>
      <a href="/Biblioteca/createPrestamo" class="btnAlquilar">Alquilar</a>
    </div>
  
<div class="cardHijo">
  <p class="card-text">{{print_r($libros[1]->titulo)}}</p>
  <p class="autorlibro">{{print_r($libros[1]->editorial)}}</p>
  <a href="/Biblioteca/createPrestamo"  class="btn btn-primary">Alquilar</a>
</div>
<div class="cardHijo">
  <p class="card-text">{{print_r($libros[2]->titulo)}}</p>
  <p class="autorlibro">{{print_r($libros[2]->editorial)}}</p>
  
  <a href="#" class="btn btn-primary">Alquilar</a>
</div>

  </div>
<div class="btn1">
  <button class="btn btn-primary" type="button">ver prestamos</button>
</div>
  </div>


<h1></h1>
<h1></h1>
</body>
</html>
