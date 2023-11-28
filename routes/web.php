<?php

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Sleep;

Route::get('/', function () {
    return view('welcome');
});

Artisan::command("weekly", function () {
    $bool = true;
    Sleep::for(2)->seconds()->when($bool);
    $this->info("Weekly command run successfully!");
});
