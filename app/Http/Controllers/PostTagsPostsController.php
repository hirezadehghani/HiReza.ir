<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostTags_PostsRequest;
use App\Http\Requests\UpdatePostTags_PostsRequest;
use App\Models\PostTags_Posts;

class PostTagsPostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePostTags_PostsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePostTags_PostsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PostTags_Posts  $postTags_Posts
     * @return \Illuminate\Http\Response
     */
    public function show(PostTags_Posts $postTags_Posts)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PostTags_Posts  $postTags_Posts
     * @return \Illuminate\Http\Response
     */
    public function edit(PostTags_Posts $postTags_Posts)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePostTags_PostsRequest  $request
     * @param  \App\Models\PostTags_Posts  $postTags_Posts
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePostTags_PostsRequest $request, PostTags_Posts $postTags_Posts)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PostTags_Posts  $postTags_Posts
     * @return \Illuminate\Http\Response
     */
    public function destroy(PostTags_Posts $postTags_Posts)
    {
        //
    }
}
