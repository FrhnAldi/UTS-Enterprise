<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('bootstrap');
})->name('bootstrap');

Route::get('/pages/dom', function () {
    return view('pages.dom');
})->name('pages.dom');
