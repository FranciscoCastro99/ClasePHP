<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CursoController;


Route::get('/', function () {
    return 'es primo';
});

route::get('/curso/{dato1}', [CursoController::class,'esPrimo']);
route::get('/curso2/{dato1}/{dato2}', [CursoController::class,'sonAmigos,sumarDivisoresPropios']);
