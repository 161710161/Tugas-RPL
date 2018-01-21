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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::resource('/home', 'HomeController'); 
Route::resource('/gallery', 'GalleryController');
Route::resource('/db', 'DatabasesController'); 
Route::resource('/paragraf', 'ParagrafController'); 
Route::resource('/costume1', 'Costume1Controller'); 
Route::resource('/costume2', 'Costume2Controller'); 