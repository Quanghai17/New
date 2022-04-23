<?php

namespace App;
use App\Comment;

use Illuminate\Database\Eloquent\Model;


class Blog extends Model
{
    public function comments() {
        return $this->belongsToMany(Comment::class, 'pivot_comment_article', 'comment_id', 'article_id');
      }
}
