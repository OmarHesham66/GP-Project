@extends('layouts.Layout')
@section('style-profile')
<link rel="stylesheet" href="{{asset('assets/css/stylesProfile.css')}}">
<link href="{{asset('assets/lightbox2-2.11.4/dist/css/lightbox.min.css')}}" rel="stylesheet" />
<link rel="stylesheet" href="{{asset('assets/css/stylesTimeline.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/stylesComment.css')}}">
@endsection

@section('content-profile')
<section class="section section__height container" id="home">
    <!-- here i will put post and create post  -->
    <div class="page__container">
        <div class="post__maker">
            <div class="profile__container">
                <div class="profile__mask">
                    <a href="{{asset('images/user-profile/'.$client->photo)}}" data-lightbox="image-1"
                        data-title="Profile Picture">
                        <img class="profile__img" src="{{asset('images/user-profile/'.$client->photo)}}" alt="">
                    </a>
                </div>
                <div class="profile__name">
                    <h1 class="nav__name">
                        <p class="user__name">{{$client->name}}</p>
                    </h1>

                    <a href="{{route('showEdit')}}" class="edit__button">
                        Edit profile
                    </a>

                </div>

            </div>

            <div class="thinking__line"></div>

            <div class="follow__section">
                <a class="posts__count counter" href="">
                    <h1>{{$num_posts}}</h1>
                    <h2>posts</h2>
                </a>
                <a class="followers__count counter" href="{{route('followers')}}">
                    <h1>{{$num_followers}}</h1>
                    <h2>followers</h2>
                </a>
                <a class="following__count counter" href="{{route('following')}}">
                    <h1>{{$num_following}}</h1>
                    <h2>following</h2>
                </a>
            </div>

            <div class="thinking__line"></div>

        </div>

        <div class="post__maker">
            <h2>Personal Information :</h2>

            <div class="personal__info">
                <div class="thinking__line"></div>
                <div><i class="bx bx-bone input__lock"></i> Height : {{$client->height}} cm</div>
                <div class="thinking__line"></div>
                <div><i class="bx bx-cookie input__lock"></i> Weight : {{$client->weight}} kg</div>
                <div class="thinking__line"></div>
                <div><i class="bx bxs-capsule input__lock"></i> Body fat percentage : {{$client->body_fat}} %</div>
                <div class="thinking__line"></div>
                <div><i class="bx bx-bone input__lock"></i> Your Goal: {{$client->goal}} </div>
                <div class="thinking__line"></div>
                <div><i class="bx bx-cookie input__lock"></i> BMR : {{round($client->bmr)}} </div>
                <div class="thinking__line"></div>
                <div><i class="bx bx-cookie input__lock"></i> BMI : {{round($client->bmi)}} </div>
            </div>
        </div>


        @include('admin.Dashboard.Timeline.assets-timeline.create-post')
        @if($found==false)
        <div class="post__maker main-post post-maker">
            <div class="owner__container">
                <div class="owner__info">
                    <div class="post__img">
                        <img src="{{asset('images/img/favicon.png')}}" alt="">
                    </div>
                    <div class="owner__name">
                        <h1 class="user__name">
                            FitnessFuelX</h1>
                        <p class="time"></p>
                    </div>
                </div>
                <div class="posts__icons">
                    {{-- <i class='bx bx-x delete-post'></i> --}}
                </div>
            </div>
            <p style="
                text-align: center;
                font-family: fantasy;
                font-size: xx-large;
       ">Welcome To Your Profile <br> Now <br> you can share posts </p>
            @else
            @foreach ($posts as $post)
            <div class="post__maker main-post post-maker">
                <div class="owner__container">
                    <div class="owner__info">
                        <div class="post__img"
                            onclick="window.location.href = '{{ route('Profile-follow',$post->user->id) }}' ;">
                            <img src="{{ asset('images/user-profile/'.$post->user->photo) }}" alt="">
                        </div>
                        <div class="owner__name">
                            <h1 class="user__name"
                                onclick="window.location.href = '{{ route('Profile-follow',$post->user->id) }}' ;">
                                {{$post->user->name}}</h1>
                            <p class="time">{{$post->created_at}} </p>
                        </div>
                    </div>
                    <div class="posts__icons">
                        <i class='bx bx-x delete-post'
                            onclick="window.location.href = '{{ route('delete-post',$post->id) }}' ;"></i>
                    </div>
                </div>
                <div class="posts__content">
                    <p>{{$post->text}}</p>
                </div>
                <div class="posts__img">
                    <img src="{{asset('images/Post-Image/'.$post->media)}}" alt="">
                </div>

                @livewire('like',['post_id'=>$post->id])
                @livewire('input-comment',['post_id'=>$post->id])

            </div>

            @endforeach
            @endif


        </div>
    </div>
</section>
@endsection



<!--=============== MAIN JS ===============-->
@section('script-profile')
<script src="{{asset('assets/js/timeline.js')}}"></script>
<script src="{{asset('assets/lightbox2-2.11.4/dist/js/lightbox-plus-jquery.min.js')}}"></script>
@livewireScripts
@endsection