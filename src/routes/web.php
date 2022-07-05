<?php

use Illuminate\Support\Facades\Route;
use eightbityard\Contact\Http\Controllers\ContactController;

Route::get('/contact', [ContactController::class,'index']);
Route::post('/contact', [ContactController::class,'send'])->name('contact');
