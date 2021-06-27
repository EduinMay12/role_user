<?php


use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('./welcome');
})->name('home');

Auth::routes();

Route::resource('/user','Backend\Role_User\UserController',['except'=>['create','store']])->names('user');
Route::resource('/role','Backend\Role_User\RoleController')->names('role');
Route::resource('/category','Backend\Role_User\CategoryController')->names('category');
Route::resource('/permission','Backend\Role_User\PermissionController')->names('permission');Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin', 'AdminController@index')->name('admin');

Route::group(['middleware' => 'auth'], function () {
	Route::post('profile', 'UserController@update_avatar');
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);
});

