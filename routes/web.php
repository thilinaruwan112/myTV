<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Player;

Route::get('/', function () {
    return view('home');
});

Route::get('/', [HomeController::class, 'index']);
Route::get('/{channelKey}/{defaultName}/', [Player::class, 'index']);
