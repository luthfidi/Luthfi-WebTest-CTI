<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\TrialController;
use App\Http\Controllers\LanguageController;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/thank-you', [PageController::class, 'thankYou'])->name('thank-you');
Route::post('/trial', [TrialController::class, 'submit'])->name('trial.submit');
Route::get('/language/{locale}', [LanguageController::class, 'switch'])->name('language.switch');