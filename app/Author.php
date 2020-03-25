<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $fillable = [
        'id',
        'author_name'
    ];
    protected $table = 'authors';

    public function posts(){
        return $this->hasMany(Post::class, 'author_id');
    }
}
