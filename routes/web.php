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
})->name('welcome');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


/*
 * The routes below is only for design testing purpose and should removed later
 */

Route::get('/modules', function () {
    return view('modules.list');
})->name('modules.list');

Route::get('/modules/{module}', function () {
    return view('modules.show');
})->name('modules.show');