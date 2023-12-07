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

Route::get('/', function () {
    $data = [
        'name' => 'Davide',
        'surname' => 'Cavallotto',
        'age' => 'Vecchio'
    ]; 

    return view('home', $data);
});

Route::get('/hello', function () {
   

    return view('hello');
})->name('hello');

Route::get('/world', function () {
   

    return view('world');
})->name('world');


