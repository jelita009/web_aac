<?php

use Illuminate\Support\Facades\Route;
use App\Models\Program;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return redirect('/id');
});

Route::get('/{locale}', function ($locale) {

    if (! in_array($locale, ['id', 'en'])) {
        abort(404);
    }

    app()->setLocale($locale);

    $programs = Program::all();

    return view('home', compact('programs'));

});