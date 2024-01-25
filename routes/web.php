<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Home Page
Route::get('/', function () {
    return view('dashboard');
});

Route::get('/pricing', function () {
    return view('pricing');
});

//Company Page
Route::get('/company', function () {
    return view('company.company');
});
Route::get('/requestdemo', function () {
    return view('company.request_demo');
});
Route::get('/contact', function () {
    return view('company.contact');
});