<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserControllers;

Route::get('/', function () {
    return view('welcome');
});

Route::view("/form", "user-difficult-form");
Route::post("/addUser", [UserControllers::class, "showData"]);