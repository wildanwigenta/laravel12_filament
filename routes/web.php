<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');
Route::get('/filament', function () {
    return view('filament');
})->middleware(['auth'])->name('filament');
Route::get('/filament/resources', function () {
    return view('filament.resources');
})->middleware(['auth'])->name('filament.resources');
Route::get('/filament/resources/users', function () {
    return view('filament.resources.users');
})->middleware(['auth'])->name('filament.resources.users');
Route::get('/filament/resources/posts', function () {
    return view('filament.resources.posts');
})->middleware(['auth'])->name('filament.resources.posts');
Route::get('/filament/resources/comments', function () {
    return view('filament.resources.comments');
})->middleware(['auth'])->name('filament.resources.comments');
Route::get('/filament/resources/settings', function () {
    return view('filament.resources.settings');
})->middleware(['auth'])->name('filament.resources.settings');
