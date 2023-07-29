<?php

use App\Http\Controllers\Admin\{SupportController};
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
 

Route::get('/supports', [SupportController::class, 'index'])->name('support.index');

Route::get('/contact', [ContactController::class, 'contact']);

Route::get('/', function () {
    return view('welcome');
});
