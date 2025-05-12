<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

use App\Http\Controllers\HomepageController; 
use App\Http\Controllers\ProductCategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductsController;

Route::get('/',[HomepageController::class,'index'])->name('home');
Route::get('produk',[HomepageController::class, 'produk'])->name('produk');
Route::get('produk/{slug}', [HomepageController::class, 'produk']); 
Route::get('categories',[HomepageController::class, 'categories']); 
Route::get('category/{slug}', [HomepageController::class, 'category']); 
Route::get('cart', [HomepageController::class, 'cart']); 
Route::get('checkout', [HomepageController::class, 'checkout']); 

Route::get('/pencarian produk',function(){
    return 'pencarian produk';
});


Route::group(['prefix'=>'dashboard'], function(){
    Route::get('/',[DashboardController::class,'index'])->name('dashboard'); 
    Route::resource('categories', ProductCategoryController::class)->names('categories');
    Route::resource('posts', PostsController::class)->names('posts');
    Route::resource('products', ProductsController::class)->names('products');
})->middleware(['auth', 'verified']);


Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
    Volt::route('settings/password', 'settings.password')->name('settings.password');
    Volt::route('settings/appearance', 'settings.appearance')->name('settings.appearance');
});

require __DIR__.'/auth.php';
