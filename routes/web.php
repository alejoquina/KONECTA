<?php

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VentasController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Auth::routes(['register'=> false, 'reset'=> false, 'login' => false]);

Route::get('/',function(){
    return view('index');
});

Route::get('/listas',[ProductoController::class,'getAll'])->name('listas');
Route::get('/productos/{id}/add',[ProductoController::class,'add'])->name('add');

Route::resources(
    [
        'categorias' => CategoriaController::class,
        'productos' => ProductoController::class,
        'ventas' => VentasController::class
    ]
);





