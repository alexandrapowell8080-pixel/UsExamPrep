<?php

use App\Http\Controllers\StudyNotesController;
use App\Http\Controllers\QuestionController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');


// ==================== STUDY NOTES ROUTES. ====================
Route::prefix('study-notes')
    ->name('study-notes.')
    ->controller(StudyNotesController::class)
    ->group(function () {

        Route::get('/{school:slug}', 'index')
            ->name('outline');

        Route::get('/{school:slug}/{section:slug}/{topic:slug}', 'show')
            ->name('content');

    });


Route::get('/{schoolSlug}/{examSlug}/questions', [QuestionController::class, 'index'])
    ->name('questions.index');

Route::get('/{schoolSlug}/{examSlug}/question/{id}', [QuestionController::class, 'show'])
    ->name('questions.show');
