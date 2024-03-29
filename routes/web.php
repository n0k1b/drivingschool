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
Route::view('/','home');
Route::view('feature','feature');
Route::view('advice','advice');
Route::get('login','AuthController@index')->name('login-view');

Route::get('course','CourseController@view_course');
Route::get('instructor','InstructorController@view_all_instructor');
Route::post('submit_application','FeeController@submit_application');
Route::post('login','AuthController@login')->name('login');
Route::get('logout','AuthController@logout')->name('logout');


//Route::view('admin','admin.dashboard');

Route::group(['prefix' => 'admin','middleware' =>'auth'], function () {

    Route::get('/', function () {
    return view('admin.dashboard');
    });
    Route::get('/courses','CourseController@index');
    Route::view('/add-course','admin.addCourse');
    Route::post('/add-course','CourseController@addCourse');
    Route::get('/edit-course/{id}','CourseController@editCourse');
    Route::post('/update-course','CourseController@updateCourse');
    Route::get('/delete-course/{id}','CourseController@delete');


    Route::get('/demoquestions','DemoQuestionController@index');
    Route::view('/add-demoquestion','admin.addDemoquestion');
    Route::post('/add-demoquestion','DemoQuestionController@add');
    Route::get('/edit-demoquestion/{id}','DemoQuestionController@edit');
    Route::post('/update-demoquestion','DemoQuestionController@update');
    Route::get('/delete-demoquestion/{id}','DemoQuestionController@delete');


    Route::get('/instructors','InstructorController@index');
    Route::view('/add-instructor','admin.addInstructor');
    Route::post('/add-instructor','InstructorController@add');
    Route::get('/edit-instructor/{id}','InstructorController@edit');
    Route::post('/update-instructor','InstructorController@update');
    Route::get('/delete-instructor/{id}','InstructorController@delete');

    Route::get('/fees','feeController@index');
    Route::get('/add-fee',function()
    {
        return view('admin.addfee',['courses'=>\App\Models\course::all()]);
    });
    Route::post('/add-fee','feeController@add');
    Route::get('/edit-fee/{id}','feeController@edit');
    Route::post('/update-fee','feeController@update');
    Route::get('/delete-fee/{id}','feeController@delete');
});
