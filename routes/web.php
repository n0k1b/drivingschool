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

Route::view('/','admin.dashboard');

Route::group(['prefix' => 'admin'], function () {
    Route::get('/courses','CourseController@index');
    Route::view('/add-course','admin.addCourse');
    Route::post('/add-course','CourseController@addCourse');
    Route::get('/delete-course/{id}','CourseController@delete');
});
