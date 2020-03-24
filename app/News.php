<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $fillable = ['category_id', 'title', 'body', 'is_active'];
}
