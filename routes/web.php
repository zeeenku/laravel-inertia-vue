<?php

use Illuminate\Support\Facades\Route;


use Inertia\Inertia;

Route::get('/', function () {  

    return Inertia::render('Welcome', [
        "title"=>"Welcome to Laravel with Inertia.js and Vue.jsss"
        //only passed to root
    ])->withViewData(['description' => "description hhh"]);
    ;
})->name("home");




Route::get('/red-home', function () {  

    sleep(2);
    return to_route('home'); // redirects to home as spa

});

