<?php

use App\Http\Controllers\GerenteController;
use App\Http\Controllers\LogController;
use App\Http\Controllers\ServicoController;
use App\Http\Controllers\StatusController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('/log', [LogController::class, 'salvar'])->name('log.salvar');
Route::post('/servico', [ServicoController::class, 'salvar'])->name('servico.salvar');
Route::get('/gerentes/{pa}/{nome}', [GerenteController::class, 'show'])->name('gerente.show');

Route::post('/status', [StatusController::class, 'status'])->name('status');
