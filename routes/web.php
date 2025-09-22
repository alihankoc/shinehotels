<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.index');
})->name('index');


Route::get('/about', function () {
    return view('pages.about');
})->name('about');


Route::get('/rooms', function () {
    return view('pages.rooms');
})->name('rooms');

Route::get('/gallery', function () {
    return view('pages.gallery');
})->name('gallery');

Route::get('/services', function () {
    return view('pages.services');
})->name('services');

Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');

