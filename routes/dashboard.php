<?php
/**
 * A Route file for dashboard
 */

use App\Http\Controllers\DataSampahController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth', 'verified'])->group(function (){
    // everyone can access!
    Route::get('/dashboard', [\App\Http\Controllers\DashboardController::class, 'MainPage'])->name('dashboard');

    /** PROFILE STUFFS */
    Route::get('/dashboard/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/dashboard/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/dashboard/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


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
        Route::get('/dashboard/sampah/edit/{id}', [DataSampahController::class, 'EditDataSampah'])->name('sampah.edit');
        Route::get('/dashboard/sampah/detail/{id}', [DataSampahController::class, 'showDetailDataSampah'])->name('sampah.detail');

        // kategori sampah
        Route::get('/dashboard/sampah/kategori/', [DataSampahController::class, 'ShowKategoriSampah'])->name('sampah.kategori.home');
        Route::get('/dashboard/sampah/kategori/tambah', [DataSampahController::class, 'TambahKategoriSampah'])->name('sampah.kategori.tambah');
        Route::get('/dashboard/sampah/kategori/edit/{id}', [DataSampahController::class, 'EditKategoriSampah'])->name('sampah.kategori.edit');

        // nasabah : saldo
        Route::get('/dashboard/nasabah/', [\App\Http\Controllers\DataSaldoController::class, 'ShowNasabahLists'])->name('nasabah.list');
        Route::get('/dashboard/nasabah/detail/{id}', [\App\Http\Controllers\DataSaldoController::class, 'ShowNasabahDetail'])->name('nasabah.detail');
        Route::get('/dashboard/saldo/deposit/{id}', [\App\Http\Controllers\DataSaldoController::class, 'ShowDepositForm'])->name('nasabah.saldo.deposit'); // either deposit or tarik
        Route::get('/dashboard/saldo/tarik/{id}', [\App\Http\Controllers\DataSaldoController::class, 'ShowTarikForm'])->name('nasabah.saldo.tarik'); // either deposit or tarik

        // blog
        Route::get('/dashboard/blog/', [\App\Http\Controllers\BlogController::class, 'listBlog'])->name('blog.list');
        Route::get('/dashboard/blog/write', [\App\Http\Controllers\BlogController::class, 'NewBlogForm'])->name('blog.write');
        Route::get('/dashboard/blog/edit/{id}', [\App\Http\Controllers\BlogController::class, 'UpdateBlogForm'])->name('blog.edit');

        // kategori blog
        Route::get('/dashboard/blog/kategori', [\App\Http\Controllers\BlogController::class, 'listCategory'])->name('blog.kategori.home');
        Route::get('/dashboard/blog/kategori/tambah', [\App\Http\Controllers\BlogController::class, 'NewCategoryForm'])->name('blog.kategori.tambah');
        Route::get('/dashboard/blog/kategori/edit/{id}', [\App\Http\Controllers\BlogController::class, 'EditCategoryForm'])->name('blog.kategori.edit');

        /** actions */
        // sampah
        Route::post('/dashboard/action/sampah/push', [DataSampahController::class, 'pushDataSampah'])->name('sampah.action.push');
        Route::post('/dashboard/action/sampah/update/{id}', [DataSampahController::class, 'updateDataSampah'])->name('sampah.action.update');
        Route::get('/dashboard/action/sampah/delete/{id}', [DataSampahController::class, 'deleteDataSampah'])->name('sampah.action.delete');

        // kategori samopah
        Route::post('/dashboard/action/sampah/kategori/push', [DataSampahController::class, 'pushKategoriSampah'])->name('sampah.kategori.action.push');
        Route::post('/dashboard/action/sampah/kategori/update/{id}', [DataSampahController::class, 'updateKategoriSampah'])->name('sampah.kategori.action.update');
        Route::get('/dashboard/action/sampah/kategori/delete/{id}', [DataSampahController::class, 'deleteKategoriSampah'])->name('sampah.kategori.action.delete');

        // saldo
        Route::post('/dashboard/saldo/deposit/{id}', [\App\Http\Controllers\DataSaldoController::class, 'DoDeposit'])->name('nasabah.action.saldo.deposit'); // either deposit or tarik
        Route::post('/dashboard/saldo/tarik/{id}', [\App\Http\Controllers\DataSaldoController::class, 'DoTarik'])->name('nasabah.action.saldo.tarik'); // either deposit or tarik

        // kategori blog
        Route::post('/dashboard/action/blog/kategori/push', [\App\Http\Controllers\BlogController::class, 'PushCategory'])->name('blog.kategori.action.push');
        Route::post('/dashboard/action/blog/kategori/update/{id}', [\App\Http\Controllers\BlogController::class, 'UpdateCategory'])->name('blog.kategori.action.update');
        Route::get('/dashboard/action/blog/kategori/destroy/{id}', [\App\Http\Controllers\BlogController::class, 'DestroyCategory'])->name('blog.kategori.action.destroy');

        // blog
        Route::post('/dashboard/action/blog/push', [\App\Http\Controllers\BlogController::class, 'PushBlog'])->name('blog.action.push');
        Route::post('/dashboard/action/blog/update/{id}', [\App\Http\Controllers\BlogController::class, 'updateBlog'])->name('blog.action.update');
        Route::get('/dashboard/action/blog/destroy/{id}', [\App\Http\Controllers\BlogController::class, 'DestroyBlog'])->name('blog.action.destroy');
    });

});
