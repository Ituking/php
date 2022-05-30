<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Post;



class TimelineController extends Controller
{   
    public function timeline() {
        return view('timeline');
    }

    public function create(Request $request) {

        $this->validate($request, Post::$rules);

        $posts = new Post;
        $form = $request->all();

        if (isset($form['video'])) {
            $path = $request->video('video')->store('public/video');
            $posts->video_path = basename($path);
        } else {
            $posts->video_path = null;
        }

        unset($form['_token']);
        unset($form['video']);

        $posts->fill($form);
        $posts->save();
        
        return view('create');
    }

    public function message(Request $request) {
        $request->session()->flash('message', '投稿が完了しました。');
        return redirect()->route('timeline');
    }

    public function index(Request $request) {
        $cond_title = $request->cond_title;
        if ($cond_title != '') {
            $posts = Post::where('title', $cond_title)->get();
        } else {
            $posts = Post::all();
        }
        return view('create', ['posts' => $posts, 'cond_title' => $cond_title]);
    }

}

