<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});


Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/inputs', function () {
    return view('inputs');
});

Route::get('/datatables', function () {
    return view('datatables');
});