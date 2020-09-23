<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
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

// Route::get('/', function () {
    // return view('welcome');
// });

// Route::get('/', function() {return view('index');});
Route::get('/', [MainController::class, 'index']);

Route::get('novo-servico', [MainController::class, 'cadastrar']);
Route::get('lista-servicos', [MainController::class, 'listar']);
Route::get('sobre', [MainController::class, 'sobre']);
Route::get('contato', [MainController::class, 'contato']);
