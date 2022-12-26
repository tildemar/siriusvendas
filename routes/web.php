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


Route::get('/',[\App\Http\Controllers\PrincipalController::class,'principal'])->name('site.index');

Route::get('/sobre-nos',[\App\Http\Controllers\SobreNosController::class,'sobreNos'])->name('site.sobrenos');

Route::get('/contato',[\App\Http\Controllers\ContatoController::class,'contato'])->name('site.contato');

Route::post('/contato',[\App\Http\Controllers\ContatoController::class,'salvar'])->name('site.contato');

Route::get('/login', function () { return 'Login' ; } )->name('site.login'); // Função de callback
     
Route::prefix('/app')->group(function(){
    Route::get('/clientes',     function () { return 'Clientes' ; }     )->name('app.clientes');
    // Route::get('/fornecedores', function () { return 'Fornecedores' ; } )->name('app.fornecedores');
    Route::get('/fornecedores', [\App\Http\Controllers\FornecedorController::class,'index'])->name('app.fornecedores');
    Route::get('/produtos',     function () { return 'Produtos' ; }     )->name('app.produtos');   
});


Route::get('/teste/{p1}/{p2}',[\App\Http\Controllers\TesteController::class,'teste'])->name('site.teste') ;

Route::fallback(function(){
    echo 'A rota acessada não existe. <a href="'.route('site.index').'">Clique aqui</a> para voltar a página inicial' ;
}) ;

// Espaço destinado a estudos

// Route::get('/sobre-nos', function () { // Função de callback
//     return 'Sobre-nós' ; 
// });

// Apresenta falha no PHP 8, já no php 7 funciona
// Route::get('/sobre-nos', 'SobreNosController@sobreNos') ; 


// Route::get('/contato', function () {
//     return 'Contato' ; 
// });

// Apresenta falha no PHP 8, já no php 7 funciona
// Route::get('/contato','ContatoController@contato') ;

// passagem de parâmetros

// Route::get('/contato/{nome}/{assunto?}', function (string $nome, $assunto = 'assunto particular') {
//     echo "Estamos aqui $nome para tratarmos de $assunto." ;
// });

// Route::get(
//     '/contato/{nome}/{idade}',
//     function( // Função de callback
//         string $nome  = 'Falta informar o nome',
//         int    $idade = 0
//     ) {
//         echo "Nome: $nome - Idade: $idade" ;
//     }
// )->where('nome','[A-Za-z]+')->where('idade','[0-9]+') ;

/*
Route::get('/', function () {
    return 'Iniciado o Sirius !!!' ; // 2022/12/15
    // return view('welcome');
});
*/

// Route::get('/', function (){
//     return view('bemvindo', ['name' => 'Samantha']) ;
// });

