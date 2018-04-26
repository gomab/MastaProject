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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin/dashboard', 'HomeController@index')->name('dashboard');

Route::group([
    'prefix'     => 'admin',
    'middleware' => 'auth'

], function (){
    /**
     * View Trashed post
     */
    Route::get('/post/trashed', 'PostsController@trashed')->name('post.trashed');

    /**
     * Permanently deleting post
     */
    Route::get('/post/kill/{id}', 'PostsController@kill')->name('post.kill');


    /**
     * Restoring trashed post
     */
    Route::get('/post/restore/{id}', 'PostsController@restore')->name('post.restore');

    /**
     * Posts route
     */
    Route::resource('/post', 'PostsController');

    /**
     * Categories route
     */
    Route::resource('/category', 'CategoriesController');

    /**
     * Tags route
     */
    Route::resource('/tag', 'TagsController');

    /**
     * Users route
     */
    Route::resource('/user', 'UsersController');


    Route::get('/user/admin/{id}', [
        'uses' => 'UsersController@admin',
        'as'   => 'user.admin'
    ]);

    Route::get('/user/not-admin/{id}', [
        'uses' => 'UsersController@not_admin',
        'as'   => 'user.not.admin'
    ]);





});
