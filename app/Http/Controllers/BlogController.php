<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\BlogPosts;

class BlogController extends Controller
{
    public function showBlog()
    {
        $posts = BlogPosts::orderByDesc('publication_date')->get();
        
        return view('blog',['posts'=>$posts]);
    }

    public function showBlogDetail( $id )
    {
        $post = BlogPosts::findOrFail($id);

        return view('blog-detail',['post'=>$post]);
    }
}
