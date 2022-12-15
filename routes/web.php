<?php

use Illuminate\Support\Facades\Route;

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

/*
Route::get('/', function () {
    return 'Iniciado o Sirius !!!' ; // 2022/12/15
    // return view('welcome');
});
*/

Route::get('/',[\App\Http\Controllers\PrincipalController::class,'principal']);

// Route::get('/sobre-nos', function () {
//     return 'Sobre-nós' ; 
// });

// Apresenta falha no PHP 8, já no php 7 funciona
// Route::get('/sobre-nos', 'SobreNosController@sobreNos') ; 

Route::get('/sobre-nos',[\App\Http\Controllers\SobreNosController::class,'sobreNos']);


// Route::get('/contato', function () {
//     return 'Contato' ; 
// });

// Apresenta falha no PHP 8, já no php 7 funciona
// Route::get('/contato','ContatoController@contato') ;

Route::get('/contato',[\App\Http\Controllers\ContatoController::class,'contato']);
