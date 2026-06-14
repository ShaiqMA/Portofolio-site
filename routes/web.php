<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/projects', function () {
    return view('projects');
});

Route::get('/nieuw-project', function() {
    return view('nieuw-project');
});

Route::get('/contact', function () {
    return view('contact');
});
