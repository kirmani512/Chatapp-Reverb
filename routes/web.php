<?php

use App\Http\Controllers\ChatAppController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::post('/chat/room',[ChatAppController::class,'chatroom'])->name('chatroom');
