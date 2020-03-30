<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $fillable = ['category_id', 'title', 'body', 'is_active'];

    protected $casts = [ 'is_active' => 'boolean' ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function scopeByCategory($query, $category_id) {
        if ($category_id) {
            return $query->where('category_id', $category_id);
        } else {
            return $query;
        }
    }
}
