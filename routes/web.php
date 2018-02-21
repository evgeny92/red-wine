<?php
//routes for main pages
Route::get('/', 'PagesController@getHome');
Route::get('about', 'PagesController@getAbout');
Route::get('gallery', 'PagesController@getGallery');
Route::get('blog', 'PagesController@getBlog');
Route::get('blog/{slug_post}', 'PagesController@getSingleBlogPage')->name('pages.blog.single');
Route::get('blog/category/{slug_cat}', 'PagesController@getCategory')->name('pages.blog.category');
Route::get('contact', 'PagesController@getContact');
Route::post('contact', 'PagesController@postContact');
Route::post('subscribe', 'SubscribeController@postSubscribe');
Route::get('search', 'SearchController@search');

//auth route
Auth::routes();
if (!env('ALLOW_REGISTRATION', false)) {
   Route::any('/register', function() {
      abort(404);
   });
}

Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => 'auth'], function () {
   //home
   Route::get('/', 'HomeController@index');
   //routes for changing a user's personal data
   Route::get('password', 'ProfileController@showChangePasswordForm');
   Route::post('password', 'ProfileController@changePassword')->name('changePassword');
   Route::get('name', 'ProfileController@showChangeNameForm');
   Route::post('name', 'ProfileController@changeName')->name('changeName');
   Route::get('email', 'ProfileController@showChangeEmailForm');
   Route::post('email', 'ProfileController@changeEmail')->name('changeEmail');
   //routes for posts
   Route::resource('posts', 'PostController');
   //routes for categories
   Route::resource('categories', 'CategoryController', ['except' => ['create', 'show']]);
   //routes for gallery
   Route::resource('gallery', 'FileUploadController', ['only' => ['index', 'store', 'destroy']]);
});





