<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TimelineController extends Controller
{
    // public function timeline() {
    //     // データベースから一覧表示させるコードを記載
    //     view側にデータを渡す
    //     return view('timeline', ['posts' => $posts, ]);
    // }

    // public function add() {
    //     return view('admin.tweet.create');
    // }

    public function timeline() {
        return view('timeline');
    }
}

