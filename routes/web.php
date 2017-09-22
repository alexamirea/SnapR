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

Route::get('welcome', function () {
    return view('welcome');
});
Route::get('gallery',
    ['as' => 'gallery', function () {
    return view('gallery');
}]);

Route::get('portfolio',
    ['as' => 'portfolio', function () {
    return view('portfolio');
}]);

Route::get('about',
    ['as' => 'about', function () {
    return view('about');
}]);