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

use App\Http\Controllers\TimelineController;
use App\Http\Controllers\CreateController;
use App\Post;

Route::get('/', function() {
    return view('welcome');
});

Route::get('/timeline', [TimelineController::class, 'timeline']);

// Route::get('/timeline', function() {
//     return view('timeline');
// });

Route::get('/tweet', function(){
    $posts = Post::all();
    foreach ($posts as $post) {
        return $post->body;
    }
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'main'], function() {
    Route::get('/create', 'Controllers\CreateController@add')->middleware('auth');
    Route::post('/create', 'Controllers\CreateController@create')->middleware('auth');
    Route::get('posts', 'Controllers\CreateController@index')->middleware('auth');
});