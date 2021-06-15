<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ClientController;

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


Route::middleware(['auth'])->group(function () {
    Route::get('/', function () {
        return redirect()->route('users.index');
    });
    Route::resource('usuarios', UserController::class)->names('users')->parameters(['usuarios' => 'user']);
    Route::resource('clientes', ClientController::class)->names('clients')->parameters(['clientes' => 'client']);
});

require __DIR__.'/auth.php';
