<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use Inertia\Inertia;
use App\Models\Post;
use Redirect;
use App\Models\Category;

class PostController extends Controller
{
    //
    public function index(Post $post)
    {
        return inertia("Post/Index",["posts" => $post->get()]);
    }
    
    public function show(Post $post)
    {
        // Eagerローディングを使って、Controller内でリレーション先のデータを紐付ける
        return inertia("Post/Show", ["post" => $post->load('category')]);
    }

    public function create(Category $category)
    {
        return inertia("Post/Create",["categories" => $category->get()]);
    }


    
    public function store(PostRequest $request, Post $post)
    {
        $input = $request->all();
        $post->fill($input)->save();
        return Redirect::route('post.show', $post->id);
    }
    
    public function edit(Post $post)
    {
        return inertia("Post/Edit", ["post" => $post]);
    }
        
    public function update(PostRequest $request, Post $post)
    {
        $input = $request->all();
        $post->fill($input)->save();
        return Redirect::route('post.show' ,$post->id);
    }
    
    public function delete(Post $post)
    {
        $post->delete();
        return Redirect::route('post.index');
    }
    

}
