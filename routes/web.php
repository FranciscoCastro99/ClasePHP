<?php
use App\Http\Controllers\CursoDosController;
use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\CursoController;


Route::get('/', function () {
    return view('Formulario1');
});



Route::get('/Formulario1',[CursoDosController::class,'create1']);
Route::post('/Formulario1',[CursoDosController::class,'storeUno'])->name('curso.store1');
Route::get('/Formulario2',[CursoDosController::class,'create2']);
Route::post('/Formulario2',[CursoDosController::class,'storeDos'])->name('curso.store2');
Route::get('/Formulario3',[CursoDosController::class,'create3']);
Route::post('/Formulario3',[CursoDosController::class,'storeTres'])->name('curso.store3');
Route::get('/Formulario4',[CursoDosController::class,'create4']);
Route::post('/Formulario4',[CursoDosController::class,'storeCuadratica'])->name('curso.store4');
// route::get('/curso/{dato1}', [CursoController::class,'esPrimo']);
// route::get('/curso2/{dato1}/{dato2}', [CursoController::class,'sonAmigos,sumarDivisoresPropios']);
