<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\ThemeController;
use App\Http\Controllers\WorkController;
use App\Http\Middleware\Admin;
use Illuminate\Support\Facades\Route;


//Theme Controller Routes
Route::controller(ThemeController::class)->name('theme.')->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/about', 'about')->name('about');
    Route::get('/work', 'work')->name('work');
    Route::get('/contact', 'contact')->name('contact');
});

//Contact Route
Route::post('contact/store', [ContactController::class, 'store'])->name('contact.store');
//Work Route
// Route::resource('works', WorkController::class);

// Route::get('my-work', [WorkController::class, 'myWork'])->name('work.my-work');
Route::middleware(['auth', Admin::class])->group(function () {
    Route::resource('works', WorkController::class);
    Route::get('works/my-work', [WorkController::class, 'myWork'])->name('works.my-work');
});




require __DIR__ . '/auth.php';