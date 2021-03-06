<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ViewBlog extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'category_name', 'category_slug', 'title', 'slug', 'content', 'thumbnail', 'created_at', 'updated_at'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];

    public function scopeBySlug($query, $slug)
    {
        return $query->where('slug', $slug);
    }

    public function scopeByCategory($query, $slug)
    {
        return $query->where('category_slug', $slug);
    }
}
