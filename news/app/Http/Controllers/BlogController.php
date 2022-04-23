<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Blog;
use App\Comment;

class BlogController extends Controller
{
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($blog_slug)
    {
        // $articles = Article::whereHas('blog', function ($query) use($blog_slug) {
        //     $query->where('slug', $blog_slug);
        // })->orderBy('id', 'desc')->get();

        $id_slug = Blog::where('slug',$blog_slug)->first();
        $articles = Article::with('blog')->where('blog_id',$id_slug->id)->orderBy('id','DESC')->get();
        


        $popular = Article::whereHas('blog', function ($query) use($blog_slug) {
            $query->where('slug', $blog_slug);
        })->orderBy('view', 'desc')->limit(5)->get();

        $blog = Blog::where('slug', $blog_slug)->with('child')->first();
        return view('pages.blogs.list')->with(compact('blog', 'articles', 'popular'));
    }

    public function detail($blog_slug, $article_slug)
    {
        $article = Article::with('comments')->where('slug', $article_slug)->first();
        // with('comment')->

        // dd($article->comments);
        if ($article) {
            $article->view = $article->view + 1;
            $article->save();
        }
        
        $blogID = $article->blog_id;
        $raleted = Article::where('blog_id',$blogID)->limit(4)->get();

        $comment = Comment::where('article_id', $article->id)->limit(5)->get();  
        return view('pages.blogs.detail')->with(compact('article', 'raleted','comment'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function Search(Request $request)
    {
            $key_form=$request->key;    
            $key=str_replace(' ','%',$key_form); 
            $posts=Article::where('title','LIKE','%'.$key.'%')->get();       
            return view('pages.blogs.search',compact('key_form','posts'));
    }

    
}
