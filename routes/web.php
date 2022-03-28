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
Route::post('/ktAlumni', 'TestimoniController@ktAlumni')->name('ktAlumni');
Route::get('/formAlumni', function () {
    return view('testimoni');
});
Route::get('/testimoni', 'TestimoniController@index');
Route::get('/listTestii','TestimoniController@show');
Route::post('/listTestii/delete/{id_testimoni}', 'TestimoniController@destroy');
Route::post('/listTestii/update/{id_testimoni}','TestimoniController@update');
Route::get('/about', function () {
    return view('about');
});
Route::get('/pesan','TestimoniController@sukses');