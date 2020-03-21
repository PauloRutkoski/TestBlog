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

    public function getFormattedDate($date){
        return date('d-m-Y', strtotime($date));
    }

    protected $table = 'posts';
}
