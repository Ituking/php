<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

class CreateController extends Controller
{
    public function add() {
        return view('create');
    }
}
