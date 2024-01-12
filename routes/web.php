<?php

use App\Http\Controllers\FrontendPageController;
use Illuminate\Support\Facades\Route;



Route::get("/", [FrontendPageController::class, 'index'])->name('index');
Route::get("/contact", [FrontendPageController::class, 'contact'])->name('contact');
