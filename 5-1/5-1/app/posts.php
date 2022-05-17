<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class posts extends Model
{
    protected $fillable = [ 
        'user_id', 
        'posts', 
        'body'
    ];
}
