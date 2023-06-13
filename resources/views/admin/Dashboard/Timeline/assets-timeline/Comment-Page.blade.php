{{--@extends('layouts.Layout')--}}
{{--@section('comments')--}}
{{-- <div class="container bootstrap snippets bootdey">--}}
    {{-- <div class="row">--}}
        {{-- <div class="col-md-12">--}}
            {{-- <div class="blog-comment">--}}
                {{-- <h3 class="text-success">Comments</h3>--}}
                {{--
                <hr />--}}
                {{-- @livewire('show-comment',['postId' => $posts[0]->id])--}}
                {{-- <div class="thinking__line"></div>--}}

                {{--@endsection--}}

                <!DOCTYPE html>
                <html lang="en">

                <head>
                    <meta charset="UTF-8">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <!--=============== CSS ===============-->
                    <link rel="stylesheet" href="{{asset('assets/css/stylesTimeline.css')}}">
                    <link rel="stylesheet" href="{{asset('assets/css/stylesComment.css')}}">
                    <!--=============== FAVICON ===============-->
                    <link rel="shortcut icon" href="{{asset('assets/img/favicon.png')}}" type="image/x-icon">

                    <!--=============== BOXICON ===============-->
                    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
                    <!--=============== REMIXICONS ===============-->
                    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">

                    <title>FitnessFuelX</title>
                </head>

                <body>


                    <!--=============== NAVBAR ===============-->
                    <nav class="nav" id="nav">
                        <div class="nav__menu container" id="nav-menu">
                            <div class="nav__shape"></div>

                            <div class="nav__close" id="nav-close">
                                <i class='bx bx-x'></i>
                            </div>

                            <div class="nav__data">
                                <div class="nav__mask" onclick="window.location.href = '{{ route('myprofile')}}' ;">

                                    <img src="{{asset('images/user-profile/'.$client->photo)}}" alt="" class="nav__img">
                                </div>

                                <span class="nav__greeting">Hi,</span>
                                <h1 class="nav__name">
                                    <p class="user__name">{{$client->name}}</p>
                                </h1>
                            </div>

                            <ul class="nav__list">
                                <li class="nav__item">
                                    <a href="{{route('dashboard')}}" class="nav__link">
                                        <i class='bx bxs-home'></i> Home
                                    </a>
                                </li>
                                <li class="nav__item">
                                    <a href="{{ route('myprofile')}}" class="nav__link">
                                        <i class='bx bxs-user'></i> Profile
                                    </a>
                                </li>
                                <li class="nav__item">
                                    <a href="{{route('plan_workout')}}" class="nav__link">
                                        <i class='bx bx-dumbbell'></i> Workout
                                    </a>
                                </li>
                                <li class="nav__item">
                                    <a href="{{route('nut_show')}}" class="nav__link">
                                        <i class='bx bx-bowl-hot'></i> Nutrition
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </nav>

                    <!--=============== MAIN ===============-->
                    <main class="main" id="main">
                        <!--=============== HEADER ===============-->
                        <header class="header" id="header">
                            <nav class="header__nav container">
                                {{-- <ul class="navbar-nav">--}}
                                    {{-- <li class="nav-item">--}}
                                        {{-- <a class="nav-link" data-widget="pushmenu" href="#"><i
                                                class="fas fa-bars"></i></a>--}}
                                        {{-- </li>--}}
                                    {{-- <li class="nav-item d-none d-sm-inline-block">--}}
                                        {{-- <a href="index3.html" class="nav-link">Home</a>--}}
                                        {{-- </li>--}}
                                    {{-- <li class="nav-item d-none d-sm-inline-block">--}}
                                        {{-- <a href="{{route('logout')}}" class="nav-link">Logout</a>--}}
                                        {{-- </li>--}}
                                    {{-- </ul>--}}
                                <a href="{{route('dashboard')}}" class="header__logo">
                                    <img src="{{asset('assets/img/favicon.png')}}" alt="logo">
                                    <p>FitnessFuelX</p>
                                </a>

                                @include('admin.Dashboard.Timeline.assets-timeline.search-bar')

                                <div class="icons">

                                    @livewire('notification')


                                    <!-- Toggle button -->
                                    <div class="header__toggle" id="header-toggle">
                                        <i class='bx bx-grid-alt'></i>
                                    </div>
                                </div>
                            </nav>
                        </header>
                        <section class="section section__height container" id="home">
                            <!-- here i will put post and create post  -->
                            <div class="page__container">
                                @foreach ($posts as $post)
                                <div class="post__maker main-post post-maker">
                                    <div class="owner__container">
                                        <div class="owner__info">
                                            <div class="post__img">
                                                <img src="{{asset('images/user-profile/'.$post->user->photo)}}" alt="">
                                            </div>
                                            <div class="owner__name">
                                                <h1 class="user__name">{{$post->user->name}}</h1>
                                                <p class="time">{{$post->created_at}} </p>
                                            </div>
                                        </div>
                                        <div class="posts__icons">
                                            <!-- <i class='bx bx-x delete-post'></i> -->
                                        </div>
                                    </div>
                                    <div class="posts__content">
                                        <p>{{$post->text}}</p>
                                    </div>
                                    <div class="posts__img">
                                        <img src="{{asset('images/Post-Image/'.$post->media)}}" alt="">
                                    </div>
                                    @livewire('like',['post_id'=>$post->id])

                                    @livewire('show-comment',['postId' => $post->id,'photo'=>$client->photo])
                                </div>

                                @endforeach

                                <!--=============== HOME ===============-->


                                {{-- @include('admin.Dashboard.Timeline.assets-timeline.posts-timeline')--}}

                            </div>
                        </section>

                        @livewireScripts

                    </main>

                    <!--=============== MAIN JS ===============-->
                    <script src="{{asset('assets/js/timeline.js')}}">
                    </script>
                </body>

                </html>