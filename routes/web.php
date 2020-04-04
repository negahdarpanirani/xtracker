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
Auth::routes();

Route::get('/', function () {
    return view('main');
});

Route::get('/x', function () {
    return view('map1');
});

Auth::routes() ;
//tracker route
Route::get('/dashboard/map', 'TrackerController@map')->name('map');
Route::get('/admin/{tracker}', 'TrackerController@show')->name('show');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin', 'TrackerController@index')->name('admin');
Route::get('/dashboard', 'HomeController@dashboard')->name('dashboard');
Route::get('/dashboard/speed/{tracker}', 'HomeController@speed')->name('speed');
Route::get('/chart', 'HomeController@index1')->name('chart');
Route::get('/dashboard/tanker/{tracker1}', 'HomeController@tanker')->name('tanker1');
Route::get('/admin/{tracker}', 'TrackerController@destroy')->name('destroy');


//accounting route
Route::get('account', 'AccountController@index')->name('account');
Route::post('/account/store', 'AccountController@store')->name('store');
Route::get('/account/{account}', 'AccountController@acdestroy')->name('acdestroy');

//users route
Route::get('/profiles', 'UserController@profiles')->name('profiles');
//add newuser by mainadmin 
Route::get('/profiles/adduser', 'UserController@adduser')->name('adduser');
Route::post('/profiles/adduser/save', 'UserController@userstore')->name('userstore');

Route::get('/profiles/{user}', 'UserController@destroy')->name('destroy');
Route::get('/profiles/edit/{user}', 'UserController@edit')->name('edit');
Route::put('/profiles/update/{user}', 'UserController@update')->name('update');

//edit profile in main page 
Route::get('/fprofile/{user}', 'UserController@fprofile')->name('fprofile');
Route::post('/fprofile/{user}', 'UserController@feditprofile')->name('fprofileupdat');
//contactus route
Route::post('/contact', 'ContactformController@store')->name('contact');

// excel output 
Route::get('/excel', 'UserController@excel')->name('excel');


//image uplode route
// Route::post('image-upload', 'ImageUploadController@imageUploadPost')->name('image.upload.post');
