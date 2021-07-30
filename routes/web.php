<?php

Route::get('/', function () {
    return view('home');
});


Route::get('/produtos', function(){
    return view('produtos');
});

Route::get('/produto/edit/{id}', function(){
    dd('teste');
});

Route::post('/produto/store', function(){
dd('cadastrar');

});