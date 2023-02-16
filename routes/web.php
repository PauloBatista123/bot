<?php

use App\Http\Controllers\GerenteController;
use App\Http\Controllers\LogController;
use App\Http\Controllers\ServicoController;
use App\Http\Controllers\UserController;
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

Route::group(['middleware'=>'auth'], function(){
    Route::get('/logs', [LogController::class, 'dashboard'])->name('dashboard.index');
    Route::get('/servicos', [ServicoController::class, 'index'])->name('servico.index');
    Route::get('/servicos/pld', [ServicoController::class, 'pld'])->name('servico.pld');

    Route::get('/gerentes', [GerenteController::class, 'index'])->name('gerente.index');
    Route::get('/login/logout', [UserController::class, 'logout'])->name('login.logout');
});

Route::get('/login', [UserController::class, 'login'])->name('login.index');
Route::post('/login', [UserController::class, 'logar'])->name('login.logar');
