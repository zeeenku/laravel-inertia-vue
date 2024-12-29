<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;


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

Route::inertia('/form', 'Form');


Route::post('/submit-form', function (Request $request) {  
    dd($request->all());
    // must return a compoennt or a ui
});

Route::get('/red-home', function () {  

    sleep(2);
    return to_route('home'); // redirects to home as spa

});

