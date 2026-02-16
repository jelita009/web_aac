<?php

use Illuminate\Support\Facades\Route;
use App\Models\Program;
use App\Models\Activity; // Tambahkan ini

Route::get('/', function () {
    return redirect('/id');
});

Route::get('/{locale}', function ($locale) {
    if (! in_array($locale, ['id', 'en'])) {
        abort(404);
    }

    app()->setLocale($locale);
    
    // Ambil semua data program
    $programs = Program::all();
    
    // Ambil data aktivitas (dokumentasi)
    // latest() digunakan agar foto terbaru muncul di depan
    $activities = Activity::latest()->get(); 
    
    // Kirim kedua variabel ke view home
    return view('home', compact('programs', 'activities'));
});

Route::get('/{locale}/donate', function ($locale) {
    if (! in_array($locale, ['id', 'en'])) {
        abort(404);
    }
    app()->setLocale($locale);
    return view('donate');
})->name('donate');