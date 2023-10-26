<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\UpdatedUserController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function () {
    Route::get('register', [RegisteredUserController::class, 'create'])
                ->name('register');

    Route::post('register', [RegisteredUserController::class, 'store']);

    Route::get('login', [AuthenticatedSessionController::class, 'create'])
                ->name('login');

    Route::post('login', [AuthenticatedSessionController::class, 'store']);
});

Route::middleware('auth')->group(function () {
    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
                ->name('logout');
});

Route::middleware('can:isUser')->group(function(){
       Route::get('update',[UpdateUserController::class,'create'])
            ->name('update');
        Route::post('update',[UpdateUserController::class,'update']);
});
Route::middleware('can:isStaff')->group(function(){
    Route::get('update',[UpdateUserController::class,'create'])
         ->name('update');
     Route::post('update',[UpdateUserController::class,'update']);
});