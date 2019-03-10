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

Route::get('/modules/create', function () {
    return view('modules.create');
})->name('modules.create');

Route::get('/modules/{module}', function () {
    return view('modules.show');
})->name('modules.show');

Route::get('/questions', function () {
    return view('questions.list');
})->name('questions.list');

Route::get('/questions/create', function () {
    return view('questions.create');
})->name('questions.create');

Route::get('/questions/{question}', function () {
    return view('questions.show');
})->name('questions.show');

Route::get('/terms', function () {
    return view('terms.list', ['terms' => \App\Term::paginate(15)]);
})->name('terms.list');

Route::resource('/docs', 'DocController');
Route::get('/docs/{doc}/download', 'DocController@download')->name('doc.download');