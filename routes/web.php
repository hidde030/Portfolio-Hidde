<?php
Route::get('/', function () {
    return view('homepage');
});

//contact
Route::get('/contact', 'ContactController@index');

// Dit is een post en onderstaand is nodig om de velden van het formulier op te vangen
Route::post('/contact', 'ContactController@store');

// Route::get('/homepage', 'ProductItemsController@index');

//mijn-werk/projecten
Route::get('/mijn-werk', 'ProductItemsController@index');

Route::get('/mijn-werk/{slug}', 'ProductItemsController@show');
//blog
Route::get('/blog', 'BlogsController@index');

Route::get('/blog/create', 'BlogsController@create');

// Dit is een post en onderstaand is nodig om de velden van het formulier op te vangen
Route::post('/blog', 'BlogsController@store');

Route::get('/blog/{blog}', 'BlogsController@show');
Route::get('/blog/{blog}/edit', 'BlogsController@edit');
Route::put('/blog/{blog}', 'BlogsController@update');
// Route::redirect('/', '/home');

// Route::redirect('/home', '/admin');

Auth::routes(['register' => false]);

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['auth']], function () {
    Route::get('/', 'HomeController@index')->name('home');

    Route::delete('permissions/destroy', 'PermissionsController@massDestroy')->name('permissions.massDestroy');

    Route::resource('permissions', 'PermissionsController');

    Route::delete('roles/destroy', 'RolesController@massDestroy')->name('roles.massDestroy');

    Route::resource('roles', 'RolesController');

    Route::delete('users/destroy', 'UsersController@massDestroy')->name('users.massDestroy');

    Route::resource('users', 'UsersController');

    Route::delete('products/destroy', 'ProductsController@massDestroy')->name('products.massDestroy');

    Route::resource('products', 'ProductsController');
});
