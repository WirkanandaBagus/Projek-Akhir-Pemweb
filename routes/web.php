<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/division', function () {
    return view('division');
});

Route::get('/relation', function () {
    return view('relation');
});

Route::get('/publication', function () {
    return view('publication');
});

Route::get('/service', function () {
    return view('service');
});