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

//Product Pages
Route::get('/product', function () {
    return view('products.product');
});

Route::get('/product/workshop', function () {
    return view('products.workshop');
});

Route::get('/product/inventory', function () {
    return view('products.inventory');
});

Route::get('/product/maintenance', function () {
    return view('products.maintenance');
});

Route::get('/product/pricing', function () {
    return view('products.pricing');
});

//Authenticate Pages
Route::get('/login', function () {
    return view('auth.login');
});
Route::get('/register', function () {
    return view('auth.register');
});
Route::get('/forgotpassword', function () {
    return view('auth.forgotpassword');
});

//Company Pages
Route::get('/company', function () {
    return view('company.company');
});
Route::get('/requestdemo', function () {
    return view('company.request_demo');
});
Route::get('/contact', function () {
    return view('company.contact');
});