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

Route::post('/subscribe', function(){
    $email = request('email');

    Newsletter::subscribe($email);

    Session::flash('subscribed', 'Successfully subscribed.');

    return back();
});

Route::get('/', 'FrontEndController@index');

Route::get('/admin', function () {
    return redirect('/admin/home');
})->middleware('auth');

Route::get('/results', 'FrontEndController@search');

Auth::routes();

Route::get('/post/{slug}', 'FrontEndController@singlePost')->name('post.single');
Route::get('/category/{id}', 'FrontEndController@category')->name('category');
Route::get('/tag/{id}', 'FrontEndController@tag')->name('tag');

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function(){
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/statistics', 'HomeController@statistics')->name('statistics');
    Route::resource('category','CategoriesController');
    Route::resource('post','PostsController');
    Route::get('/posts/trashed', 'PostsController@trashed')->name('posts.trashed');
    Route::get('/posts/kill/{id}', 'PostsController@kill')->name('posts.kill');
    Route::get('/posts/restore/{id}', 'PostsController@restore')->name('posts.restore');
    Route::resource('tag', 'TagsController');
    Route::get('/profile', 'ProfilesController@index')->name('profile');
    Route::get('/profile/edit', 'ProfilesController@edit')->name('profile.edit');
    Route::post('/profile/update/{user}', 'ProfilesController@update')->name('profile.update');
    Route::resource('user', 'UsersController');
    Route::get('/user/admin/{id}', 'UsersController@admin')->name('user.admin');
    Route::get('/user/notadmin/{id}', 'UsersController@notadmin')->name('user.notadmin');
    Route::get('/settings', 'SettingsController@index')->name('settings');
    Route::post('/settings/update/{setting}', 'SettingsController@update')->name('settings.update');
});



