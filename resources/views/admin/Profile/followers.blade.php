<!DOCTYPE html>
<html>
<head>
    <title>User Search Results</title>
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/search-result.css')}}">
</head>
<body>
    @if($isEmpty==0)
        <h1 class="handle">
            NoT Founded Followers
        </h1>
    @else
        <main>
            @foreach($followers as $follower)
                <section class="user" onclick="window.location.href = '{{ route('Profile-follow',$follower->id) }}' ;">
                    <img src="{{asset('assets/img/gymman.jpg')}}">
                    <h2>{{$follower->name}}</h2>
                    <p>Web Developer</p>
                </section>
            @endforeach
            @endif
        </main>

</body>
</html>
