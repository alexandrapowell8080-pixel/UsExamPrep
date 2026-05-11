<?php

use App\Http\Controllers\StudyNotesController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\CertificationController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/certifications', function () {
    return view('certifications');
})->name('certifications');
Route::get('/cert/{slug}', [CertificationController::class, 'show'])->name('cert.show');

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
