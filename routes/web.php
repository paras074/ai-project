<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Controllers\Admin\AuthenticatedSessionController;
use App\Http\Controllers\IndustryController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubcategoryController;
use App\Http\Controllers\ProductController;

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/', function () {
    return view('home'); // 'welcome' is the Blade view file name (welcome.blade.php)
})->name('home');

Route::get('/products-listing', [ProductController::class, 'productlisting']);


Route::prefix('admin')->group(function () {
    Route::get('/login', [AuthenticatedSessionController::class, 'create'])
        ->middleware('guest:admin')
        ->name('admin.login');

    Route::post('/login', [AuthenticatedSessionController::class, 'store'])
        ->middleware('guest:admin');

    Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('admin.logout');


    Route::middleware(['auth:admin'])->group(function () {
        Route::get('/dashboard', function () {
            return view('admin.dashboard');
        })->name('admin.dashboard');

        // Other admin routes can be defined here
    });
});


Route::resource('industries', IndustryController::class);
Route::resource('categories', CategoryController::class);
Route::resource('subcategories', SubcategoryController::class);
Route::resource('products', ProductController::class);
Route::get('/subcategories/fetch', [App\Http\Controllers\SubcategoryController::class, 'fetchSubcategories'])->name('subcategories.fetch');



require __DIR__.'/auth.php';
