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

Route::get('/', [
    'uses' => 'FrontEndController@index', 
    'as' => 'index'
]);

Route::get('/blog/{slug})', [
    'uses' => 'FrontEndController@singlePost',
    'as' => 'posts.single'
]);

Route::get('/category/{id}', [
    'uses' => 'FrontEndController@category',
    'as' => 'category.single'
]);

Route::get('/tag/{id}', [
    'uses' => 'FrontEndController@tag', 
    'as' => 'tag.single'
]);

Route::get('/results', function() {
    $posts = App\Post::where('title', 'like', '%' . request('query') . '%')->get();
    $settings = App\Setting::first(); 
    $categories = App\Category::all(); 

    return view('posts.results', compact('posts', 'settings', 'categories'))
    ->with('query', request('query'));
});

Auth::routes();


Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function() {

    Route::get('/dashboard', [
        'uses' => 'HomeController@index', 
        'as' => 'admin' //change at some point in admin panel to dashboard
    ]); 

    Route::get('posts', [
        'uses' => 'PostController@index', 
        'as' => 'posts'
    ]);

    Route::get('post/create', [
        'uses' => 'PostController@create', 
        'as' => 'post.create'
    ]);

    Route::post('post/store', [
        'uses' => 'PostController@store', 
        'as' => 'post.store'
    ]);

    Route::get('/post/edit/{id}', [
        'uses' => 'PostController@edit', 
        'as' => 'post.edit'
    ]);

    Route::post('/post/update/{id}', [
        'uses' => 'PostController@update', 
        'as' => 'post.update'
    ]);

    Route::get('/post/delete/{id}', [
        'uses' => 'PostController@destroy', 
        'as' => 'post.delete'
    ]);

    Route::get('posts/trashed', [
        'uses' => 'PostController@trashed', 
        'as' => 'posts.trashed'
    ]);

     Route::get('posts/kill/{id}', [
        'uses' => 'PostController@kill', 
        'as' => 'post.kill'
    ]);

     Route::get('posts/restore/{id}', [
        'uses' => 'PostController@restore', 
        'as' => 'post.restore'
    ]);


    Route::get('categories', [
        'uses' => 'CategoriesController@index', 
        'as' => 'categories'
    ]);

    Route::get('category/create', [
        'uses' => 'CategoriesController@create', 
        'as' => 'categories.create'
    ]);

    Route::post('category/store', [
        'uses' => 'CategoriesController@store', 
        'as' => 'categories.store'
    ]);

    Route::get('category/edit/{id}', [
        'uses' => 'CategoriesController@edit', 
        'as' => 'categories.edit'
    ]);

    Route::post('/category/update/{id}', [
        'uses' => 'CategoriesController@update', 
        'as' => 'categories.update'
    ]);

     Route::get('category/delete/{id}', [
        'uses' => 'CategoriesController@destroy', 
        'as' => 'categories.delete'
    ]);

    Route::get('/tags', [
        'uses' => 'TagsController@index', 
        'as' => 'tags'
    ]); 

    Route::get('tag/create', [
        'uses' => 'TagsController@create', 
        'as' => 'tag.create'
    ]);

     Route::post('tag/store', [
        'uses' => 'TagsController@store', 
        'as' => 'tag.store'
    ]);

    Route::get('/tag/edit/{id}', [
        'uses' => 'TagsController@edit', 
        'as' => 'tag.edit'
    ]);

    Route::post('/tag/update/{id}', [
        'uses' => 'TagsController@update', 
        'as' => 'tag.update'
    ]); 

    Route::get('/tag/delete/{id}', [
        'uses' => 'TagsController@destroy', 
        'as' => 'tag.delete'
    ]);

    //Users
    Route::get('/users', [
        'uses' => 'UsersController@index', 
        'as' => 'users'
    ]);

     Route::get('/user/create', [
        'uses' => 'UsersController@create', 
        'as' => 'user.create'
    ]);

    Route::post('/user/store', [
        'uses' => 'UsersController@store', 
        'as' => 'user.store'
    ]);

     Route::get('/user/admin{id}', [
        'uses' => 'UsersController@admin', 
        'as' => 'user.admin'
    ])->middleware('admin');

    Route::get('/user/not-admin{id}', [
        'uses' => 'UsersController@not_admin', 
        'as' => 'user.not.admin'
    ]);

    Route::get('/user/delete/{id}', [
        'uses' => 'UsersController@destroy', 
        'as' => 'user.delete'
    ]);

    Route::get('/user/profile', [
        'uses' => 'ProfilesController@index', 
        'as' => 'user.profile'
    ]);

    Route::post('/user/profile/update', [
        'uses' => 'ProfilesController@update', 
        'as' => 'user.profile.update'
    ]);

    Route::get('/settings', [
        'uses' => 'SettingsController@index',
        'as' => 'settings'
    ]);


    Route::post('/settings/update', [
        'uses' => 'SettingsController@update',
        'as' => 'settings.update'
    ]);

});


