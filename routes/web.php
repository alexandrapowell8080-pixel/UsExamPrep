<?php

use App\Http\Controllers\StudyNotesController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});



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
