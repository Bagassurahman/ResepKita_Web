<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

// Route::redirect('/', '/login');
Route::get('/', 'LandingController@index');
Route::get('/resep', 'LandingController@resep');
Route::get('/resep_detail/{id}', 'LandingController@show');
Route::get('/contact', 'LandingController@contact');
Route::post('/contact', 'LandingController@store');
// Route::resource('/', 'LandingController');
Route::get('/home', function () {
    if (session('status')) {
        return redirect()->route('admin.home')->with('status', session('status'));
    }

    return redirect()->route('admin.home');
});

Auth::routes();
// Admin

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['auth']], function () {
    Route::get('/', 'HomeController@index')->name('home');
    // Permissions
    Route::delete('permissions/destroy', 'PermissionsController@massDestroy')->name('permissions.massDestroy');
    Route::resource('permissions', 'PermissionsController');

    // Roles
    Route::delete('roles/destroy', 'RolesController@massDestroy')->name('roles.massDestroy');
    Route::resource('roles', 'RolesController');

    // Users
    Route::delete('users/destroy', 'UsersController@massDestroy')->name('users.massDestroy');
    Route::resource('users', 'UsersController');

    // Projects
    Route::delete('projects/destroy', 'ProjectsController@massDestroy')->name('projects.massDestroy');
    Route::resource('projects', 'ProjectsController');

    // Folders
    Route::delete('folders/destroy', 'FoldersController@massDestroy')->name('folders.massDestroy');
    Route::post('folders/media', 'FoldersController@storeMedia')->name('folders.storeMedia');
    Route::post('folders/ckmedia', 'FoldersController@storeCKEditorImages')->name('folders.storeCKEditorImages');
    Route::resource('folders', 'FoldersController');

    // Resep
    // Route::get('resep','ResepsController@index');
    Route::delete('reseps/destroy', 'ResepsController@massDestroy')->name('reseps.massDestroy');
    Route::resource('reseps', 'ResepsController');

    // Kategori
    Route::delete('kategories/destroy', 'KategoriesController@massDestroy')->name('kategories.massDestroy');
    Route::resource('kategories', 'KategoriesController');

    // Contact
    Route::delete('contacts/destroy', 'ContactsController@massDestroy')->name('contacts.massDestroy');
    Route::resource('contacts', 'ContactsController');
    Route::put('contacts/update/{id}', 'ContactsController@update')->name('contacts.update');
});
Route::group(['prefix' => 'profile', 'as' => 'profile.', 'namespace' => 'Auth', 'middleware' => ['auth']], function () {
// Change password
    if (file_exists(app_path('Http/Controllers/Auth/ChangePasswordController.php'))) {
        Route::get('password', 'ChangePasswordController@edit')->name('password.edit');
        Route::post('password', 'ChangePasswordController@update')->name('password.update');
    }
});
