<?php

use App\Http\Controllers\TestimoniController;

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

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/proAlumni', 'HomeController@proAlumni')->name('proAlumni');
Route::get('/formBiodata', function () {
    return view('alumni');
});
Route::get('/formKabar', function () {
    return view('kabarJurusan');
});
Route::get('/showProfile', function () {
    return view('showProfile');
});
Route::get('/showBiodata', 'HomeController@showAlumni');
Route::get('/deleteAlum/{nim}', 'HomeController@delAl')->name('delAl');
Route::get('/editAlum/{nim}', 'HomeController@editAl')->name('editlAl');
Route::POST('/updateAlum', 'HomeController@updateAl')->name('upKat');
Route::post('/inpKabar', 'HomeController@inpKabar')->name('inpKabar');
Route::get('/showKabar/{id}', 'HomeController@showKabar');
Route::get('/filterKab', 'HomeController@filterKab');
