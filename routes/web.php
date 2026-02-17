<?php

use Illuminate\Support\Facades\Route;
use App\Models\Program;
use App\Models\Activity;
use Illuminate\Support\Facades\App;

// 1. Redirect halaman utama langsung ke bahasa default (ID)
Route::get('/', function () {
    return redirect('/id');
});

// 2. Bungkus semua rute dalam satu grup agar tidak menulis {locale} berulang-ulang
Route::group(['prefix' => '{locale}', 'where' => ['locale' => 'id|en']], function () {

    // Beranda (Home)
    Route::get('/', function ($locale) {
        App::setLocale($locale);
        
        $programs = Program::all();
        $activities = Activity::latest()->get(); 
        
        return view('home', compact('programs', 'activities'));
    })->name('home');

    // Tentang (About)
    Route::get('/about', function ($locale) {
        App::setLocale($locale);
        return view('about');
    })->name('about');

    // Program
    Route::get('/program', function ($locale) {
        App::setLocale($locale);
        return view('program');
    })->name('program');

    // Galeri
    Route::get('/galeri', function ($locale) {
        App::setLocale($locale);
        return view('galeri');
    })->name('galeri');

    // Donasi
    Route::get('/donate', function ($locale) {
        App::setLocale($locale);
        return view('donate');
    })->name('donate');

    // Kontak
    Route::get('/kontak', function ($locale) {
        App::setLocale($locale);
        return view('kontak');
    })->name('kontak');

});