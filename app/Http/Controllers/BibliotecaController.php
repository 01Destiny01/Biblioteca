<?php

namespace App\Http\Controllers;

use App\Models\Prestamo;
use App\Models\Usuario;
use Illuminate\Auth\Events\Logout;
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
public function cerrarsesion(){
return view ('Biblioteca.logout');

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

public function alquilarLibro(Request $request)
{
    $usu_id=  auth()->id();
    $lib_Id = $request->input('libro_id');
    // $prestamo = DB::insert("insert into prestamos(libro_id,usuario_id) values (' $libroId ','$usuario_id ')");
    // print_r($libroId);
    $prestamo = new Prestamo;
    $prestamo->libro_id = $request->$lib_Id;
    $prestamo->usuario_id = $request->$usu_id;
    $prestamo->save();
    return view('Biblioteca.showprestamos');



}
public function  showLibrosPrestados(){

    return view('Biblioteca.showprestamos');
}
}
