<div>
    <div class="post__maker">
        <div class="profile__container">
            <div class="profile__mask">
                <a href="{{ asset('images/user-profile/'.$data['user']->photo) }}" data-lightbox="image-1" data-title="Profile Picture">
                    <img class="profile__img" src="{{ asset('images/user-profile/'.$data['user']->photo) }}" alt="">
                </a>
            </div>
            {{-- ############################################## --}}
            <div class="profile__name">
                <h1 class="nav__name">
                    <p class="user__name">{{$data['user']->name}}</p>
                </h1>


                @if ($change_btn==0)
                    <button class="follow__button" wire:click="create_follow">
                        Follow
                    </button>
                @else
                    <button class="following__button" wire:click="delete_follow">
                        Following
                    </button>
                @endif

            </div>
            {{-- #################################################### --}}
        </div>

        <div class="thinking__line"></div>

        <div class="follow__section">
            <a class="posts__count counter">
                <h1>{{ $posts->count() }}</h1>
                <h2>posts</h2>

                </a>
                <a class="followers__count counter" href="{{route('user_followers',$main_id)}}">
                    @if (!isset($data['num_followers']))

                    <h1>0</h1>
                @else
                    <h1>{{ $data['num_followers'] }}</h1>
                    @endif
                    <h2>followers</h2>
                </a>
                <a class="following__count counter" href="{{route('user_following',$main_id)}}">
                    @if (!isset($data['num_following']))

                    <h1>0</h1>
                @else
                    <h1>{{ $data['num_following'] }}</h1>
                @endif
                <h2>following</h2>
            </a>
        </div>

        <div class="thinking__line"></div>

    </div>
</div>
