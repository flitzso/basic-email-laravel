<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\EmailController;

// Rota para exibir o formulário de envio de e-mail
Route::get('/send-email', function () {
    return view('send-email');
});

// Rota para processar o envio do e-mail
Route::post('/send-email', [EmailController::class, 'sendEmail'])->name('send.email');
