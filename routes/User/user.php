<?php

use App\Http\Controllers\User\GetAllController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::prefix('user')->group(function(){

    Route::get('/', GetAllController::class)->name('user.all');


});