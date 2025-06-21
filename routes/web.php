<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Models\create_visitors_table;
use Illuminate\Http\Request;
use Stevebauman\Location\Facades\Location;

Route::get('/', function (Request $request) {
    $ip = $request->ip();

    // For local testing use a public IP:
    // $ip = '66.102.0.0'; // Example IP

    $location = Location::get($ip);

    create_visitors_table::create([
        'ip_address' => $ip,
        'country' => $location->countryName ?? null,
        'state' => $location->regionName ?? null,
        'city' => $location->cityName ?? null,
    ]);

    return view('Electric-Power-&-Control-Panel-Manufacturer-in-India');
});

Route::get('/contact-us', function () {
    return view('Contact-Us');
});

Route::get('/services', function () {
    return view('Services');
});
Route::get('ourproducts', function () {
    return view('Products');
});
Route::get('/about', function () {
    return view('about');
});

// Route::post('/submit', [FormController::class, 'store'])->name('form.submit');
Route::get('/thank-you', [FormController::class, 'thankYou'])->name('form.thankyou');

Route::post('/contact/submit', [ContactController::class, 'store'])->name('form.submit');
