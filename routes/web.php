<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\BankAccountController;
// Route::get('/', function () {
//     if (auth()->check()) {
//         return redirect('/appointment');
//     }

//     return view('auth');
// });

// Route::post('/auth', [AuthController::class, 'handleAuth']);

// Route::post('/logout', [AuthController::class, 'logout']);

// Route::get('/appointment',[AppointmentController::class,'create']

// )->middleware('auth');

// Route::post('/appointment', [AppointmentController::class, 'store'])
//     ->middleware('auth');


    //bank account
    Route::get('/bank-account',[BankAccountController::class,'index'])->name('bank-account-index');
    Route::get('/bank-account-create',[BankAccountController::class,'create'])->name('bank-account-create');
    Route::post('/bank-account-store',[BankAccountController::class,'store'])->name('bank-account-store');
    Route::get('/bank-account-edit/{id}',[BankAccountController::class,'edit'])->name('bank-account-edit');
    Route::put('/bank-account-update/{id}',[BankAccountController::class,'update'])->name('bank-account-update');
    Route::delete('/bank-account-delete/{id}',[BankAccountController::class,'delete'])->name('bank-account-delete');