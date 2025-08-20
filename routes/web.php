<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('index');
})->name('home');

Route::get('/about', function () {
    return Inertia::render('about');
})->name('about');

Route::get('/blog', function () {
    return Inertia::render('blog');
})->name('blog');

Route::get('/contact', function () {
    return Inertia::render('contact');
})->name('contact');

Route::get('/portfolio', function () {
    return Inertia::render('portfolio');
})->name('portfolio');

Route::get('/services', function () {
    return Inertia::render('services');
})->name('services');

Route::get('/terms', function () {
    return Inertia::render('terms');
})->name('terms');

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
