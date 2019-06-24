<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'FrontController@index')->name('front.index');
Route::get('/contacto', 'FrontController@contact')->name('front.contact');

Route::post('/contacto', [
    'uses'  => 'FrontController@sendEmail',
    'as'    => 'website.contact.mail'
]);

/*
Route::get('/contact-mail', function () {
    $full_name = 'Adrian Ortiz Martinez';
    $email = 'adrian@gmail.com';
    $phone = '(55) 2345 5678';
    $service = 'Uno más';
    $info = 'Mensaje de prueba';

    return view('emails.contact-email', compact('full_name', 'email', 'phone', 'service', 'info'));
});
*/

Route::get('/artisan-clear', function() {
    Artisan::call('cache:clear');
    // Artisan::call('view:clear');
    // Artisan::call('route:clear');
    // Artisan::call('clear-compiled');
    // Artisan::call('config:cache');
    // Cache::flush();
    return "Cleared!";
});