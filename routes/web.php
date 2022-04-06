<?php

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

Route::get('/', 'BerandaController@index')->name('home');
Route::get('/home', function () {
    if (session('status')) {
        return redirect()->route('admin.home')->with('status', session('status'));
    }

    return redirect()->route('admin.home');
});
// Career
Route::get('career', 'CareerController@index')->name('career');
Route::post('career', 'CareerController@store');
Route::post('career/media', 'CareerController@storeMedia')->name('career.storeMedia');

Auth::routes(['register' => false]);

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

    // Career
    Route::resource('careers', 'CareersController');
    Route::post('careers/media', 'CareersController@storeMedia')->name('careers.storeMedia');

    // Job
    Route::delete('jobs/destroy', 'JobsController@massDestroy')->name('jobs.massDestroy');
    Route::post('jobs/media', 'JobsController@storeMedia')->name('jobs.storeMedia');
    Route::post('jobs/ckmedia', 'JobsController@storeCKEditorImages')->name('jobs.storeCKEditorImages');
    Route::resource('jobs', 'JobsController');

    // Pengaturan
    Route::delete('pengaturans/destroy', 'PengaturanController@massDestroy')->name('pengaturans.massDestroy');
    Route::post('pengaturans/media', 'PengaturanController@storeMedia')->name('pengaturans.storeMedia');
    Route::post('pengaturans/ckmedia', 'PengaturanController@storeCKEditorImages')->name('pengaturans.storeCKEditorImages');
    Route::resource('pengaturans', 'PengaturanController');
});
Route::group(['prefix' => 'profile', 'as' => 'profile.', 'namespace' => 'Auth', 'middleware' => ['auth']], function () {
    // Change password
    if (file_exists(app_path('Http/Controllers/Auth/ChangePasswordController.php'))) {
        Route::get('password', 'ChangePasswordController@edit')->name('password.edit');
        Route::post('password', 'ChangePasswordController@update')->name('password.update');
        Route::post('profile', 'ChangePasswordController@updateProfile')->name('password.updateProfile');
        Route::post('profile/destroy', 'ChangePasswordController@destroy')->name('password.destroyProfile');
    }
});