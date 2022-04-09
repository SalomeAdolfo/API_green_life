<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use App\Http\Controllers\API\CategoriaController;
use App\Http\Controllers\API\Datos_bancariosController;
use App\Http\Controllers\API\Detalles_ventaController;
use App\Http\Controllers\API\DireccionesController;
use App\Http\Controllers\API\Expedientes_vendedoresController;
use App\Http\Controllers\API\ProductosController;
use App\Http\Controllers\API\VentasController;
use App\Http\Controllers\Api\UsersController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::apiResource('usuarios', UsersController::class)->names('api-usuarios');
Route::apiResource('ventas', VentasController::class)-> names('api-ventas');
Route::apiResource('expedientes_vendedores', Expedientes_vendedoresController::class)-> names('api-expedientes_vendedores');
Route::apiResource('detalles_ventas', Detalles_ventaController::class)->names('api-detalles_venta');
Route::apiResource('direcciones', DireccionesController::class)->names('api-direcciones');
Route::APIresource('productos', ProductosController::class)->names('api-productos');
Route::apiResource('datos_bancarios', Datos_bancariosController::class)->names('api-datos_bancarios');
Route::apiResource('categorias', CategoriaController::class)->names('api-categorias');
Route::middleware('auth:sanctum')->group(function(){
    
});
Route::post('/tokens/create', function (Request $request) {
    $token = $request->user()->createToken($request->token_name);

    return ['token' => $token->plainTextToken];
});

Route::post('/sanctum/token', function (Request $request) {
    $request->validate([
        'email' => 'required|email',
        'password' => 'required',
    ]);
 
    $user = User::where('email', $request->email)->first();
 
    if (! $user || ! Hash::check($request->password, $user->password)) {
        throw ValidationException::withMessages([
            'email' => ['The provided credentials are incorrect.'],
        ]);
    }
 
    return response()->json(['token'=> $user->createToken('app')->plainTextToken, $request->email, $request->password, $user->name, $user->perfil]);
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

