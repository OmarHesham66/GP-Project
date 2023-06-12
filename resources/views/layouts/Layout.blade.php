<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--=============== CSS ===============-->
    @yield('style-timeline')
    @yield('style-user_profile')
    @yield('style-profile')
    @yield('style-workout')
    @yield('style-nutrition')

    <!--=============== FAVICON ===============-->
    <link rel="shortcut icon" href="{{asset('assets/img/favicon.png')}}" type="image/x-icon">

    <!--=============== BOXICON ===============-->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!--=============== REMIXICONS ===============-->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">

    <title>FitnessFuelX</title>
    @livewireStyles
</head>

<body>


    <!--=============== NAVBAR ===============-->
    <nav class="nav" id="nav">
        <div class="nav__menu container" id="nav-menu">
            <div class="nav__shape"></div>

            <div class="nav__close" id="nav-close">
                <i class='bx bx-x'></i>
            </div>

            <div class="nav__data">

                <div class="nav__mask" onclick="window.location.href = '{{ route('myprofile')}}' ;">

                    <img src="{{asset('images/user-profile/'.$client->photo)}}" alt="" class="nav__img">
                </div>

                <span class="nav__greeting">Hi,</span>
                <h1 class="nav__name">
                    <p class="user__name">{{$client->name}}</p>
                </h1>
            </div>

            <ul class="nav__list">
                <li class="nav__item">
                    <a href="{{route('dashboard')}}" class="nav__link">
                        <i class='bx bxs-home'></i> Home
                    </a>
                </li>
                <li class="nav__item">
                    <a href="{{ route('myprofile')}}" class="nav__link">
                        <i class='bx bxs-user'></i> Profile
                    </a>
                </li>
                <li class="nav__item">
                    <a href="{{route('plan_workout')}}" class="nav__link">
                        <i class='bx bx-dumbbell'></i> Workout
                    </a>
                </li>
                <li class="nav__item">
                    <a href="{{route('nut_show')}}" class="nav__link">
                        <i class='bx bx-bowl-hot'></i> Nutrition
                    </a>
                </li>
                <div class="logout">
                    <button class="logout__button"
                        onclick="window.location.href = '{{ route('logout') }}' ;">Logout</button>
                </div>
            </ul>
        </div>
    </nav>

    <!--=============== MAIN ===============-->
    <main class=" main" id="main">
        <!--=============== HEADER ===============-->
        <header class="header" id="header">
            <nav class="header__nav container">
                <a href="{{route('dashboard')}}" class="header__logo">
                    <img src="{{asset('assets/img/favicon.png')}}" alt="logo">
                    <p>FitnessFuelX</p>
                </a>

                @include('admin.Dashboard.Timeline.assets-timeline.search-bar')

                <div class="icons">

                    {{-- @include('admin.Dashboard.Timeline.assets-timeline.notification') --}}
                    @livewire('notification')

                    <!-- Toggle button -->
                    <div class="header__toggle" id="header-toggle">
                        <i class='bx bx-grid-alt'></i>
                    </div>
                </div>
            </nav>
        </header>
        <!--=============== HOME ===============-->
        @yield('timeline')
        @yield('user_profile')
        @yield('content-profile')
        @yield('workout')
        @yield('nutrition')
    </main>

    <!--=============== MAIN JS ===============-->
    @yield('script-timeline')
    @yield('script-user_profile')
    @yield('script-profile')
    @yield('script-workout')
    @yield('script-nutrition')

</body>

</html>