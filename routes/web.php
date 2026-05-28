<?php

use App\Http\Controllers\StudyNotesController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\CertificationController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/about', function () {
    return view('pages.about');
})->name('pages.about');

Route::get('/terms-of-service', function () {
    return view('pages.terms');
})->name('pages.terms');

Route::get('/privacy-policy', function () {
    return view('pages.privacy');
})->name('pages.privacy');

Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');

Route::get('/certification/{slug}', [CertificationController::class, 'show'])->name('certification.show');

Route::prefix('study-notes')
    ->name('study-notes.')
    ->controller(StudyNotesController::class)
    ->group(function () {

        Route::get('/{school:slug}', 'index')
            ->name('outline');

        Route::get('/{school:slug}/{section:slug}/{topic}', 'show')
            ->name('content');

        // Route::get('/{school:slug}/{section:slug}/{topic:slug}/edit', 'edit')
        //     ->name('edit');

        Route::get('/{school:slug}/{section:slug}/{topic:slug}/sources', 'sources')
            ->name('sources');
        // Route::get('/{school:slug}/{section:slug}/{topic:slug}/sources/edit', 'sourcesEdit')
        //     ->name('sourcesEdit');

        // Route::put('/update/{section:slug}/{topic:slug}', 'update')
        //     ->name('update');

        // Route::put('/update-sources/{topic:slug}', 'updateSources')
        //     ->name('update_sources');


    });

Route::get('questions/{schoolSlug}/{examSlug}/', [QuestionController::class, 'index'])
    ->name('questions.index');

Route::get('questions/{schoolSlug}/{examSlug}/question/{id}', [QuestionController::class, 'show'])
    ->name('questions.show');
