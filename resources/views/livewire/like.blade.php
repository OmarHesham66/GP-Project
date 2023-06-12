<div>
    <div class="reaction__container">
        {{-- @include('admin.Dashboard.Timeline.assets-timeline.like') --}}
        <div class="likes">
            <i class='bx bxs-like'></i> {{ $counter_like }}
            <div class="likes-container" style="display: none;">
                <ul>
                    @if (count($likes)!=0)
                    @foreach ($likes as $like )
                    <li>
                        @if($like->user->id==$id)
                        <p class="user__name" onclick="window.location.href = '{{ route('myprofile') }}' ;">
                            {{$like->user->name }}</p>
                        @else
                        <p class="user__name"
                            onclick="window.location.href = '{{ route('Profile-follow',$like->user->id) }}' ;">
                            {{$like->user->name }}</p>
                        @endif
                    </li>
                    @endforeach
                    @else
                    <li>
                        <p class="user__name">No likes Yet</p>
                    </li>
                    @endif
                </ul>
            </div>
        </div>

        <div class="comments">
            <p>{{ $counter_comment }} Comment </p>
            <div class="comments-container" style="display: none;">
                <ul>
                    @if (count($comments)!=0)
                    @foreach ($comments as $comment )
                    <li>
                        @if($comment->user->id==$id)
                        <p class="user__name" onclick="window.location.href = '{{ route('myprofile') }}' ;">
                            {{$comment->user->name }}</p>
                        @else
                        <p class="user__name"
                            onclick="window.location.href = '{{ route('Profile-follow',$comment->user->id) }}' ;">
                            {{$comment->user->name }}</p>
                        @endif
                    </li>
                    @endforeach
                    @else
                    <li>
                        <p class="user__name">No Comments Yet</p>
                    </li>
                    @endif
                </ul>
            </div>
        </div>
    </div>
    <div class="thinking__line"></div>
    {{-- ################################################################################### --}}
    <div class="posts__reaction">

        @if ($like_btn==true)
        <div wire:click="insert_like" class="like" style="color: red" id="like-reaction">
            <i class='bx bxs-like'></i>
            <p class="like">like</p>
        </div>
        @endif

        @if ($like_btn==false)
        <div wire:click="insert_like" class="like" id="like-reaction">
            <i class='bx bxs-like'></i>
            <p class="like">like</p>
        </div>
        @endif
        {{-- ################################################################################### --}}
        <div class="post comment-box">
            <i class='bx bxs-comment-detail'></i>
            <a class="post comment-box" href="{{route('getComments',$post_id)}}">Comment</a>
        </div>
    </div>
    {{-- ################################################################################### --}}
    <div class="thinking__line"></div>

</div>