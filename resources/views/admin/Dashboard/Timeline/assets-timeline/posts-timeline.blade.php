{{--@if($found==false)--}}
{{--<div class="post__maker main-post post-maker">--}}
{{--    <div class="owner__container">--}}
{{--        <div class="owner__info">--}}
{{--            <div class="post__img">--}}
{{--                <img src="{{asset('images/img/favicon.png')}}" alt="">--}}
{{--            </div>--}}
{{--            <div class="owner__name">--}}
{{--                <h1 class="user__name">--}}
{{--                    FitnessFuelX</h1>--}}
{{--                <p class="time"></p>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="posts__icons">--}}
{{--            --}}{{-- <i class='bx bx-x delete-post'></i> --}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <p style="--}}
{{--                text-align: center;--}}
{{--                font-family: fantasy;--}}
{{--                font-size: xx-large;--}}
{{--       ">Welcome To Your Profile <br> Now <br> you can share posts </p>--}}
{{--    @else--}}
    @foreach ($posts as $post)
    <div class="post__maker main-post post-maker">
        <div class="owner__container">
            @if ($post->user->id==$client->id)
            <div class="owner__info">
                <div class="post__img" onclick="window.location.href = '{{ route('myprofile') }}' ;">
                    <img src="{{ asset('images/user-profile/'.$post->user->photo) }}" alt="">
                </div>
                <div class="owner__name">
                    <h1 class="user__name" onclick="window.location.href = '{{ route('myprofile') }}' ;">
                        {{$post->user->name}}</h1>
                    <p class="time">{{$post->created_at}} </p>
                </div>
            </div>
            @else
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
            @endif
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
{{--    @endif--}}
