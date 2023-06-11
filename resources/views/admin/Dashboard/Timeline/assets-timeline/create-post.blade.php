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
            <i class="ri-image-add-fill"></i>
            <p>Photo</p>
        </button>
        <input type="file" name="media" id="fileInput" style="display: none;">


        <button class="post">
            <i class="ri-share-forward-fill"></i>
            <p>Post</p>
        </button>
    </div>

</div>
</div>
