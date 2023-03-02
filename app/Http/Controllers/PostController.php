<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\PostTags;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Gate;

class PostController extends Controller
{
    public function index()
    {
        //** first found the id of category with PROJECT name, must be first created at admin panel after that find each post with that id */
        // $project_category_id = Category::all()->where('name', 'project')->first()->id;
        // $posts = Post::all()->where('category_id', $project_category_id);
        // $projects = $posts;

        /**
         * get tags from posts id
         */
        
        return view('posts.index', [
            'posts' => Post::latest()->filter(
                request(['search', 'category', 'author'])
                    )->paginate(6)->withQueryString(),
            // 'projects' => $projects
        ]);
    }

    public function show(Post $post)
    {
        // find a post by its slug and pass it to a view called "post"
        return view('posts.show', [
            'post' => $post,
            'categories' => Category::latest()->get(),
            'recentPosts' => Post::latest()->get(),
            'tags' => PostTags::getTags($post->id)
        ]);
    }

    /**
     * store like of post
     * @var post
     * @var mixed
     */
    public function storeLike(Post $post): mixed
    {
        $post->like($post->id);
        return back()->with('success', 'ممنون از اعلام علاقه مندی ات به این مطلب!');
    }
}
