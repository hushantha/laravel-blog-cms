<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['user_id', 'thumbnail', 'name', 'slug', 'is_published'];

    public function user() {
        return $this->belongsto(User::class);
    }

    public function posts() {
        return $this->belongstoMany(Post::class, 'category_posts');
    }
}
