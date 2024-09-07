<?php

use App\Http\Controllers\FileController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('product.index');
});

Route::middleware('guest')->group(function () {

    // product
    Route::prefix('product')->name('product.')->group(function () {
        Route::get('/', [ProductController::class, 'index'])->name('index');
        Route::post('/', [ProductController::class, 'create'])->name('create');
        Route::get('/export-csv', [ProductController::class, 'export_csv'])->name('export.csv');
        Route::get('/table', [ProductController::class, 'table'])->name('table');
        Route::post('/update', [ProductController::class, 'update'])->name('update');
        Route::post('/delete', [ProductController::class, 'delete'])->name('delete');
        Route::get('/{id}', [ProductController::class, 'show'])->name('show');
    });

    Route::prefix('file')->name('file.')->group(function () {
        Route::get('/', [FileController::class, 'index'])->name('index');
        Route::get('/{filename}', [FileController::class, 'show'])->name('show');
    });
});
