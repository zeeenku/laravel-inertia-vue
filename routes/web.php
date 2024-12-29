<?php

use Illuminate\Support\Facades\Route;


use Inertia\Inertia;


//todo: External redirects

Route::get('/', function () {  

    return Inertia::render('Welcome', [
        "title"=>"Welcome to Laravel with Inertia.js and Vue.jsss"
        //only passed to root
    ])->withViewData(['description' => "description hhh"]);
    ;
})->name("home");


// short way
Route::inertia('/about', 'About');




Route::get('/red-home', function () {  

    sleep(2);
    return to_route('home'); // redirects to home as spa

});

