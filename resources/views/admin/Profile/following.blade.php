<!DOCTYPE html>
<html>

<head>
    <title>User Search Results</title>
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/search-result.css')}}">
</head>

<body>
    @if($isEmpty==0)
    <h1 class="handle">
        NoT Founded Following
    </h1>
    @else
    <main>
        @foreach($following as $follow)
        <section class="user" onclick="window.location.href = '{{ route('Profile-follow',$follow->id) }}' ;">
            <img src="{{asset('images/user-profile/'.$follow->photo)}}">
            <h2>{{$follow->name}}</h2>
        </section>
        @endforeach
        @endif
    </main>

</body>

</html>