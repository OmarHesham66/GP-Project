<div>
    <div class="search-bar">
        <input type="text" wire:model="name" wire:keydown.enter="search" placeholder="Search...">
    </div>
    @if($isfound==false)
    <h1 class="handle">
        Please enter the username you are looking for
    </h1>
    @else
    <main>
        @foreach($users as $user)
        @if ($user->id==$you_user)
        <section class="user" onclick="window.location.href = '{{ route('myprofile') }}' ;">
            @else
            <section class="user" onclick="window.location.href = '{{ route('Profile-follow',$user->id) }}' ;">
                @endif
                <img src="{{asset('images/user-profile/'.$user->photo)}}">
                <h2>{{$user->name}}</h2>
                {{-- <button>Follow</button> --}}
            </section>
            @endforeach
            @endif
    </main>
</div>