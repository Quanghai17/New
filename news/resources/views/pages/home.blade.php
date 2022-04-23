@extends('layouts.main')

@section('content')
    <style>
        .featured-posts .content-right h3 a {
    font-size: 28px;
    line-height: 13px;
    font-weight: 500;

    }
    .section-title h4  {
        font-size: 34px;
        font-weight: 700;
        line-height: 40px;
    }
    h1, h2, h3, h4, h5, h6 {
    color: #181818;
    margin: -2px 0 21px;
    font-weight: 500;
    line-height: 40px;
    
}
    </style>
    <!-- Main -->
    <section id="main">
        <div class="container">
            <h3><p>Điểm tin sáng hàng ngày</p></h3>
            <div class="row">
                <div class="col-md-12">
                    <div class="featured-posts gn-animation" data-animation="fadeInUp" data-animation-delay="0"
                        data-animation-offset="75%">
                        <div class="content-left">
                            <article class="post">
                                <div class="thumb">
                                    <a href="{{route('articles.show',$most_popular->slug)}}"><img src="{{ Voyager::image($most_popular->image) }}" alt="img"></a>
                                </div>
                                <div class="cat">
                                    <a href="">Mustreads</a>
                                </div>
                                <h3><a href="{{route('articles.show',$most_popular->slug)}}">{{ $most_popular->title }}</a></h3>
                                <p class="excerpt-entry">{{ $most_popular->description }}</p>
                                <div class="post-meta">
                                    <span class="author">By <a href="#">Quang Minh</a></span>
                                    <div class="activity">
                                        <span class="">
                                           <i  class="far fa-eye"></i><a>{{$most_popular->view }}</a></span>
                                       <span class="">
                                           <i class="fas fa-comments"></i>15</a></span>
                                   </div>
                                </div>
                            </article><!--  /.post -->
                        </div><!-- /.content-left -->
                        <div class="content-right">
                            @foreach ($articles as $article)
                                <article class="post">

                                    <div class="thumb">
                                        <a href="{{route('articles.show',$article->slug)}}"><img src="{{ Voyager::image($article->thumbnail('cropped')) }}" alt="img"></a>
                                    </div>
                                    <div class="cat">
                                        <a href="">Tech</a>
                                    </div>
                                    <h3 style="font-size: 30px;"><a href="{{route('articles.show',$article->slug)}}">{{ $article->title }}</a></h3>
                                    <p class="excerpt-entry">{{ $article->description }}</p>
                                    <div class="activity">
                                        <span class="">
                                           <i  class="far fa-eye"></i><a>{{ $article->view }}</a></span>
                                       <span class="">
                                           <i class="fas fa-comments"></i>15</a></span>
                                   </div>
                                </article><!--  /.post -->
                            @endforeach
                        </div><!-- /.content-right -->
                    </div><!-- /.featured-posts -->

                    <div class="popular-posts gn-animation" data-animation="fadeInUp" data-animation-delay="0"
                        data-animation-offset="75%">
                        <div class="gn-line"></div>
                        <div class="section-title">
                            <h4><p>Bài viết nổi bật nhất tuần</p></h4>
                        </div>
                        <div class="content-left">
                            <article class="post">
                                <div class="thumb">
                                    <a href="#"><img src="https://i1-vnexpress.vnecdn.net/2022/01/15/u5-plus-vne-1642211805-6173-1642212702.jpg?w=680&h=0&q=100&dpr=1&fit=crop&s=Uk0QW3mxRTrKjkMOUgm6PA" alt="img"></a>
                                </div>
                                <div class="cat">
                                    <a href="">Mustreads</a>
                                </div>
                                <h3><a href="#">Beijing U5 Plus - sedan cỡ C giá chưa tới 400 triệu đồng</a></h3>
                                <p class="excerpt-entry">U5 Plus nhập Trung Quốc, động cơ 1.5, cạnh tranh Honda Civic, Mazda3 nhưng giá cao nhất chỉ 498 triệu đồng, rẻ hơn cả xe cỡ B như Vios, Accent.</p>
                                <div class="post-meta">
                                    <span class="author">By <a href="#">John Doe</a></span>
                                    <div class="activity">
                                        <i class="far fa-eye">345</i><span class="comment"><a
                                                href="#">15</a></span>
                                    </div>
                                </div>
                            </article><!--  /.post -->
                        </div><!-- /.content-left -->
                        <div class="content-right">
                            @foreach ($popular as $article)
                                <article class="post">
                                    <div class="thumb">
                                        <a href="{{route('articles.show',$article->slug)}}"><img src="{{ Voyager::image($article->image) }}" alt="img"></a>
                                    </div>
                                    <div class="content">
                                        <h3><a href="{{route('articles.show',$article->slug)}}">{{ $article->title }}</a></h3>
                                        <span class="date">{{ $article->updated_at->format('H:m, M d') }}</span>
                                    </div>
                                </article><!--  /.post -->
                            @endforeach
                        </div><!-- /.content-right -->
                    </div><!-- /.popular-posts -->

                </div><!-- /.row -->
            </div><!-- /.container -->
    </section>
@endsection
