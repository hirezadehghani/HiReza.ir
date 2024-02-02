<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostTags_Posts extends Model
{
    use HasFactory;
    protected $fillable = ['post_id', 'post_tags_id'];
    protected $with = ['posts', 'post_tags'];
    
    public function post_tags(){
        return $this->hasMany(Post::class);
    }

    public function postTags_tags(){
        return $this->hasMany(PostTags::class);
    }
}
