<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::resource('contact', 'ContactController');
Route::get('/all/contact', 'ContactController@AllContact')->name('all.contact');