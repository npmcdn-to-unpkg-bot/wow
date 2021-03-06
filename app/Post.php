<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    //protected  $table = '{table_name}';

    protected $fillable = [
        'title',
        'sub_title',
        'content',
        'page_views'
    ];

    protected $guarded = ['id', 'password'];
}
