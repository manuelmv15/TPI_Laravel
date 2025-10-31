<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/base', function () {
    return view('pages.base');
});

Route::get('/mi-perfil', function () {
    return view('pages.mi-perfil');
});