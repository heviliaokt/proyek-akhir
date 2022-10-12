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
    return view('welcome');
});

Route::get('/hello', function () {
    echo"Hello World";
});

Route::get('/name/{hevilia}', function ($name) {
    return "Hello " . $name;
});

Route::get('/data/{data?}', function ($data = "6311140") {
    return "Isi Parameter = " . $data;
});

Route::get('/name/{hevilia}', function ($name) {
    return "Hello " . $name;
})->where('name', '[A-Za-z]+');

Route::get('/post/{nrp}/{name}', function ($nrp,$name) {
    return "Hello " . $name . $nrp;
})->where('name', '[A-Za-z]+') ->where('nrp', '[0-9]+');