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

Route::get('/home', function () {
    return view('home');
});
Route::get('/contact', function () {
    return view('contact');
});

Route::get('/espace', function () {
    return view('espace_salle');
});
Route::get('/event', function () {
    return view('event');
});
Route::get('/liste_salle', function () {
    return view('liste_salle_de_sport');
});
Route::get('/info', function () {
    return view('presse');
});
Route::get('/espace', function () {
    return view('espace_salle');
});
