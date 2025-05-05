<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

Route::get('/', function () {
    return view('home');
})->name('home');


Route::middleware(['auth', 'is_admin'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
    Volt::route('settings/password', 'settings.password')->name('settings.password');
    Volt::route('settings/appearance', 'settings.appearance')->name('settings.appearance');
});

Route::middleware(['auth', 'is_admin'])->group(function () {
    Route::prefix('dashboard')->name('admin.')->group(function () {
        Route::get('/', \App\Livewire\Admin\Dashboard::class)->name('dashboard');
        Route::prefix('blogs')->name('blogs.')->group(function () {
            Route::get('/', \App\Livewire\Admin\Blogs\Index::class)->name('index');
            Route::get('/create', \App\Livewire\Admin\Blogs\Create::class)->name('create');
            Route::get('/{id}/edit', \App\Livewire\Admin\Blogs\Edit::class)->name('edit');
        });
    });
});

require __DIR__ . '/auth.php';
