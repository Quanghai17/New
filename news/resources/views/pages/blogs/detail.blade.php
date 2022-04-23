@extends('layouts.main')

@section('content')
    <style>
        .post-single .share-post ul li.count-share .numb {
    font-size: 30px;
    line-height: 33px;
    font-weight: 700;
    }
    </style>

    {{-- @dd($post) --}}

    <!-- Main -->
    <section id="main">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="post-wrap posts post-single">
                        <article class="post">
                            <div class="head-post">
                                <h2> {{ $article->title }}</h2>
                                <p> {{ $article->description }}</p>
                                <div class="meta">
                                    <span class="author">Time <a
                                            
                                     class="time"> {{ $article->updated_at->format('H:m, M d') }}</span>
                                </div>
                            </div><!-- /.head-post -->
                            <div class="body-post">
                                <div class="share-post">
                                    <ul>
                                        <li class="count-share"><span class="numb">{{ $article->view }}</span><span>Views</span>
                                        </li>
                                        <li class="email"><a
                                                href="#">Email</a>
                                        </li>
                                        <li class="facebook"><a
                                                href="#">Facebook</a>
                                        </li>
                                        <li class="twitter"><a
                                                href="#">Twitter</a>
                                        </li>
                                        <li class="more"><a
                                                href="#">More</a>
                                        </li>
                                    </ul>
                                </div><!-- /.share-post -->
                                <div class="main-post">
                                    <div class="entry-post">
                                        {!! $article->content !!}
                                    </div><!-- /.entry-post -->
                                    <div class="help-post">
                                        <div class="helpful">
                                            <a class="like"
                                                href="http://www.vprowand.com/html5/goodnews/article-detail.html#">I found
                                                this helpful </a>
                                            <a class="dislike"
                                                href="http://www.vprowand.com/html5/goodnews/article-detail.html#">I did not
                                                find this helpful</a>
                                        </div>
                                        <div class="tags">
                                            <a
                                                href="http://www.vprowand.com/html5/goodnews/article-detail.html#">Startups</a>
                                            <a
                                                href="http://www.vprowand.com/html5/goodnews/article-detail.html#">Technology</a>
                                            <a href="http://www.vprowand.com/html5/goodnews/article-detail.html#">Millions
                                                of dollars</a>
                                            <a href="http://www.vprowand.com/html5/goodnews/article-detail.html#">Paul
                                                Graham</a>
                                        </div>
                                    </div><!-- /.help-post -->

                                    <div class="comment-post">
                                        <div class="comments-list">
                                            <h4 class="title"> Comments</h4>
                                            <ul>
                                                @foreach ($comment as $item)
                                                <li>
                                                    <article class="comment">
                                                        <div class="comment-order">1</div>
                                                        <div class="avatar">
                                                            <img src="http://www.vprowand.com/html5/goodnews/images/user.jpg" alt="image">
                                                        </div>
                                                        <div class="comment-text">
                                                            <div class="comment-head">
                                                                <span class="author">{{$item->name}}</span>
                                                                {{-- <span class="date">{{$item->create_at}}</span> --}}
                                                                <span class="reply"><a>{{ $item->updated_at->format('H:m, M d') }}</a></span>
                                                            </div>
                                                            <p class="comment-body">{{$item->body}}.</p>
                                                        </div>
                                                    </article><!-- /.comment -->
                                                </li>
                                                @endforeach
                                               
                                               
                                            </ul>
                                        </div><!-- /.comments-list -->
                                        <div id="respond" class="comment-respond">
                                            <h4 class="title">Bình luận bài viết</h4>
                                            <form class="comment-form"  method="post" action="{{route('comment.store')}}">
                                                @csrf
                                                <div class="name-comment">
                                                    <input type="text" size="32" value="" tabindex="1" placeholder="Name"
                                                        name="name" required="">
                                                </div>
                                                <input type="hidden" name="article_id" value="{{$article->id}}">
                                                <div class="email-comment">
                                                    <input class="email-comment" type="text" size="32" value=""
                                                        tabindex="2" placeholder="Email" name="email" required="">
                                                    <span>Will not be published</span>
                                                </div>
                                                <div class="message-comment">
                                                    <textarea tabindex="4" placeholder="Message" name="comment"
                                                        required=""></textarea>
                                                </div>
                                                <div class="submit-comment" >
                                                    <button style="background-color: red" type="submit" class="send-btn gn-button">  Submit </button>
                                                </div>
                                            </form>
                                            <!-- /.comment-form -->
                                        </div>
                                    </div><!-- /.comment-post -->


                                </div><!-- /.main-post -->
                            </div><!-- /.body-post -->
                        </article><!-- /.post -->
                    </div><!-- /.post-wrap -->

                    <div class="relate-posts">

                        <div class="section-title">
                            <h4><a href="#">Đọc các bài viết liên quan</a>
                            </h4>
                        </div>
                        <div class="post-wrap">
                            @foreach ($raleted as $val)
                                <article class="post">
                                    <div class="thumb">
                                        <a href="{{ Voyager::image($val->image) }}"><img
                                                src="{{ Voyager::image($val->thumbnail('small')) }}" alt="img"></a>
                                    </div>
                                    <div class="content">
                                        <div class="cat">
                                            <a
                                                href="http://www.vprowand.com/html5/goodnews/article-detail.html">Mustreads</a>
                                        </div>
                                        <h3><a href="{{route('articles.show',$val->slug)}}">
                                                    {{ $val->title }} </a></h3>
                                            <p class="  excerpt-entry">
                                                {{ $val->description }}
                                                </p>
                                                <div class="post-meta">
                                                    <span class="time"> {{ $article->updated_at->format('H:m, M d') }}</span>
                                                </div>
                                    </div>
                                </article>
                            @endforeach
                        </div>




                    </div>
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->

    </section>

@endsection
{{-- 
<script>
    @if (session('status'))
        alert({{session('status')}});
    @endif
</script> --}}


