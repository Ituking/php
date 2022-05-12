<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth; 
use \App\posts; 

class TimelineController extends Controller
{
    public function showTimelinePage()
    {
        return view('auth.timeline'); // resource/views/auth/timeline.blade.phpを表示する
    }

    public function postTweet(Request $request) //ここはあとで実装します。(Requestはpostリクエストを取得するためのものです。)
    {
        $validator = $request->validate([ // これだけでバリデーションできるLaravelすごい！
            'posts' => ['required', 'string', 'min:0', 'max:255'], // 必須・文字であること・空欄の場合はつぶやけない・255文字までというバリデーションをします（ビューでも軽く説明します。）
        ]);
        posts::create([ // postsテーブルに入れるよーっていう合図
            'user_id' => Auth::user()->id, // Auth::user()は、現在ログインしている人（つまりツイートしたユーザー）
            'posts' => $request->tweet, // ツイート内容
        ]);
        return back(); // リクエスト送ったページに戻る（つまり、/timelineにリダイレクトする）
    }

    public function tweetSave() 
    {

    }
}
