<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class book extends Model
{
    protected $fillable = ['name', 'pages', 'ISBN', 'price', 'published_at'];
}
