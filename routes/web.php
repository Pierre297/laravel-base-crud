<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


Route::get('/', 'HomeController@home')->name('home');
Route::get('/comic/{id}', 'HomeController@comic')->name('comic');
