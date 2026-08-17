<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pendaftaran', function () {
    return view('pendaftaran');
});

Route::get('/pdffm', function(){
    return view('pdffm');
});

Route::get('/pdftf', function(){
    return view('pdftf');
});

Route::get('/pengertian', function(){
    return view('pengertian');
});

Route::get('/phc', function(){
    return view('phc');
});

Route::get('/pmrk', function(){
    return view('pmrk');
});

Route::get('/pptn', function(){
    return view('pptn');
});

Route::get('/sejarah', function(){
    return view('sejarah');
});

Route::get('/skhc', function(){
    return view('skhc');
});

Route::get('/skmrk', function(){
    return view('skmrk');
});

Route::get('/skptn', function(){
    return view('skptn');
});

Route::get('/sk', function(){
    return view('sk');
});

Route::get('/formulir-hak-cipta', function(){
    return view('formulir-hak-cipta');
});

Route::get('/formulir-paten', function(){
    return view('formulir-paten');
});

Route::get('/formulir-merek', function(){
    return view('formulir-merek');
});