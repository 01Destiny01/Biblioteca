


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

 <form method="POST" action="{{ route('alquilar') }}">
  @csrf
 <div class="padreCard">
   <div class="cardHijo">
     <p class="card-text">{{$libro->titulo}}</p>
     <p class="autorlibro">{{$libro->editorial}}</p>
     <input type="number"  readonly  name="libro_id" value="{{ $libro->id }}"/> 
     <button type="submit">Alquilar</button>
   </div>
 </form>
 
 @endforeach

 
 <a href="/home" > Volver </a>
 </div>


<h1></h1>
<h1></h1>
</body>
</html>
