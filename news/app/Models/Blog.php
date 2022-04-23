<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

   
    /**
     * Get the user that owns the Blog
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function parent()
    {
        return $this->belongsTo(Blog::class, 'parent_id', 'id');
    }

    public function child()
    {
        return $this->hasMany(Blog::class, 'parent_id', 'id');
    }

    // public function getChild($blog_slug)
    // {
    //     return $this::whereHas('parent', function ($query) use($blog_slug) {
    //         $query->where('slug', $blog_slug);
    //     })->get();
    // }
}
