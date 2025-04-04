<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');

Route::get('/set-locale/{locale}', function ($locale) {
    if (in_array($locale, ['uz', 'jp', 'en'])) {
        Session::put('locale', $locale);
        App::setLocale($locale);
    }
    return Redirect::back();
})->name('setLocale');
