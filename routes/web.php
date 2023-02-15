<?php

use App\Http\Controllers\GerenteController;
use App\Http\Controllers\LogController;
use App\Http\Controllers\ServicoController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/logs', [LogController::class, 'dashboard'])->name('dashboard.index');
Route::get('/servicos', [ServicoController::class, 'index'])->name('servico.index');

Route::get('/gerentes', [GerenteController::class, 'index'])->name('gerente.index');
