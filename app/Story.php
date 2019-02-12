<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Story extends Model
{
    protected $fillable = ['title', 'content', 'image'];

    protected $casts = [
        'image' => 'array'
    ];
}
