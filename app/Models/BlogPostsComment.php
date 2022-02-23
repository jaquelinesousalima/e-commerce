<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogPostsComment extends Model
{
    use HasFactory;
    public $table = 'blog_posts_comment';
}
