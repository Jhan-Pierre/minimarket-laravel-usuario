<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeControler;
use App\Http\Controllers\BlogControlador;
use App\Models\Usuario;
use Illuminate\Support\Facades\DB;

use function Pest\Laravel\post;

Route::get('/', [HomeControler::class, 'index']);

Route::get('/blog', [BlogControlador::class, 'index']);
Route::get('/blog/create', [BlogControlador::class, 'create']);
Route::get('/blog/{tema}', [BlogControlador::class, 'tema']);

// Route::get('/posts/{tema}/{subtema?}', function($tema, $subtema = null){
//     if ($subtema){
//         return "Aqui esta el post {$tema} del subtema {$subtema}";
//     }
//     return "Aqui esta el post {$tema}";
// });

//Get
//Post
//Put
//Patch
//Delete

Route::get('/prueba', function(){
    /* $usuario = new Usuario;

    $usuario->correo = 'carlos@gmail.com';
    $usuario->contraseña = '123456';
    $usuario->telefono = '941120980';
    $usuario->nombre = 'CarlOS';
    $usuario->apellido = 'torres';
    $usuario->id_tipo_usuario = '2';
    $usuario->id_turno = '2';
    $usuario->id_estado = '1';

    $usuario->save(); 

    return $usuario;
 */
    /* $usuario = Usuario::find(3); */

    /* $usuario = Usuario::where('nombre', 'Fabian')->first();

    $usuario->correo = 'ambrosiofabian10@gmail.com';

    return $usuario; */

    /* $usuario = Usuario::all(); */

    $usuario = DB::select('call sp_listar_usuario()');

    return $usuario;

});