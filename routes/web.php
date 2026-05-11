<?php

use App\Http\Controllers\QuestionController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/{schoolSlug}/{examSlug}/questions', [QuestionController::class, 'index'])
    ->name('questions.index');

Route::get('/{schoolSlug}/{examSlug}/question/{id}', [QuestionController::class, 'show'])
    ->name('questions.show');
