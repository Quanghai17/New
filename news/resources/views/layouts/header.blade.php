<!-- Header -->
@php
$menu = menu('header', '_json');
@endphp

<style>
    .top-wrap .signup-popup a {
        padding: 1px 30px;
    }

    #mainnav>ul>li>a {
        color: #f2f7f2;
    }

</style>
<header id="header" class="header">
    <div class="top-wrap" style="background: #e71212">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div id="logo" class="logo">
                        <a href="./" rel="home" title="home">
                            <img src="{{ asset('assets/images/logo.svg') }}" alt="Good News" />
                        </a>
                    </div>
                </div><!-- /.row -->
                @if (Auth::check())
                    <div class="col-md-6">
                        <div class="btn-menu"></div><!-- //mobile menu button -->
                        <div class="member-area">
                            <div class="member">
                                <div class="welcome">
                                    Welcome <span class="name">{{ Auth::user()->name }}</span>
                                    <div class="member-options">
                                        <div class="avatar">
                                            <div class="thumb">
                                                <img src="http://www.vprowand.com/html5/goodnews/images/user.jpg"
                                                    alt="image">
                                            </div>
                                            <span class="fullname">{{ Auth::user()->name }}</span>
                                        </div>
                                        <div class="logout"><a href="#">
                                                <form method="POST" action="{{ route('logout') }}">
                                                    @csrf

                                                    <x-dropdown-link :href="route('logout')" onclick="event.preventDefault();
                                                            this.closest('form').submit();">
                                                        {{ __('Log Out') }}
                                                    </x-dropdown-link>
                                                </form>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- /.col-md-6 -->
                @else
                    <div class="col-md-6">
                        <div class="btn-menu"></div><!-- //mobile menu button -->
                        <div class="member-area">
                            <span class="login-popup"><a href="http://localhost/laravel/news/public/login">Đăng
                                    nhập</a></span>
                            <span class="signup-popup"><a href="http://localhost/laravel/news/public/register">Đăng kí
                                    thành
                                    viên</a></span>
                        </div>
                    </div>
                @endif

                <div class="header-wrap">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-9">
                                <nav id="mainnav" class="mainnav">
                                    <ul class="menu">
                                        @foreach ($menu as $item)
                                            <li class="@if (count($item->children) > 0) has-children @endif">
                                                <a class=""
                                                    href="{{ asset($item->url) }}">{{ $item->title }}</a>

                                                @if (count($item->children) > 0)
                                                    <ul class="sub-menu">
                                                        @foreach ($item->children as $children)
                                                            <li><a
                                                                    href="{{ asset($children->url) }}">{{ $children->title }}</a>
                                                            </li>
                                                        @endforeach
                                                    </ul>
                                                @endif
                                            </li>
                                        @endforeach
                                    </ul><!-- /.menu -->
                                </nav><!-- /nav -->

                            </div><!-- /.col-md-9 -->
                            <div class="col-md-3">
                                <div class="search-wrap">
                                    <div class="search-icon"></div><!-- //mobile search button -->
                                    <form action="{{ route('search') }}" id="searchform" class="search-form"
                                        method="get" role="search">
                                        <input type="text" id="s" placeholder="Search" class="search-field"
                                            name="key">
                                        <input type="submit" value="&#xf002;" id="searchsubmit" class="search-submit">
                                        <a class="search-close" href="#"><i class="fa fa-times-circle"></i></a>
                                    </form>
                                </div><!-- /.search-wrap -->
                            </div><!-- /.col-md-3 -->
                        </div><!-- /.row -->
                    </div><!-- /.container -->
                </div><!-- /.header-wrap -->
                <!-- Login and Signup Form -->

</header>
