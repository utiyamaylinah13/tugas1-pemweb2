<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

Route::get('/', function (){
    return view(view: 'web.homepage');
});

Route::get('/produk', function(){
    return view(view: 'web.produk');
})->name('produk');

Route::get('/about', function(){
    return 'about';
});

Route::get('/keranjang',function(){
    return 'keranjang';
});

Route::get('/kategori',function(){
    return 'kategori';
});

Route::get('/pencarian produk',function(){
    return 'pencarian produk';
});

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
    Volt::route('settings/password', 'settings.password')->name('settings.password');
    Volt::route('settings/appearance', 'settings.appearance')->name('settings.appearance');
});

require __DIR__.'/auth.php';
