<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function make(Request $request, Comment $comment)
    {
        $input = $request['comment'];
        $comment->user_id = Auth::id();
        $comment->fill($input)->save();
        return redirect('/posts/' . $comment->post_id);
    }
}
