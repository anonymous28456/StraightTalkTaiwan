<?php

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
    return view('index');
});

Route::get('/about', function(){
    return view('about');
});

Route::get('/history', function(){
    return view('history');
});

Route::get('/stt2017', function(){
    return view('stt2017');
});
