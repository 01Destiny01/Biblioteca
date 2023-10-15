
<?php
 function alquilarLibro(Request $request)
{
    $libroId = $request->input('libro_id');
 ECHO $libroId;
    return redirect()->route('/Biblioteca/showLibros')->with('success', 'Libro alquilado con éxito.');
}
?>
<html>
<head> <h1>{{$libroId}}</h1>
    <head>
</html>









































<!-- </html> -->



