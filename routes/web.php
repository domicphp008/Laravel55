<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProdutoController;

Route::get('/', 'HomeController@index');

Route::get('produto/store', 'ProdutoController@store');