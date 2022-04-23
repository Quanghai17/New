@extends('layouts.main')

@section('content')
<style>
    .post.thumb img{
          height: 244px;  
          width: 364px;
    }
    .far fa-eye{
        border-left: 10px;
    }
    .activity span{
        padding-left: 0px;
    }
    #main.category-page {
    margin-top: 25px !important;
}
    .h1, h2, h3, h4, h5, h6{
        margin: 14px 0 0px;
    }
</style>


    <!-- Main -->
    {{-- @dd($blog) --}}
    {{-- @if (count($blog->child) > 0)
        <section class="list-blog">
            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                        
                            <div class="menu">
                                @foreach ($blog->child as $child)
                                    <div style="padding: ">
                                       <h4><a href="{{ route('blogs', [$child->slug]) }}">{{ $child->title }}</a></h4> 
                                    </div>
                            </div>
                            @endforeach
                        
                    </div>
                </div>
            </div>
        </section>
    @endif --}}


    <section id="main" class="category-page">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="post-wrap">
                        @if (count($articles) > 0)
                            @foreach ($articles as $article)
                                <article class="post">
                                    <div class="thumb">
                                        <a href="{{ route('articles', [Route::current()->blog_slug, $article->slug]) }}">
                                            <img   src="{{ Voyager::image($article->thumbnail('cropped')) }}" alt="img" alt="img" >
                                        </a>
                                    </div>
                                    <div class="content">

                                        <div class="cat">
                                            <a href="#">Admin</a>
                                        </div>
                                        <h3><a
                                                href="{{ route('articles', [Route::current()->blog_slug, $article->slug]) }}">{{ $article->title }}</a>
                                        </h3>
                                        <p class="excerpt-entry">{{ $article->description }}</p>
                                        <div class="activity">
                                             <span class="">
                                                <i  class="far fa-eye"></i><a>{{ $article->view }}</a></span>
                                            <span class="">
                                                <i class="fas fa-comments"></i>15</a></span>
                                        </div>
                                    </div>
                                </article><!--  /.article -->
                            @endforeach

                        @else
                            <p>{{ __('Không có bài viết nào') }}</p>
                        @endif
                        
                    </div><!-- /.social-media-posts -->
                </div><!-- /.col-md-8 -->
                <div class="col-md-4">
                    <div class="sidebar-widget-1">

                        <div class="widget widget-ads">

                            <p class="text-ad">Advertisement</p>
                        </div><!-- /.widget-ads -->
                        <div class="widget widget-tabs">
                            <div class="tabs">
                                <ul class="menu-tab">
                                    <li class="active"><a href="#">Bài viết nổi bật</a></li>
                                    <li><a href="#">Tags</a></li>
                                </ul><!-- /.menu-tab -->
                                <div class="content-tab">
                                    <div class="content">
                                        <ul class="pop-posts">
                                            @foreach ($popular as $article)
                                                <li>
                                                    <div class="thumb">
                                                        <a
                                                            href="{{ route('articles', [Route::current()->blog_slug, $article->slug]) }}"><img
                                                                src="{{ Voyager::image($article->image) }}" alt="img"></a>
                                                                {{-- src="{{ Voyager::image($article->thumbnail('small')) }}" alt="img"></a> --}}
                                                    </div>
                                                    <div class="text">
                                                        <a
                                                            href="{{ route('articles', [Route::current()->blog_slug, $article->slug]) }}">{{ $article->title }}</a>
                                                        <i>{{ $article->created_at->format('H:i, M d') }}</i>
                                                    </div>
                                                </li>
                                            @endforeach

                                        </ul>
                                    </div><!-- /.comments -->
                                    <div class="content">
                                        <div class="tags">
                                            <a href="#">business</a>
                                            <a href="#">themeforest</a>
                                            <a href="#">good news</a>
                                            <a href="#">startups</a>
                                            <a href="#">red</a>
                                            <a href="#">politics</a>
                                            <a href="#">europe</a>
                                            <a href="#">asia</a>
                                        </div>
                                    </div><!-- /.comments -->
                                </div><!-- /.content-tab -->
                            </div><!-- /.tabs -->
                        </div><!-- /.widget-tabs -->
                        <div class="widget widget-follow-us">
                            <h5 class="widget-title text-dark">Follow Us</h5>
                            <div class="socials">
                                <a class="facebook" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="twitter" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="google" href="#"><i class="fab fa-google-plus-g"></i></a>
                                <a class="youtube" href="#"><i class="fab fa-youtube"></i></a>
                                <a class="linkedin" href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a class="tumblr" href="#"><i class="fab fa-tumblr"></i></a>
                            </div>
                        </div><!-- /.widget-follow-us -->
                       
                        <div class="widget widget-subscribe">
                            <h5 class="widget-title">Good News Newsetter</h5>
                            <p>Subscribe to our email newsletter for good news, sent out every Monday.</p>
                            <form method="post" action="#" id="subscribe-form" data-mailchimp="true">
                                <div id="subscribe-content">
                                    <div class="input">
                                        <input type="text" id="subscribe-email" name="subscribe-email" placeholder="Email">
                                    </div>
                                    <div class="button">
                                        <button type="button" style="background-color: red" id="subscribe-button" class=""
                                            title="Subscribe now">Subscribe</button>
                                    </div>
                                </div>
                                <div id="subscribe-msg"></div>
                            </form>
                        </div><!-- /.widget-subscribe -->
                    </div><!-- /.sidebar -->
                </div><!-- /.col-md-4 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section>

@endsection
