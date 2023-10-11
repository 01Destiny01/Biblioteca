


<html style ="background-color:#84abca">
<head>


  <link  rel="stylesheet" href= {{asset('css/estilo.css') }}> 

</head>
<body style=" width:auto; height: auto; text-align:center; " >
  <?php
  
  use Illuminate\Support\Facades\DB;
  $usuarioid = auth()->id();
  $prestamos = DB::select("select * from prestamos where usuario_id = '$usuarioid'");
  session_start();
  ?>
  <table>
   
  @foreach ($prestamos as $prestamo) 
<table class="table">
  <thead>
    <tr>
      <th></th>
      <th></th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td scope="row"></td>
      <td>{{$prestamo->id}} </td>
      <td> {{$prestamo->usuario_id}}</td>
    </tr>
    <tr>
      <td scope="row"></td>
      <td></td>
      <td></td>
    </tr>
  </tbody>
</table>

    echo usuario tiene en uso el libro :{{$prestamo->id}} 
  echo usuario creador: 
      </th>
    </thead>
    <tbody>
  
</table>
@endforeach
  
  </div>


<h1></h1>
<h1></h1>
</body>
</html>
