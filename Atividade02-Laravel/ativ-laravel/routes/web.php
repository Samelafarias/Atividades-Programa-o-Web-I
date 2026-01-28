<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\AlunoController;
use App\Http\Controllers\DisciplinaController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/usuarios',[ProdutoController::class,'usuarios'])->name('produto.usuarios');


Route::get('/cursos', [CursoController::class, 'index']);
Route::get('/cursos/novo', [CursoController::class, 'create']);
Route::post('/cursos', [CursoController::class, 'store']);
Route::get('/cursos/listagem', [CursoController::class, 'listagem']);
Route::get('/cursos/{id}', [CursoController::class, 'show']);
Route::resource('alunos', AlunoController::class);
Route::get('/disciplinas', [DisciplinaController::class, 'index']);
Route::get('/disciplinas/novo', [DisciplinaController::class, 'create']);
Route::get('/disciplinas/{id}', [DisciplinaController::class, 'show']);
Route::post('/produtos', [ProdutoController::class, 'store']);
Route::get('/produtos/create', [ProdutoController::class, 'create']);