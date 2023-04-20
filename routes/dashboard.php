<?php
/**
 * A Route file for dashboard
 */

use Illuminate\Support\Facades\Route;

Route::middleware(['auth', 'verified'])->group(function (){
    // everyone can access!
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // unit only pages URL endpoints

    // nasabah only pages URL endpoints
    Route::middleware(['dashboard_nasabah_only'])->get('/testing', function (){
        echo 'you are nasabah';
    });

    Route::middleware(['dashboard_unit_only'])->get('/testing2', function (){
        echo 'you are unit';
    });

});
