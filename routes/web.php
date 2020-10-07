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
/*Route::get('/', function () {
    return view('welcome');
});*/
/*
app()->bind('Hello', function(){
    return 'Hi';
});

dd(app()->make('Hello'));
*/

//dd(app()->make('Hello'));
//dd(app()->make('Test'));


Route::get('/', 'WelcomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/profile', 'HomeController@profile')->name('profile');
Route::get('/changepass', 'HomeController@change_pass')->name('change_pass');
Route::get('/changeemail', 'HomeController@change_email')->name('change_email');
