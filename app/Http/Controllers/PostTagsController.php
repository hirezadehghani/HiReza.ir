<?php

namespace App\Http\Controllers;

use App\Models\PostTags;
use Illuminate\Http\Request;

class PostTagsController extends Controller
{
    public function show(PostTags $tag): Post
    {
        $url = url()->current();
        $tag_name = explode('/',$url)[4];
        
        $postTags = new PostTags;
        $postTags = $postTags->getPostTags($tag_name);
        ddd($postTags);

        // return view('posts.index',
        // [
        //     'tags' => $post_ids
        // ]);
    }
}
