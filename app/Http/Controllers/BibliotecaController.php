<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BibliotecaController extends Controller
{
    public function index(){

        return view ('Biblioteca.index');
    }
    // public function index()
    // {

    // }

    //create creara un nuevo prestamo 

public function getlibros()
{
   
   
    
}
// show mostrara los prestamos del usuario
public function showLibros(){
    $libros = DB::select('select * from libros ');
    return view('Biblioteca.show', ['libros' => $libros]);


}
public function getperfil(){


    //$user = DB::select('select * from users  ');
    $usuario_id=  auth()->id();
 
   // $user = DB::select("select * from users where id= ' $usuario_id' limit  1;");
    return view('Biblioteca.perfil');
    

}

public function createPrestamo(){
    return view('Biblioteca.create');
    


}
public function  showLibrosPrestados(){

    return view('Biblioteca.showprestamos');
}
}
