<?php

use App\Http\Controllers\QuestionController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/cert/{schoolSlug}', function ($schoolSlug) {
    return redirect()->route('questions.index', ['schoolSlug' => $schoolSlug, 'examSlug' => 'cna-practice-test']);
})->name('schools.show');

Route::get('/{schoolSlug}/{examSlug}/questions', [QuestionController::class, 'index'])
    ->name('questions.index');

Route::get('/{schoolSlug}/{examSlug}/question/{id}', [QuestionController::class, 'show'])
    ->name('questions.show');
