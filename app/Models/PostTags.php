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

    public static function getAll()
    {
        $all_tags = [];
        $tags = DB::table('post_tags')->select('tag')->get()->toArray();

        foreach($tags as $tag)
        {
            $tag = get_object_vars($tag)['tag'];
            array_push($all_tags, $tag);
        }
        return $all_tags;
    }

    /**
     * @var $tag_name
     * @var array
     */

    public function getPostTags(string $tag_name): array
    {
        $all_posts = [];
        $post_ids = [];
        $post_tags_ids = DB::table('post_tags')->select('id')->where('tag',$tag_name)->get()->toArray();

        var_dump($post_tags_ids); exit;
        foreach($post_tags_ids as $post_tag_id)
        {
            $post_ids = DB::table('post_tags__posts')->select('post_id')->where('post_tags_id', $post_tag_id)->get()->toArray();
            ddd($post_ids);

            foreach($post_ids as $post_id)
            {
                $post_id = get_object_vars($post_id)['post_id'];
                array_push($post_ids, $post_id);
            }
        }
        return $post_ids;
    }
}