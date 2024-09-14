<?php

use App\Http\Controllers\CadastroController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/actions/create', [CadastroController::class, 'index']);
Route::post('/pets', [CadastroController::class, "store"]);