<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'App\Http\Controllers\IndexController@index')->name("index.index");

/*Route::get('/', function () {
    return view('welcome');
});*/

