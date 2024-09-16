<?php

use App\Http\Controllers\CadastroController;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->middleware('auth');

Route::get('/actions/create', [CadastroController::class, 'index'])->middleware('auth');
Route::post('/pets', [CadastroController::class, "store"]);
Route::get('/pets/{id}', [CadastroController::class, "show"]);
Route::get('/dashboard', [CadastroController::class, 'dashboard'])->middleware('auth');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
]);
