<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PaginaController;

Route::get('/', function () {
    return view('welcome');
});

# Questão 01
Route::get('/ola', function(){
    return "Olá, Laravel";
});

# Questão 02
Route::get('/curso/{ads}', function($ads){
    return "Curso de " .$ads;
});

# Questão 03
Route::get('/curso/web', function() {
    return "Disciplina Programação Web I";
});

# Questão 04
Route::get('/sobre', function(){
    return view('sobre');
});

# Questão 05
Route::get('/contato', function(){
    return view('contato');
});

# Questão 06
Route::get('/institucional/missao', function () {
    return view('missao');
});

# Questão 07
Route::get('/empresa', [PaginaController::class, 'empresa']);

# Questão 08
Route::get('/servicos', [PaginaController::class, 'servicos']);

# Questão 09
Route::get('/portifolio', [PaginaController::class, 'portifolio']);
Route::get('/blog', [PaginaController::class, 'blog']);

# Questão 10
Route::get('/equipe', [PaginaController::class, 'equipe']);

# Questão 11
Route::get('/usuario/{nome}', function ($nome) {
    return "Usuário: " . $nome;
});

# Questão 12
Route::get('/produto/{id}', function($id){
    return "O ID do produto é:" .$id;
});