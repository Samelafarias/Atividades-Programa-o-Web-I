<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PaginaController;

Route::get('/', function () {
    return view('welcome');
});

# Questão 01 - O erro é que ao envez de aspas simples esta com crase e por isso ele acaba não reconhecendo
Route::get('/sobre', [PaginaController::class, 'sobre']);

# Questão 02 - O erro diz que o metodo não existe, isso significa que o controllr esta vazio

# Questão 03 - O erro esta ocorrenso porque a view não foi criada, qunado é chamada no controller ele não é encontrado

# Questão 04 - O erro esta o correndo por conta que o arquivo criado esta com letra maiuscula e o que esta sendo iimportado esta com minuscula

# Questão 05 - O erro é que ao envez de aspas simples esta com crase e por isso ele acaba não reconhecendo
Route::get('/contato', [PaginaController::class, 'contato']);

# Questão 06 - O erro é a desconexão entre o que a rota recebe e o que o controler esta processando
Route::get('/usuario/{id}', [PaginaController::class, 'usuario']);

# Questão 07 - Basta inverter a ordem
Route::get('/produto/novo', function () {
    return "Novo Produto";
});

Route::get('/produto/{id}', function ($id) {
    return "Produto $id";
});

# Questão 08 - O erro é por conta do metodo que esta sendo utilizado
Route::get('/servicos', function () {
    return "Serviços";
});

# Questão 09 - O erro ocorre por conta de que o controller tena achar o sobre na view e ela esta em outra pasta

# Questão 10 - O erro esta ocorrendo pela dupicidade no nome, impedindo que a primeira seja executada e para corrigir basta:
Route::get('/blog', function () {
    return "Lista de Posts";
});

Route::get('/blog/categorias', function () {
    return "Categorias do Blog";
});