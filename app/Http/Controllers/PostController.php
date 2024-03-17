<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Models\Prefecture;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function index(Post $post)
    {
        return view('posts/index')->with(['posts' => $post->getPaginateByLimit()]);
    }

    public function show(Post $post)
    {
        return view('posts/show')->with(['post' => $post]);
    }

    public function create(Category $category, Prefecture $prefecture) //koko!
    {
        return view('posts/create')->with(['categories' => $category->get(), 'prefectures' => $prefecture -> get()]);
    }

    public function store(Post $post, Request $request)//koko!
    {
        $input_post = $request['post'];
        $post->user_id = Auth::id();
        $input_category = $request -> categories_array;
        
        $path = $request -> file('image') -> store('img');//画像保存
        $path2 = $request -> file('image2') -> store('img');
        $post -> image = basename($path);
        $post -> image2 = basename($path2);
        
        $post->fill($input_post)->save();
        $post->categories()->attach($input_category);
        return redirect('/posts/' . $post->id);
    }

    public function edit(Post $post)//koko!
    {
        return view('posts/edit')->with(['post' => $post]);
    }

    public function update(Request $request, Post $post)//koko!
    {
        $input_post = $request['post'];
        $post->fill($input_post)->save();

        return redirect('/posts/' . $post->id);
    }

}
