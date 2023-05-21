<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function (){
    return view('.homepage.index');
});

Route::prefix('blog')->group(function (){

    Route::prefix('by')->group(function (){

        Route::get('author', function (){

        });

        Route::get('categories', function (){

        });

    });

    Route::get('/', function (){
        return view('.homepage.blog.all', [
            'blogs' => App\Models\Blog::get(),
        ]);
    });

    Route::get('/view/{id}', [\App\Http\Controllers\BlogController::class, 'showBlog'])->name('blog.view');

});
