<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Http\Controllers\TimelineController;

class TimelineController extends Controller
{
    public function timeline() {
        return view('timeline');
    }
}
