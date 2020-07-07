<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/home', function () {
//     return view('layout');
// });

Route::get('/', 'CardsController@index');

Route::get('/create', function () {
    return view('pages.create');
});

Route::post('/create', 'CardsController@create');

Route::get('/card-{id}', 'CardsController@show')->name('showRoute');

Route::get('card-{id}/edit', 'CardsController@edit');

Route::put('/card-{id}', 'CardsController@update');

Route::delete('/card-{id}','CardsController@destroy');

















Route::get('/left-sidebar', function () {
    return view('pages.left-sidebar');
});

Route::get('/right-sidebar', function () {
    return view('pages.right-sidebar');
});

Route::get('/no-sidebar', function () {
    return view('pages.no-sidebar');
});

// Route::get('/cards', function () {
//     return view('pages.cards');
// });
