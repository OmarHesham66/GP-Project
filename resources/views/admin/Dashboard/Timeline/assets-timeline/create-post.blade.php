<div class="post__maker">
    <div class="post__thinking">
        <div class="post__img">
            <img src="{{asset('images/user-profile/'.$client->photo)}}" alt="">
        </div>
        <div class="thinking">
            <input type="text" class="thinking__input" placeholder="What's on your mind ?"
                onclick="window.location.href = '{{route('showCreatePost')}}' ;">
        </div>
    </div>

    <div class="thinking__line"></div>
    <div class="thinking__share">
        <button id="fileButton" class="photo">
        <i class='bx bx-image-add'></i>
            <p>Photo</p>
        </button>
        <input type="file" name="media" id="fileInput" style="display: none;">


        <button class="post">
        <i class='bx bxs-share'></i>
            <p>Post</p>
        </button>
    </div>

</div>
</div>
