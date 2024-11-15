<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\PostTags;
use App\Models\PostTags_Posts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;

class AdminPostController extends Controller
{
    public function index()
    {
        return view('admin.posts.index', [
            'posts' => Post::latest()->paginate(8)
        ]);
    }


    public function create()
    {
        $tagsName = $this->selectAllTags();
        return view('admin.posts.create', [
            'tags' => $tagsName
        ]);
    }

    public function store(Request $request)
    {
        $attributes = $this->validatePost();
        $attributes['user_id'] = auth()->id();
        if (isset($attributes['thumbnail'])) {
            $fileName = $request->file('thumbnail')->getClientOriginalName();
            $path = $request->file('thumbnail')->storeAs('thumbnails', $fileName, 'public');
            $attributes['thumbnail'] = $path;
            }

            //tags
            $tagsName = [];
            $tags = DB::table('post_tags')->select('tag')->get();
            foreach ($tags as $tag){
                array_push($tagsName, $tag->tag);
            }
            
            $create = Post::create($attributes);
            $post_id = $create->id;
        
        $this->storeTags($post_id, $request['tags']);
        return redirect("admin/posts/$post_id/edit")->with('success', 'مطلب اضافه شد!');
    }

    public function edit(Post $post)
    {
        $postTags = $this->selectPostTags($post->id);
        $tagsName = $this->selectAllTags();
        return view('admin/posts/edit', [
                                        'post' => $post,
                                        'postTags' => $postTags,
                                        'tags' => $tagsName
                                        ]);
    }

    public function update(Post $post, Request $request)
    {
        $attributes = $this->validatePost($post);

        if ($attributes['thumbnail'] ?? false) {
            $fileName = request()->file('thumbnail')->getClientOriginalName();
            $path = request()->file('thumbnail')->storeAs('thumbnails', $fileName, 'public');
            $attributes['thumbnail'] = $path;
        }
        
        //tags
        $tagsName = [];
        $tags = DB::table('post_tags')->select('tag')->get();
        foreach ($tags as $tag){
            array_push($tagsName, $tag->tag);
        }

        $this->storeTags($post->id, $request['tags']);
        $post->update($attributes);

        return redirect()->back()->with('success', 'مطلب بروزرسانی شد!');
    }

    public function destroy(Post $post)
    {
        if (isset($post->thumbnail) && Storage::exists($post->thumbnail)) {
            Storage::delete($post->thumbnail);
        }
        $post->delete(); 

        return redirect()->back()->with('success', 'مطلب حذف شد!');
    }

    protected function validatePost(?POST $post = null)    
    {
        $post ??= new Post();

        return request()->validate([
            'title' => 'required',
            'thumbnail' => 'image',
            'thumbnail_alt' => 'required_with:thumbnail',
            'slug' => ['required', Rule::unique('posts', 'slug')->ignore($post->id)],
            'excerpt' => 'required',
            'body' => 'required',
            'category_id' => ['required', Rule::exists('categories', 'id')],
            'tags' => ['required']
        ]);
    }

    public function storeTags($post, $tags)
    {
        $tags = explode(',', $tags);
        foreach($tags as $tag)  {
            $tag_attributes['tag'] = $tag;
            
            $post_tags_posts_attributes['post_tags_id'] = DB::table('post_tags')->select('id')->where('tag', $tag)->get()[0]->id;
            $post_tags_posts_attributes['post_id'] = $post;
            PostTags_Posts::updateOrCreate($post_tags_posts_attributes);
        }
    }

    public function selectAllTags()
    {
        $tagsName = [];
        $tags = DB::table('post_tags')->select('tag')->get();
        foreach ($tags as $tag) {
            array_push($tagsName, $tag->tag);
        }
        return $tagsName;
    }
    
    public function selectPostTags($post_id)
    {
        $postTags = [];
        $tags_id = DB::table('post_tags__posts')->select('post_tags_id')->where('post_id', $post_id)->get();
        foreach($tags_id as $tag_id) {
                $postTagName = DB::table('post_tags')->select('tag')->where('id', $tag_id->post_tags_id)->get();
                array_push($postTags, $postTagName[0]->tag);
        }
        return $postTags;
    }
}
