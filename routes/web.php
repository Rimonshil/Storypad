<?php

use App\Http\Controllers\StoryController;
use App\Http\Middleware\verifyCategoriesCount;
use App\Http\Middleware\verifyisAdmin;
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

Route::get('/', 'WelcomeController@index')->name('welcome');
Route::get('/viewpst/{id}', 'WelcomeController@show')->name('viewpost');
Route::get('/viewpost/categories/{category}', 'StoryController@category')->name('story.category');
Route::get('/viewpost/tags/{tag}', 'StoryController@tag')->name('story.tag');

Auth::routes();


Route::group(['middleware' => ['auth']], function () {

    Route::get('/home', 'HomeController@index')->name('home');
    Route::resource('stories', 'StoryController');
    Route::post('/update/{id}', 'StoryController@update');
    Route::resource('categories', 'CategoryController');
    Route::get('/update/{id}', 'CategoryController@update');
    Route::resource('tags', 'TagController');
    Route::post('/update/{id}', 'TagController@update');

    
});
Route::group(['middleware' => ['auth', 'verifyisAdmin']], function() {

    Route::get('/users', 'UsersController@index')->name('users');
    Route::get('/users/{user}/make-admin', 'UsersController@makeAdmin')->name('users.make-admin');
});

