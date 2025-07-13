<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


use App\Http\Controllers\SolicitacaoController;

Route::get('/', function () {
    return redirect('/solicitacaos');
});

Route::resource('solicitacaos', SolicitacaoController::class);
