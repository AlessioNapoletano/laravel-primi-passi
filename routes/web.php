<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});


Route::get('/pagina2', function () {
    return view('page2');
});

Route::get('/pagina3', function () {
    return view('page3');
});

Route::get('/pagina4', function () {
    return view('page4');
});

Route::get('/pagina5', function () {
    return view('page5');
});
