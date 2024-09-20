<?php

use App\Http\Controllers\CadastroController;
use App\Http\Controllers\MedicoAuthController;
use App\Http\Controllers\MedicoController;
use App\Http\Controllers\MedicoRegisterController;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->middleware('auth');

// Pets Routes
Route::get('/actions/create', [CadastroController::class, 'index'])->middleware('auth');
Route::get('/atendimento', [CadastroController::class, 'atendimento'])->middleware('auth');
Route::get('/atendimento', [MedicoController::class, 'indexMedico']);
Route::post('/pets', [CadastroController::class, "store"]);
Route::get('/pets/{id}', [CadastroController::class, "show"]);
Route::get('/dashboard', [CadastroController::class, 'dashboard'])->middleware('auth');
Route::post('/atendimento', [MedicoController::class, 'store']);


// Medico Routes
Route::get('/', [MedicoController::class, 'index'])->middleware('auth');
Route::get('medico/login', [MedicoAuthController::class, 'showLoginForm'])->name('medico.login');
Route::post('medico/login', [MedicoAuthController::class, 'login']);
Route::post('medico/logout', [MedicoAuthController::class, 'logout'])->name('medico.logout');
// Rotas de registro de médicos
Route::get('medico/register', [MedicoRegisterController::class, 'showRegisterForm'])->name('medico.register');
Route::post('medico/register', [MedicoRegisterController::class, 'register'])->name('medico.register.submit');

// Dashboard de médicos
Route::middleware(['auth:medico'])->group(function () {
    Route::get('medico/dashboard', function () {
        return view('medico.dashboard');
    })->name('medico.dashboard');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
]);
