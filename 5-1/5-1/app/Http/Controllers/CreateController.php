<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

class CreateController extends Controller
{
    public function add() {
        return view('create');
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
}
