<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    protected $primaryKey = 'post_id';

    public $timestamps = false;

    //可変項目
    protected $fillable = [
        'title',
        'body'
    ];
}
