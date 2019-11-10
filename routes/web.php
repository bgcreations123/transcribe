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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'WebController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// About
Route::get('/about', 'WebController@about');
Route::get('/cs', 'WebController@cs');
Route::get('/contact', 'WebController@contact');
Route::get('/subtitles', 'WebController@subtitles');
Route::get('/pp', 'WebController@pp');
Route::get('/why_forte', 'WebController@why_forte');

// Enterprise
Route::get('/enterprise', 'WebController@enterprise');

// Trascription
Route::get('/transcription', 'WebController@transcription');

// Captions
Route::get('/captions', 'WebController@captions');

// Client Panel
Route::get('/client', 'ClientController@index')->middleware('auth');
Route::post('/client', 'ClientController@store')->middleware('auth');
Route::get('/client/profile', 'ClientController@profile')->name('client.profile')->middleware('auth');
Route::PATCH('/client/profile_update', 'ClientController@profile_update')->name('client.profile_update')->middleware('auth');
Route::get('/client/paid_projects', 'ClientController@paid_projects')->middleware('auth');

// Project / Freelancer Panel
Route::get('/project', 'ProjectController@index')->name('project.index')->middleware('auth');
Route::get('/project/show/{id}', 'ProjectController@show')->name('project.show')->middleware('auth');
Route::patch('/project/update/{id}', 'ProjectController@update')->name('project.update')->middleware('auth');
Route::get('/project/unclaim/{id}', 'ProjectController@unclaim')->name('project.unclaim')->middleware('auth');
Route::get('/freelancer_profile', 'ProjectController@profile')->name('freelancer.profile')->middleware('auth');
Route::patch('/freelancer_profile', 'ProjectController@update_profile')->name('freelancer.profile.update');
Route::get('/change_password', 'ProjectController@password');
Route::patch('/freelancer_password', 'ProjectController@update_password')->name('freelancer_password.update');

// Grader Panel
Route::get('/grader', 'GraderController@index')->name('grader.index')->middleware('auth');
Route::get('/grader_project/unclaim/{id}', 'GraderController@unclaim')->name('grader_project.unclaim')->middleware('auth');
Route::get('/jobs/submitted', 'GraderController@submitted')->middleware('auth');
Route::get('/grader/show/{id}', 'GraderController@show')->name('grader.show')->middleware('auth');
Route::get('/grader_profile', 'GraderController@profile')->name('grader.profile')->middleware('auth');
Route::patch('/grader_profile', 'GraderController@update_profile')->name('grader.profile.update');
Route::patch('/update/{id}', 'GraderController@update')->name('grader.update');
Route::get('/change_password', 'GraderController@password');
Route::patch('/grader_password', 'GraderController@update_password')->name('grader_password.update');

// Job Controller
Route::resource('job', 'JobController')->middleware('auth');

// Home Dashboard
Route::get('/tos', 'WebController@tos');

// Admin Controller
Route::get('/admin', 'AdminController@index')->middleware('auth');
Route::get('/admin_freelancers', 'AdminController@create')->middleware('auth');
Route::get('/admin_graders', 'AdminController@create_graders')->middleware('auth');
Route::post('/admin/store', 'AdminController@store')->middleware('auth');
Route::post('/admin/store_graders', 'AdminController@store_graders')->middleware('auth');

// Paypal
Route::get('/paypal_checkout', 'PaymentController@index');
// route for processing payment
Route::post('paypal', 'PaymentController@payWithpaypal');
// route for check status of the payment
Route::get('status', 'PaymentController@getPaymentStatus');
