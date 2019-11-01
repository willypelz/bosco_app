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


Route::get('/about-us', function () {
    return view('about');
});
Route::get('/donations', function () {
    return view('donate');
});
Route::get('/our-objectives', function () {
    return view('objective');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/', 'PublicController@index')->name('homepage');


Route::post('/donate', 'PublicController@process')->name('payment');
Route::get('/blog', 'PublicController@post')->name('allBlog');
Route::get('/our/gallery', 'PublicController@gallery')->name('allGallery');
Route::get('/blog/{post}', 'PublicController@singlePost')->name('blogPost');
Route::post('/blog/{post}', 'PublicController@comment')->name('postcomment');
//Authenticated route
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//post
Route::get('/post', 'PostController@index')->name('post');
Route::get('/posts', 'PostController@allPost')->name('allpost');
Route::get('/post/{post}', 'PostController@singlePost')->name('singlePost');
Route::post('/post', 'PostController@create')->name('createpost');
Route::post('/posts/{post}', 'PostController@postDelete')->name('postDelete');

//Category
Route::get('/category', 'CategoryController@index')->name('category');
Route::post('/category', 'CategoryController@create')->name('createcategory');

Route::get('/toast', 'CategoryController@alert')->name('alert');

//Event
//Route::get('/admin/gallery', 'EventController@gallery')->name('event');
Route::post('/galleries/{id}', 'EventController@deleteEvent')->name('deleteEvent');
Route::get('/galleries', 'EventController@list')->name('listEvent');
Route::get('/gallery/admin', 'EventController@gallery')->name('display');
Route::post('/gallery/admin', 'EventController@uploadGallery')->name('uploadGalleryImage');