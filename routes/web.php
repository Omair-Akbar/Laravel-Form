<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Route::view("/form", "user-difficult-form");
Route::post("/addUser", [UserController::class, "showData"]);
