<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Comment extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function post() //to say laravel :: post_id
    {
        return $this->belongsTo(Post::class);
    }

    public function author() //user_id?
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    /**
     * The has Many Relationship
     *
     * @var array
     */

     public function replies()

     {
         return $this->hasMany(Comment::class, 'parent_id');
     }
}
