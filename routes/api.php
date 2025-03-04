<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;

Route::controller(AuthController::class)->prefix('usuario')->group(function () {
    Route::post('login', 'login');
    Route::post('registrar', 'registrar');
    Route::get('detalhes', 'detalhes')->middleware('jwt.auth');
    Route::get('logout', 'logout')->middleware('jwt.auth');
});