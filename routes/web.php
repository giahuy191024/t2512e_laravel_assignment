<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\BankAccountController;
use App\Http\Controllers\ItemSaleController;
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


    Route::get('/', [ItemSaleController::class, 'index'])->name('item-sale.index');
    Route::get('/item-sale/create', [ItemSaleController::class, 'create'])->name('item-sale.create');
    Route::post('/item-sale/store', [ItemSaleController::class, 'store'])->name('item-sale.store');
    Route::get('/item-sale/{id}/edit', [ItemSaleController::class, 'edit'])->name('item-sale.edit');
    Route::put('/item-sale/{id}/update', [ItemSaleController::class, 'update'])->name('item-sale.update');
    Route::delete('/item-sale/{id}/delete', [ItemSaleController::class, 'destroy'])->name('item-sale.delete');

    //bank account
    Route::get('/bank-account',[BankAccountController::class,'index'])->name('bank-account-index');
    Route::get('/bank-account-create',[BankAccountController::class,'create'])->name('bank-account-create');
    Route::post('/bank-account-store',[BankAccountController::class,'store'])->name('bank-account-store');
    Route::get('/bank-account-edit/{id}',[BankAccountController::class,'edit'])->name('bank-account-edit');
    Route::put('/bank-account-update/{id}',[BankAccountController::class,'update'])->name('bank-account-update');
    Route::delete('/bank-account-delete/{id}',[BankAccountController::class,'delete'])->name('bank-account-delete');