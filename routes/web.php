<?php

use Illuminate\Support\Facades\Route;


use Inertia\Inertia;

Route::get('/', function () {  

    return Inertia::render('Welcome', [
        "title"=>"Welcome to Laravel with Inertia.js and Vue.jsss"
    ]);
});