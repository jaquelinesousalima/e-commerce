<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\BlogPostsComment;

class PostCommentController extends Controller
{
    public function addComment( request $request)
    {
        $comment = new BlogPostsComment;

        $comment->comment = $request->cmt;
        $comment->name = $request->name;
        $comment->email = $request->email;
        $comment->website = $request->web;

        $comment->save();

        return redirect('blog')->with('msg', 'Comment saved successfully');
    }
}
