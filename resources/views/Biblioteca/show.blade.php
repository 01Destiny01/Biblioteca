


<html style ="background-color:#84abca">
<head>
  <link  rel="stylesheet" href= {{asset('css/estilo.css') }}> 


</head>
<body style=" width:auto; height: auto; text-align:center; " >
  <?php
  
  use Illuminate\Support\Facades\DB;
  $libros = DB::select('select * from libros');
  session_start();
?>
@foreach ($libros as $libro)
    

  <div class="padreCard">
    <div class="cardHijo">
      <p class="card-text">{{$libro->titulo}}</p>
      <p class="autorlibro">{{$libro->editorial}}</p>
      <a href="/Biblioteca/createPrestamo" name = "libroid" value ="{{$libro->id}}" class="btnAlquilar">Alquilar</a>
    </div>
        
    @endforeach
  </div>
<div class="btn1">
  <a href = "/Biblioteca/showLibrosPrestados" type="button">ver prestamos</a>
</div>
  </div>


<h1></h1>
<h1></h1>
</body>
</html>
