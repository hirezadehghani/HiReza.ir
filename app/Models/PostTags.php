<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class PostTags extends Model
{
    use HasFactory;

    protected $fillable = ['tag'];

    public function post_tags()
    {
        return $this->belongsTo(PostTags_Posts::class);
    }

    public static function getTags ($postId)
    {
        $tags = [];
        $tags_id_array = [];
        $tags_id = DB::table('post_tags__posts')->select('post_tags_id')->where('post_id', $postId)->get()->toArray();
        foreach ($tags_id as $tag_id){
            $tag_id = get_object_vars($tag_id)['post_tags_id'];
            array_push($tags_id_array, $tag_id);
        }
        foreach($tags_id_array as $tag_id)
        {
            $tagName = DB::table('post_tags')->select('tag')->where('id', $tag_id)->get();
            array_push($tags, $tagName[0]->tag);
        }
        return $tags;
    }

}
