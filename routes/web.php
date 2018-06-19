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

Route::get('/', 'IndexController@show')->name('showPage');
Route::post('/', 'SetLocale@index')->name('setLocale');

Route::group(['middleware' => 'web'], function () {
    Auth::routes();
});

Route::match(['get', 'post'],'/register', function () {
    abort(404);
});


Route::match(['get', 'put', 'patch', 'delete'], 'admin/chapters/{id}/{edit?}', function () {
    abort(404);
})->where('id', '[4,6]');

Route::match(['get', 'put', 'patch', 'delete'], 'admin/products/{id}/{edit?}', function () {
    abort(404);
})->where('id', '[4,6]');

Route::prefix(env('ADMIN_URL'))->group(function () {
    Route::get('/', 'HomeController@index')->name('home');
    Route::resource('contacts', 'ContactController');
    Route::resource('chapters', 'ChapterController');
    Route::resource('products', 'ProductController');
});
