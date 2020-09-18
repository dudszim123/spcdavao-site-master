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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/applicant', 'ApplicantController@index')->name('applicant');
Route::get('/thank-you','ApplicantController@thankYou')->name('thank-you');
Route::post('/applicant','ApplicantController@store');

Route::get('/offered-program', 'ProgramController@selectAllOfferedProgram');
Route::get('{path}','HomeController@index')->where('path','([A-z\d\-\/_.]+)?');

Route::post('/short-essay','ApplicantController@shortEssayStore');
Route::post('/thesis-description','ApplicantController@thesisDescriptionStore');
