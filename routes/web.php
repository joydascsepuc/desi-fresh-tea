<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

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

/*Route::get('/', function () {
    return view('welcome');
});*/

/*Pages*/
Route::get('/', 'App\Http\Controllers\PagesController@index')->name('homePage');
Route::get('/about', 'App\Http\Controllers\PagesController@about')->name('aboutCompany');
Route::get('/brand', 'App\Http\Controllers\PagesController@brand')->name('brand');
Route::get('/ceomessage', 'App\Http\Controllers\PagesController@ceomessage')->name('ceomessage');
Route::get('/corporatesr', 'App\Http\Controllers\PagesController@corporatesr')->name('corporateSocialResponsibilities');
Route::get('/faq', 'App\Http\Controllers\PagesController@faq')->name('frequentlyAskedQuestions');
Route::get('/gallery', 'App\Http\Controllers\PagesController@gallery')->name('gallery');
Route::get('/history', 'App\Http\Controllers\PagesController@history')->name('historyWithTea');
Route::get('/ourproduct', 'App\Http\Controllers\PagesController@ourproduct')->name('ourProduct');
Route::get('/mission', 'App\Http\Controllers\PagesController@mission')->name('missionVision');
Route::get('/contact', 'App\Http\Controllers\PagesController@contact')->name('contact');


/*Admin's Routes*/
Route::get('/adminHome', 'App\Http\Controllers\AdminController@index')->name('adminHome');
Route::resource('website','App\Http\Controllers\WebsiteController');
Route::resource('product','App\Http\Controllers\ProductController');
Route::resource('faq','App\Http\Controllers\FaqController');
Route::resource('mission','App\Http\Controllers\MissionController');
Route::resource('vision','App\Http\Controllers\VisionController');


Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
