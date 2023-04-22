<?php
/**
 * A Route file for dashboard
 */

use App\Http\Controllers\DataSampahController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth', 'verified'])->group(function (){
    // everyone can access!
    Route::get('/dashboard', [\App\Http\Controllers\DashboardController::class, 'MainPage'])->name('dashboard');

    // Showing Profil!
    Route::get('/profil');

    // unit only pages URL endpoints

    // nasabah only pages URL endpoints
    Route::middleware(['dashboard_nasabah_only'])->group(function (){
        /** pages */
        Route::get('/dashboard/saldo');
    });

    Route::middleware(['dashboard_unit_only'])->group(function (){
        /** pages */
        // sampah
        Route::get('/dashboard/sampah/', [DataSampahController::class, 'ShowDataSampah'])->name('sampah.home');
        Route::get('/dashboard/sampah/tambah', [DataSampahController::class, 'SubmitDataSampah'])->name('sampah.tambah');
        Route::get('/dashboard/sampah/edit/{id}');

        Route::get('/dashboard/sampah/kategori/', [DataSampahController::class, 'ShowKategoriSampah'])->name('sampah.kategori.home');
        Route::get('/dashboard/sampah/kategori/tambah', [DataSampahController::class, 'TambahKategoriSampah'])->name('sampah.kategori.tambah');
        Route::get('/dashboard/sampah/kategori/edit/{id}', [DataSampahController::class, 'EditKategoriSampah']);

        // nasabah : uang
        Route::get('/dashboard/nasabah/saldo/')->name('saldo.home');
        Route::get('/dashboard/nasabah/saldo/deposit/{id}'); // either deposit or tarik
        Route::get('/dashboard/nasabah/saldo/tarik/{id}'); // either deposit or tarik

        /** actions */
        // sampah
        Route::post('/dashboard/action/sampah/push', [DataSampahController::class, 'pushDataSampah'])->name('sampah.action.push');
        Route::post('/dashboard/action/sampah/update/{id}')->name('sampah.action.update');
        Route::get('/dashboard/action/sampah/delete/{id}', [DataSampahController::class, 'deleteDataSampah'])->name('sampah.action.delete');

        Route::post('/dashboard/action/sampah/kategori/push', [DataSampahController::class, 'pushKategoriSampah'])->name('sampah.kategori.action.push');
        Route::post('/dashboard/action/sampah/kategori/update/{id}', [DataSampahController::class, 'updateKategoriSampah'])->name('sampah.kategori.action.update');
        Route::get('/dashboard/action/sampah/kategori/delete/{id}', [DataSampahController::class, 'deleteKategoriSampah'])->name('sampah.kategori.action.delete');
    });

});
