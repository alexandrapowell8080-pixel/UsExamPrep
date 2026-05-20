<?php

use App\Http\Controllers\StudyNotesController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\CertificationController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/certification/{slug}', [CertificationController::class, 'show'])->name('certification.show');

Route::prefix('study-notes')
    ->name('study-notes.')
    ->controller(StudyNotesController::class)
    ->group(function () {

        Route::get('/{school:slug}', 'index')
            ->name('outline');

        Route::get('/{school:slug}/{section:slug}/{topic:slug}', 'show')
            ->name('content');

        Route::get('/{school:slug}/{section:slug}/{topic:slug}/edit', 'edit')
            ->name('edit');

        Route::put('/update/{topic:slug}', 'update')
            ->name('update');
        

    });

Route::get('questions/{schoolSlug}/{examSlug}/', [QuestionController::class, 'index'])
    ->name('questions.index');

Route::get('questions/{schoolSlug}/{examSlug}/question/{id}', [QuestionController::class, 'show'])
    ->name('questions.show');
