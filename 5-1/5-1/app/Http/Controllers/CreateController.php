<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CreateController extends Controller
{
    public function add() {
        return view('create');
    }

    public function create() {
        return view('create');
    }

    public function message(Request $request) {
        $request->session()->flash('message', '投稿が完了しました。');
        return redirect()->route('timeline');
    }
}
