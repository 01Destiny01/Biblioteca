


<html style ="background-color:#84abca">
<head>


  <link  rel="stylesheet" href= {{asset('css/estilo.css') }}> 

</head>
<body style=" width:auto; height: auto; text-align:center; " >
    <?php
    use Illuminate\Support\Facades\DB;
     $usuId = auth()->id();
    $prestamos = DB::select("select l.titulo,l.id from prestamos p, libros l, users u where p.usuario_id = u.id and p.libro_id = l.id and u.id = ' $usuId ' and p.fecha_devolucion is null ");
      ?>
 
      @foreach ($prestamos as $prestamo)
     <form method="POST" action="{{ route('DevolverLibro') }}">
      @csrf
     <div class="padreCard">
       <div class="cardHijo">
         <p class="card-text">{{$prestamo->titulo }}</p>
         <input type="number"  readonly  name="id" value="{{ $prestamo->id }}"/> 
         <button type="submit">Devolver</button>
       </div>
     </form>
     @endforeach
     </div>
     @if ($prestamos != null)
         <a href="/home" >Volver </a>
     @endif
     
</body>
</html>
