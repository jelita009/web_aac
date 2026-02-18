<?php

use Illuminate\Support\Facades\Route;
use App\Models\Program;
use App\Models\Activity;
use Illuminate\Support\Facades\App;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Redirect ke bahasa default
Route::get('/', function () {
    return redirect('/id');
});

// Group locale
Route::group([
    'prefix' => '{locale}',
    'where' => ['locale' => 'id|en']
], function () {

    // HOME
    Route::get('/', function ($locale) {

        App::setLocale($locale);

        $programs = Program::all();
        $activities = Activity::latest()->get();

        return view('home', compact('programs', 'activities'));

    })->name('home');


    // PROGRAM
    Route::get('/program', function ($locale) {

        App::setLocale($locale);

        $programs = Program::all();

        return view('program', compact('programs'));

    })->name('program');


    // ABOUT
    Route::get('/about', function ($locale) {

        App::setLocale($locale);

        return view('about');

    })->name('about');


    // GALERI
    Route::get('/galeri', function ($locale) {

    App::setLocale($locale);

    $activities = Activity::latest()->get();

    return view('galeri', compact('activities'));

})->name('galeri');


    // DONATE
    Route::get('/donate', function ($locale) {

        App::setLocale($locale);

        return view('donate');

    })->name('donate');


});