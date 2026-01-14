<?php

use App\Livewire\HomePage;
use Illuminate\Support\Facades\Route;

// Public Routes
Route::get('/', HomePage::class)->name('home');

// Service Routes
Route::prefix('layanan')->name('layanan.')->group(function () {
    Route::get('/', function () {
        return view('pages.services.index');
    })->name('index');
});

// Product Routes
Route::prefix('produk')->name('produk.')->group(function () {
    Route::get('/', function () {
        return view('pages.products.index');
    })->name('index');
});

// Protection Routes
Route::prefix('proteksi')->name('proteksi.')->group(function () {
    Route::get('/', function () {
        return view('pages.protection.index');
    })->name('index');
});

// Static Pages
Route::get('/tentang', function () {
    return view('pages.about');
})->name('about');

Route::get('/kontak', function () {
    return view('pages.contact');
})->name('contact');

Route::get('/faq', function () {
    return view('pages.faq');
})->name('faq');

Route::get('/blog', function () {
    return view('pages.blog.index');
})->name('blog');

