<html>
<head>
<TItle>PERFIL</TItle>
</head>
<body>
    <?php

    use Illuminate\Support\Facades\DB;
    $usuario_id=  auth()->id();
   
    $user = DB::select("select * from users where id= ' $usuario_id' limit 1 ");

   echo $user[0]->name;
 

    
    
    
    
   ?>  
</body>
</html>