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

// Auth, Use controllers
Route::get('/be-login', 'BE\UserAuthController@index')->name('be.login');
Route::post('/be-login', 'BE\UserAuthController@login');
Route::get('/be-logout', 'BE\UserAuthController@logout')->name('be.logout');

Route::get('forgot-password', 'BE\UserAuthController@forgotPassword');
Route::post('recover-password', 'BE\UserAuthController@resetPassword');
Route::post('recover-link', 'BE\UserAuthController@recoverPasswordLink');

// TO make this home
Route::get('/', 'FE\HomeController@home')->name('home');

// Blog
Route::get('/blog', 'FE\HomeController@blogHome')->name('blog.home');
Route::get('/post/{post}', 'FE\HomeController@show')->name('post.show');
Route::post('/post/{post}/comment', 'FE\HomeController@show');


// Place this into middleware
Route::get('dashboard', 'BE\DashboardController@index')->name('dashboard.home');

Route::get('dashboard/about-user/{user}', 'BE\AboutUserController@aboutUser')->name('about.user');
Route::post('dashboard/about-user/{user}', 'BE\AboutUserController@storeAboutUser');


Route::resource('dashboard/category', 'BE\CategoryController', ['except'=>['create','show']]);
Route::get('dashboard/category/{category}/delete', 'BE\CategoryController@delete')->name('category.delete');

Route::resource('dashboard/posts', 'BE\PostController');
// Route::resource('dashboard/comments', 'BE\CommentController');

