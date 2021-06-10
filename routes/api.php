<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PessoasController;

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

Route::get('/pessoas',[PessoasController::class, 'index'])->name('pessoas.index');
Route::get('/novo/pessoa', [PessoasController::class, 'novo'])->name('pessoas.novo');
Route::post('/novo/pessoa', [PessoasController::class,'store'])->name('pessoas.store');
Route::get('/editar/{id}', [PessoasController::class, 'editar'])->name('pessoas.editar');
Route::post('/editar/{id}', [PessoasController::class, 'edit'])->name('pessoas.edit');
Route::get('/excluir/{id}', [PessoasController::class, 'excluir'])->name('pessoas.excluir');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
