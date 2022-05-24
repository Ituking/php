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
use App\Models\Post;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/timeline', [TimelineController::class, 'timeline']);

Route::get('/tweet', function(){
    $posts = posts::all();
    foreach ($posts as $post) {
        return $post->body;
    }
});