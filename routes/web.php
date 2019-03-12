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

Auth::routes();

Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index')->name('home');

Route::get('profile', 'ProfileController@profile')->name('profile');
Route::post('profile', 'ProfileController@save_profile')->name('profile');

Route::get('generalprofile', 'ProfileController@generalprofile')->name('generalprofile');
Route::post('generalprofile', 'ProfileController@save_generalprofile')->name('generalprofile');

Route::get('/support', 'PagesController@support');
Route::get('/findmatch', 'PagesController@findmatch');
Route::get('/shop', 'PagesController@shop');
Route::get('/leaderboard', 'PagesController@leaderboard');
Route::get('/wager', 'PagesController@wager');
Route::get('/tournament', 'PagesController@tournament');
Route::get('/bank', 'PagesController@bank');
Route::get('/match', 'PagesController@match');
Route::get('/viewteam', 'PagesController@viewteam');
Route::get('/viewteam1', 'PagesController@viewteam1');
Route::get('/scoreprofile', 'PagesController@scoreprofile');
Route::get('/resultsubmittion', 'PagesController@resultsubmittion');
Route::get('/AllPlatform1', 'PagesController@AllPlatform1');
Route::get('/acceptmatch', 'PagesController@acceptmatch');
Route::get('/createteam', 'PagesController@createteam');
Route::get('/gamefilter', 'PagesController@gamefilter');
Route::get('gameselection', 'PagesController@gameselection');
Route::get('/notification', 'PagesController@notification');
Route::get('/selectionslider', 'PagesController@selectionslider');
Route::get('/submittmatch', 'PagesController@submittmatch');
Route::get('/Tournament1', 'PagesController@Tournament1');



Route::get('/mockedlogin', 'PagesController@mockedlogin');

Route::resource('posts', 'PostsController');

Route::post('/addProfile', 'ProfileController@addProfile');



Route::get('/gamecategory', 'GamecategoryController@gamecategory');
