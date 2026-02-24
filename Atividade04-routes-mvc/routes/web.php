<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\SobreNosController;
use App\Http\Controllers\ContatoController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\FornecedorController;
use App\Http\Controllers\ProdutoController;

Route::get('/', [PrincipalController::class, 'index'])->name('principal');
Route::get('/sobrenos', [SobreNosController::class, 'index'])->name('sobrenos');
Route::get('/contato', [ContatoController::class, 'index'])->name('contato');
Route::get('/login', [LoginController::class, 'index'])->name('login');

Route::prefix('app')->group(function () {
    Route::get('/clientes', [ClienteController::class, 'index'])->name('app.clientes');
    
    Route::get('/fornecedores/{nome}/{status}/{categoria}', [FornecedorController::class, 'index'])->name('app.fornecedores');
    
    Route::get('/produtos/{nome?}/{preco?}', [ProdutoController::class, 'index'])->name('app.produtos');
});