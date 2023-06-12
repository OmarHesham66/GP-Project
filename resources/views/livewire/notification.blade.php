<a href="#">
    @if($icon==0)
    <i class='bx bxs-bell notification'></i>
    @endif
    @if ($icon==1)
    <i class='bx bxs-bell-ring notification__ring'></i>
    @endif
    <div class="notifications-container" style="display: none;">
        <ul>

            @if (isset($notifications))

            @foreach ($notifications as $notification)
            @if ($notification->type=='follow')
            <li class="dropdown-notifications"
                onclick="window.location.href = '{{ route('Profile-follow',$notification->sender->id) }}' ;">
                @else
            <li class="dropdown-notifications"
                onclick="window.location.href = '{{ route('getComments',$notification->post_id) }}' ;">
                @endif

                <h1 class="user__name">{{ $notification->sender->name }}</h1>
                <p class="user__name">{{ $notification->data }}</p>

                @if (isset($notification->comment_id))
                <small class="user__name">{{ $notification->comment->text }}</small><br>
                @endif

                <small class="user__name">{{ $notification->created_at }}</small>

            </li>
            @endforeach
            @endif
            @if (!isset($notification))
            <h1 class="user__name">Not Found Notification</h1>
            @endif

        </ul>
    </div>
</a>