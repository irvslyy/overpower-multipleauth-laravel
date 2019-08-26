<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes(['verify' => true]);

Route::get('/notif', function() {
    $user = \App\User::first();
    $user->notify(new \App\Notifications\Daftar);
});