<?php

use Illuminate\Support\Facades\Route;

use App\Header;

use App\Content;

use App\Hairstyle;

use Illuminate\Support\Facades\Auth;

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
    return view('welcome')
    ->with('header',Header::where('status', 'open')->get())
    ->with('conteant',Content::all())
    ->with('hairstyle',Hairstyle::all());
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Admin
Route::get('/admin/index' , 'Admin\AdminController@index')->name('admin');

//hairstyle
Route::get('/admin/Hairstyle/index' , 'Admin\HairstyleController@index')->name('hairstyle');
Route::get('/admin/Hairstyle/add', 'Admin\HairstyleController@add')->name('add_hairstyle');
Route::get('/admin/Hairstyle/edit/{id}', 'Admin\HairstyleController@edit');
Route::get('/admin/Hairstyle/delete/{id}' , 'Admin\HairstyleController@delete');

Route::post('/admin/Hairstyle/create','Admin\HairstyleController@create')->name('create_hairstyle');
Route::post('/admin/Hairstyle/update/{id}', 'Admin\HairstyleController@update');

//header
Route::get('/admin/Header/index' , 'Admin\HeaderController@index')->name('header');
Route::get('/admin/Header/add' , 'Admin\HeaderController@add')->name('add_header');
Route::get('/admin/Header/edit/{id}' , 'Admin\HeaderController@edit');
Route::get('/admin/Header/delete/{id}' , 'Admin\HeaderController@delete');
Route::get('/status/update', 'Admin\HeaderController@updateStatus')->name('header.update.status');

Route::post('/admin/Header/create' , 'Admin\HeaderController@create')->name('create_header');
Route::post('/admin/Header/update/{id}', 'Admin\HeaderController@update');

//content
Route::get('/admin/content/index' , 'Admin\ContentController@index')->name('content');
Route::get('/admin/content/add' , 'Admin\ContentController@add')->name('add_body');
Route::get('/admin/content/edit/{id}' , 'Admin\ContentController@edit');
Route::get('/admin/content/delete/{id}' , 'Admin\ContentController@delete');

Route::post('/admin/content/create' , 'Admin\ContentController@create')->name('create_content');
Route::post('/admin/content/update/{id}', 'Admin\ContentController@update');

//contact
Route::get('/admin/Contact/index' , 'Admin\ContactController@index')->name('contact');
Route::get('/admin/Contact/add' , 'Admin\ContactController@add')->name('add_contact');
Route::get('/admin/Contact/edit/{id}' , 'Admin\ContactController@edit');
Route::get('/admin/Contact/delete/{id}' , 'Admin\ContactController@delete');

Route::post('/admin/Contact/create' , 'Admin\ContactController@create')->name('create_contact');
Route::post('/admin/Contact/update/{id}', 'Admin\ContactController@update');
