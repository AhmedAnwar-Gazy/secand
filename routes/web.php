<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/deepseek', function () {
    return view('deepseekSignIn');
});

Route::get('/deepseekshoping', function () {
    return view('deepseekShoping');
});


Route::get('/chatgpt', function () {
    return view('chatgptSignIn');
});
Route::get('/chatgptshoping', function () {
    return view('chatgptShoping');
});




Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});


Route::get('/getinfo', function () {
    return ['foo'=>'bar'];
});


