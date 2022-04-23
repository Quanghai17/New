<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Resizable;
use App\Models\Blog;
use App\Comment;

class Article extends Model
{
    use HasFactory, Resizable;
    public function blog()
    {
        
        return $this->belongsTo(Blog::class, 'blog_id', 'id');
    }
    public function comments()
    {
        return $this->belongsToMany(Comment::class, 'pivot_comment_article', 'article_id', 'comment_id');
    }
}
