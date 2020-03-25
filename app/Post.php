<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'id',
        'title',
        'text',
        'author_id',
        'image'
    ];

    protected $table = 'posts';

    public function author(){
        return $this->belongsTo(Author::class, 'author_id');
    }
}
