<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductosController;
use App\Models\Productos;


//crear los roles de usuario vendedor y comprador  
//use Spatie\Permission\Models\Role;
//Role::create(['name'=>'Vendedor']);
//Role::create(['name'=>'Comprador']);


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();


//Declaración de ritas para un vendedor
Route::group([['auth', 'role:Vendedor']], function(){
    //Aquí van todas las rutas de los vendedores.
    Route::resource('productos', ProductosController::class)->except(['show']);
});


//Declara
Route::group(['prefix'=> 'Comprador', 'middleware'=>['auth', 'role:Comprador']], function(){
    
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth']], function(){
    
});
