<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link href="{{asset('assets/css/create-post.css')}}" rel="stylesheet">



</head>

<body>
    <div class="post__maker">
        <form action="{{route('storePost')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="post__thinking">
                <div class="post__img">
                    <img src="{{ asset('images/user-profile/'.$client->photo) }}" alt="">
                </div>
                <div class="thinking">
                    <input type="text" name="text" class="thinking__input" placeholder="What's on your mind ?">
                </div>
            </div>

            <div class="thinking__line"></div>
            <div class="thinking__share">
                <a id="fileButton" class="photo">
                <i class='bx bx-image-add'></i>
                    <p>Photo</p>
                </a>
                <input type="file" name="media" id="fileInput" style="display: none">


                <button class=" post" type="submit">
                <i class='bx bxs-share'></i>
                    <p>Post</p>
                </button>
            </div>

        </form>
    </div>
    @if($errors->any())
    @foreach($errors->all() as $error)
    <div style="color: red">{{$error}}</div>
    @endforeach
    @endif
    <script src="{{asset('assets/js/create-post.js')}}"></script>

</body>

</html>
