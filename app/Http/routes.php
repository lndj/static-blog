<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//blog page
Route::get('/', function () {
    return redirect('/blog');
});

Route::get('blog','BlogController@index');

Route::get('blog/{slug}', 'BlogController@showPost');



Route::group(['middleware' => 'web'], function () {
    Route::auth();

//    Route::get('/home', 'HomeController@index');
});

//Admin area

Route::get('admin', function () {
    return redirect('/admin/post');
});


Route::group(['namespace' => 'Admin', 'middleware' => ['web','auth']], function () {

    Route::resource('admin/post', 'PostController');
    Route::resource('admin/tag', 'TagController', ['except' => 'show']);
    Route::get('admin/upload', 'UploadController@index');
});




/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/





