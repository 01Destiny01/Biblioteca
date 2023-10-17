
    <?php

    use Illuminate\Support\Facades\DB;
    $usuario_id=  auth()->id();
   
    $user = DB::select("select * from users where id= ' $usuario_id' limit 1 ");

   ?> 
<html>
   <head>
      <link  rel="stylesheet" href= {{asset('css/estilo.css') }}> 

   </head>

      <body>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <div class="card"> <i class="fa fa-align-cente" aria-hidden="true"></i>
          <img style="background-image: url('{{ asset('img/user.jpg')}}');" style="width:auto">
          <h1>{{$user[0]->name}}</h1>
          <h1>{{$user[0]->email}}</h1>
          <h5> since {{$user[0]->created_at}}</h5>
          <a href="#"><i class="fa fa-user"></i></a>
          <a href="#"><i class="fa fa-book"></i></a>
          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{ route('logout') }}"
               onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </div>


        </div>
</body>
</html>