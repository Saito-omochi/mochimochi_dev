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
    

        $img1 = $request -> file('image');//画像保存。なくても大丈夫なように条件分岐をした
        $img2 = $request -> file('image2');
        if($img1 != null){
            $path = $img1 -> store('public');
            $post -> image = basename($path);
        }
        if($img2 != null){
            $path2 = $img2 -> store('public');
            $post -> image2 = basename($path2);
        }
        
        $post->fill($input_post)->save();
        $post->categories()->attach($input_category);
        return redirect('/posts/' . $post->id);
    }
    
    public function search(Category $category, Prefecture $prefecture)
    {
        return view('posts.search')->with(['categories' => $category->get(), 'prefectures' => $prefecture ->get()]);
    }

    public function edit(Post $post, Category $category, Prefecture $prefecture)//koko!
    {
        return view('posts/edit')->with(['post' => $post, 'categories' => $category->get(), 'prefectures' => $prefecture -> get()]);
    }

    public function update(Request $request, Post $post)//koko!
    {
        $input_post = $request['post'];
        $post->fill($input_post)->save();

        return redirect('/posts/' . $post->id);
    }
    
    public function delete(Post $post)
    {
        $post->delete();
        return redirect('/');
    }

}
