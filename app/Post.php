<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'id',
        'title',
        'text',
        'author',
        'image'
    ];

    protected $table = 'posts';
}
