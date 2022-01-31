<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class comic extends Model
{
    protected $fillable = [

        'title',
        'author',
        'release_date',
        'pages'
    ];
}
