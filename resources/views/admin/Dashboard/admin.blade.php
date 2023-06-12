<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="{{asset('assets/css/stylesTimeline.css')}}">

    <!--=============== FAVICON ===============-->
    <link rel="shortcut icon" href="{{asset('assets/img/favicon.png')}}" type="image/x-icon">

    <!--=============== BOXICON ===============-->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!--=============== REMIXICONS ===============-->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">
    <livewire:styles />
    <title>FitnessFuelX</title>
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
            <div class="nav__mask">

                <img src="{{asset('assets/img/perfil.png')}}" alt="" class="nav__img">
            </div>

            <span class="nav__greeting">Hi,</span>
            <h1 class="nav__name"><p class="user__name">Abdelrahman <br> Mahmoud</p></h1>
        </div>

        <ul class="nav__list">
            <li class="nav__item">
                <a href="#" class="nav__link active-link">
                <i class='bx bxs-home'></i> Home
                </a>
            </li>
            <li class="nav__item">
                <a href="Profile.html" class="nav__link">
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
        </ul>
    </div>
</nav>

<!--=============== MAIN ===============-->
<main class="main" id="main">
    <!--=============== HEADER ===============-->
    <header class="header" id="header">
        <nav class="header__nav container">
{{--            <ul class="navbar-nav">--}}
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>--}}
{{--                </li>--}}
{{--                <li class="nav-item d-none d-sm-inline-block">--}}
{{--                    <a href="index3.html" class="nav-link">Home</a>--}}
{{--                </li>--}}
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="{{route('logout')}}" class="nav-link">Logout</a>
                </li>
{{--            </ul>--}}
            <a href="#" class="header__logo">
                <img src="{{asset('assets/img/favicon.png')}}" alt="logo">
                <p>FitnessFuelX</p>
            </a>

            <div class="containner">
                <form action="" class="search" id="search-bar">
                    <input type="search" class="search__input" placeholder="Search...">

                    <div class="search__button" id="search-button">
                        <i class='bx bx-search search__icon'></i>
                        <i class='bx bx-x search__close'></i>
                    </div>
                </form>
            </div>

            <div class="icons">

                <a href="#">
                    <i class='bx bxs-bell-ring notification'></i>
                    <div class="notifications-container" style="display: none;">
                        <ul>
                            <li><p class="user__name">Amr Khaled</p> Started following you.</li>
                            <li><p class="user__name">Fouad Mahmoud</p> Started following you.</li>
                            <li><p class="user__name">Omar Hesham</p> Started following you.</li>
                            <li><p class="user__name">Amr Khaled</p> Started following you.</li>
                            <li><p class="user__name">Fouad Mahmoud</p> Started following you.</li>
                            <li><p class="user__name">Omar Hesham</p> Started following you.</li>
                            <li><p class="user__name">Amr Khaled</p> Started following you.</li>
                            <li><p class="user__name">Fouad Mahmoud</p> Started following you.</li>
                            <li><p class="user__name">Omar Hesham</p> Started following you.</li>
                            <li><p class="user__name">Amr Khaled</p> Started following you.</li>
                            <li><p class="user__name">Fouad Mahmoud</p> Started following you.</li>
                            <li><p class="user__name">Omar Hesham</p> Started following you.</li>
                            <li><p class="user__name">Amr Khaled</p> Started following you.</li>
                            <li><p class="user__name">Fouad Mahmoud</p> Started following you.</li>
                            <li><p class="user__name">Omar Hesham</p> Started following you.</li>
                            <li><p class="user__name">Amr Khaled</p> Started following you.</li>
                            <li><p class="user__name">Fouad Mahmoud</p> Started following you.</li>
                            <li><p class="user__name">Omar Hesham</p> Started following you.</li>
                            <li><p class="user__name">Amr Khaled</p> Started following you.</li>
                            <li><p class="user__name">Fouad Mahmoud</p> Started following you.</li>
                            <li><p class="user__name">Omar Hesham</p> Started following you.</li>
                            <li><p class="user__name">Amr Khaled</p> Started following you.</li>
                            <li><p class="user__name">Fouad Mahmoud</p> Started following you.</li>
                            <li><p class="user__name">Omar Hesham</p> Started following you.</li>
                        </ul>
                    </div>
                </a>


                <!-- Toggle button -->
                <div class="header__toggle" id="header-toggle">
                    <i class='bx bx-grid-alt'></i>
                </div>
            </div>
        </nav>
    </header>
    <!--=============== HOME ===============-->
    <section class="section section__height container" id="home">
        <!-- here i will put post and create post  -->
        <div class="page__container">
            <div class="post__maker">
                <div class="post__thinking">
                    <div class="post__img">
                        <img src="{{asset('assets/img/perfil.png')}}" alt="">
                    </div>
                    <div class="thinking">
                        <input type="text" class="thinking__input" placeholder="What's on your mind ?">
                    </div>
                </div>

                <div class="thinking__line"></div>

                <div class="thinking__share">
                    <div class="photo">
                        <i class='bx bx-image-add'></i>  <p>Photo</p>
                    </div>

                    <div class="post">
                        <i class='bx bxs-share'></i> <p>Post</p>
                    </div>
                </div>
            </div>

            <div class="post__maker main-post post-maker" >
                <div class="owner__container">
                    <div class="owner__info">
                        <div class="post__img">
                            <img src="{{asset('assets/img/favicon.png')}}" alt="">
                        </div>
                        <div class="owner__name">
                            <h1 class="user__name">FitnessFuelX</h1>
                            <p class="time">April 21 at 9:75 AM </p>
                        </div>
                    </div>
                    <div class="posts__icons">
                        <!-- <i class='bx bx-x delete-post'></i> -->
                    </div>
                </div>
                <div class="posts__content">
                    <p>Welcome in our agency, <br> FitnessFuelX was honored to have you join us</p>
                </div>
                <div class="posts__img">
                    <img src="{{asset('assets/img/gymman.jpg')}}" alt="">
                </div>
                <div class="reaction__container">
                    <div class="likes">
                        <i class='bx bxs-like'></i> 98
                        <div class="likes-container" style="display: none;">
                            <ul>
                                <li><p class="user__name">Amr Khaled</p></li>
                                <li><p class="user__name">Fouad Mahmoud</p></li>
                                <li><p class="user__name">Omar Hesham</p></li>
                                <li><p class="user__name">Amr Khaled</p></li>
                                <li><p class="user__name">Fouad Mahmoud</p></li>
                                <li><p class="user__name">Omar Hesham</p></li>
                                <li><p class="user__name">Amr Khaled</p></li>
                                <li><p class="user__name">Fouad Mahmoud</p></li>
                                <li><p class="user__name">Omar Hesham</p></li>
                                <li><p class="user__name">Amr Khaled</p></li>
                                <li><p class="user__name">Fouad Mahmoud</p></li>
                                <li><p class="user__name">Omar Hesham</p></li>
                                <li><p class="user__name">Amr Khaled</p></li>
                                <li><p class="user__name">Fouad Mahmoud</p></li>
                                <li><p class="user__name">Omar Hesham</p></li>
                                <li><p class="user__name">Amr Khaled</p></li>
                                <li><p class="user__name">Fouad Mahmoud</p></li>
                                <li><p class="user__name">Omar Hesham</p></li>
                                <li><p class="user__name">Amr Khaled</p></li>
                                <li><p class="user__name">Fouad Mahmoud</p></li>
                                <li><p class="user__name">Omar Hesham</p></li>
                                <li><p class="user__name">Amr Khaled</p></li>
                                <li><p class="user__name">Fouad Mahmoud</p></li>
                                <li><p class="user__name">Omar Hesham</p></li>
                                <li><p class="user__name">Amr Khaled</p></li>
                                <li><p class="user__name">Fouad Mahmoud</p></li>
                                <li><p class="user__name">Omar Hesham</p></li>
                                <li><p class="user__name">Amr Khaled</p></li>
                                <li><p class="user__name">Fouad Mahmoud</p></li>
                                <li><p class="user__name">Omar Hesham</p></li>
                                <li><p class="user__name">Amr Khaled</p></li>
                                <li><p class="user__name">Fouad Mahmoud</p></li>
                                <li><p class="user__name">Omar Hesham</p></li>
                                <li><p class="user__name">Amr Khaled</p></li>
                                <li><p class="user__name">Fouad Mahmoud</p></li>
                                <li><p class="user__name">Omar Hesham</p></li>
                            </ul>
                        </div>
                    </div>
                    <div class="comments">
                        <p>7 comments</p>
                        <div class="comments-container" style="display: none;">
                            <ul>
                                <li><p class="user__name">Amr Khaled</p> gamd</li>
                                <li><p class="user__name">Fouad Mahmoud</p> you doing well</li>
                                <li><p class="user__name">Omar Hesham</p> nice </li>
                                <li><p class="user__name">Amr Khaled</p> gamd</li>
                                <li><p class="user__name">Fouad Mahmoud</p> you doing well</li>
                                <li><p class="user__name">Omar Hesham</p> nice </li>
                                <li><p class="user__name">Amr Khaled</p> gamd</li>
                                <li><p class="user__name">Fouad Mahmoud</p> you doing well</li>
                                <li><p class="user__name">Omar Hesham</p> nice </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="thinking__line"></div>
                <div class="posts__reaction">
                    <div class="like" id="like-reaction">
                        <i class='bx bxs-like'></i>  <p>Like</p>
                    </div>
                    <div class="post comment-box">
                        <i class='bx bx-message-rounded-add'></i> <p>Comment</p>
                    </div>
                </div>

                <div class="thinking__line"></div>

                <div class="comment__section">
                    <div class="post__thinking">
                        <div class="post__img">
                            <img src="{{asset('assets/img/perfil.png')}}" alt="">
                        </div>
                        <div class="thinking">
                            <input type="text" class="thinking__input comment__input" placeholder="Write a public comment...">
                            <div class="comment__sender">
                                <i class='bx bxs-send'></i>
                            </div>

                        </div>
                    </div>
                </div>
            </div>


            <div class="post__maker post-maker">
                <div class="owner__container">
                    <div class="owner__info">
                        <div class="post__img">
                            <img src="{{asset('assets/img/perfil.png')}}" alt="">
                        </div>
                        <div class="owner__name">
                            <h1 class="user__name">Abdelrahman Mahmoud</h1>
                            <p class="time">April 20 at 7:25 PM </p>
                        </div>
                    </div>
                    <div class="posts__icons">
                        <!-- <i class='bx bx-x delete-post'></i> -->
                    </div>
                </div>
                <div class="posts__content">
                    <p>اهلا ، انا عندي 23 سنه وكنت حابب انزل الجيم وكدا ، وانا حابب الموضوع الصراحه بس محتاج نصايح ياريت</p>
                </div>
                <div class="reaction__container">
                    <div class="likes">
                        <i class='bx bxs-like'></i> 98
                        <div class="likes-container" style="display: none;">
                            <ul>
                                <li><p class="user__name">Amr Khaled</p></li>
                                <li><p class="user__name">Fouad Mahmoud</p></li>
                                <li><p class="user__name">Omar Hesham</p></li>
                                <li><p class="user__name">Amr Khaled</p></li>
                                <li><p class="user__name">Fouad Mahmoud</p></li>
                                <li><p class="user__name">Omar Hesham</p></li>
                                <li><p class="user__name">Amr Khaled</p></li>
                                <li><p class="user__name">Fouad Mahmoud</p></li>
                                <li><p class="user__name">Omar Hesham</p></li>
                                <li><p class="user__name">Amr Khaled</p></li>
                                <li><p class="user__name">Fouad Mahmoud</p></li>
                                <li><p class="user__name">Omar Hesham</p></li>
                                <li><p class="user__name">Amr Khaled</p></li>
                                <li><p class="user__name">Fouad Mahmoud</p></li>
                                <li><p class="user__name">Omar Hesham</p></li>
                                <li><p class="user__name">Amr Khaled</p></li>
                                <li><p class="user__name">Fouad Mahmoud</p></li>
                                <li><p class="user__name">Omar Hesham</p></li>
                                <li><p class="user__name">Amr Khaled</p></li>
                                <li><p class="user__name">Fouad Mahmoud</p></li>
                                <li><p class="user__name">Omar Hesham</p></li>
                                <li><p class="user__name">Amr Khaled</p></li>
                                <li><p class="user__name">Fouad Mahmoud</p></li>
                                <li><p class="user__name">Omar Hesham</p></li>
                                <li><p class="user__name">Amr Khaled</p></li>
                                <li><p class="user__name">Fouad Mahmoud</p></li>
                                <li><p class="user__name">Omar Hesham</p></li>
                                <li><p class="user__name">Amr Khaled</p></li>
                                <li><p class="user__name">Fouad Mahmoud</p></li>
                                <li><p class="user__name">Omar Hesham</p></li>
                                <li><p class="user__name">Amr Khaled</p></li>
                                <li><p class="user__name">Fouad Mahmoud</p></li>
                                <li><p class="user__name">Omar Hesham</p></li>
                                <li><p class="user__name">Amr Khaled</p></li>
                                <li><p class="user__name">Fouad Mahmoud</p></li>
                                <li><p class="user__name">Omar Hesham</p></li>
                            </ul>
                        </div>
                    </div>
                    <div class="comments">
                        <p>7 comments</p>
                        <div class="comments-container" style="display: none;">
                            <ul>
                                <li><p class="user__name">Amr Khaled</p> gamd</li>
                                <li><p class="user__name">Fouad Mahmoud</p> you doing well</li>
                                <li><p class="user__name">Omar Hesham</p> nice </li>
                                <li><p class="user__name">Amr Khaled</p> gamd</li>
                                <li><p class="user__name">Fouad Mahmoud</p> you doing well</li>
                                <li><p class="user__name">Omar Hesham</p> nice </li>
                                <li><p class="user__name">Amr Khaled</p> gamd</li>
                                <li><p class="user__name">Fouad Mahmoud</p> you doing well</li>
                                <li><p class="user__name">Omar Hesham</p> nice </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="thinking__line"></div>
                <div class="posts__reaction">
                <div class="like" id="like-reaction">
                        <i class="bx bxs-like"></i>  <p>Like</p>
                    </div>
                    <div class="post comment-box">
                        <i class="bx bx-message-rounded-add"></i> <p>Comment</p>
                    </div>
                </div>

                <div class="thinking__line"></div>

                <div class="comment__section">
                    <div class="post__thinking">
                        <div class="post__img">
                            <img src="{{asset('assets/img/perfil.png')}}" alt="">
                        </div>
                        <div class="thinking">
                            <input type="text" class="thinking__input comment__input" placeholder="Write a public comment...">
                            <div class="comment__sender">
                            <i class='bx bxs-send'></i>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="post__maker post-maker" >
                <div class="owner__container">
                    <div class="owner__info">
                        <div class="post__img">
                            <img src="{{asset('assets/img/perfil.png')}}" alt="">
                        </div>
                        <div class="owner__name">
                            <h1 class="user__name">Abdelrahman Mahmoud</h1>
                            <p class="time">April 21 at 9:75 AM </p>
                        </div>
                    </div>
                    <div class="posts__icons">
                        <!-- <i class='bx bx-x delete-post'></i> -->
                    </div>
                </div>
                <div class="posts__content">
                    <p>مرحبا , هل التمرين دا كويس للجسم وهل ليه اضرار</p>
                </div>
                <div class="posts__img">
                    <img src="{{asset('assets/img/gymman.jpg')}}" alt="">
                </div>
                <div class="reaction__container">
                    <div class="likes">
                        <i class='bx bxs-like'></i> 98
                        <div class="likes-container" style="display: none;">
                            <ul>
                                <li><p class="user__name">Amr Khaled</p></li>
                                <li><p class="user__name">Fouad Mahmoud</p></li>
                                <li><p class="user__name">Omar Hesham</p></li>
                                <li><p class="user__name">Amr Khaled</p></li>
                                <li><p class="user__name">Fouad Mahmoud</p></li>
                                <li><p class="user__name">Omar Hesham</p></li>
                                <li><p class="user__name">Amr Khaled</p></li>
                                <li><p class="user__name">Fouad Mahmoud</p></li>
                                <li><p class="user__name">Omar Hesham</p></li>
                                <li><p class="user__name">Amr Khaled</p></li>
                                <li><p class="user__name">Fouad Mahmoud</p></li>
                                <li><p class="user__name">Omar Hesham</p></li>
                                <li><p class="user__name">Amr Khaled</p></li>
                                <li><p class="user__name">Fouad Mahmoud</p></li>
                                <li><p class="user__name">Omar Hesham</p></li>
                                <li><p class="user__name">Amr Khaled</p></li>
                                <li><p class="user__name">Fouad Mahmoud</p></li>
                                <li><p class="user__name">Omar Hesham</p></li>
                                <li><p class="user__name">Amr Khaled</p></li>
                                <li><p class="user__name">Fouad Mahmoud</p></li>
                                <li><p class="user__name">Omar Hesham</p></li>
                                <li><p class="user__name">Amr Khaled</p></li>
                                <li><p class="user__name">Fouad Mahmoud</p></li>
                                <li><p class="user__name">Omar Hesham</p></li>
                                <li><p class="user__name">Amr Khaled</p></li>
                                <li><p class="user__name">Fouad Mahmoud</p></li>
                                <li><p class="user__name">Omar Hesham</p></li>
                                <li><p class="user__name">Amr Khaled</p></li>
                                <li><p class="user__name">Fouad Mahmoud</p></li>
                                <li><p class="user__name">Omar Hesham</p></li>
                                <li><p class="user__name">Amr Khaled</p></li>
                                <li><p class="user__name">Fouad Mahmoud</p></li>
                                <li><p class="user__name">Omar Hesham</p></li>
                                <li><p class="user__name">Amr Khaled</p></li>
                                <li><p class="user__name">Fouad Mahmoud</p></li>
                                <li><p class="user__name">Omar Hesham</p></li>
                            </ul>
                        </div>
                    </div>
                    <div class="comments">
                        <p>7 comments</p>
                        <div class="comments-container" style="display: none;">
                            <ul>
                                <li><p class="user__name">Amr Khaled</p> gamd</li>
                                <li><p class="user__name">Fouad Mahmoud</p> you doing well</li>
                                <li><p class="user__name">Omar Hesham</p> nice </li>
                                <li><p class="user__name">Amr Khaled</p> gamd</li>
                                <li><p class="user__name">Fouad Mahmoud</p> you doing well</li>
                                <li><p class="user__name">Omar Hesham</p> nice </li>
                                <li><p class="user__name">Amr Khaled</p> gamd</li>
                                <li><p class="user__name">Fouad Mahmoud</p> you doing well</li>
                                <li><p class="user__name">Omar Hesham</p> nice </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="thinking__line"></div>
                <div class="posts__reaction">
                <div class="like" id="like-reaction">
                        <i class="bx bxs-like"></i>  <p>Like</p>
                    </div>
                    <div class="post comment-box">
                        <i class="bx bx-message-rounded-add"></i> <p>Comment</p>
                    </div>
                </div>

                <div class="thinking__line"></div>

                <div class="comment__section">
                    <div class="post__thinking">
                        <div class="post__img">
                            <img src="{{asset('assets/img/perfil.png')}}" alt="">
                        </div>
                        <div class="thinking">
                            <input type="text" class="thinking__input comment__input" placeholder="Write a public comment...">
                            <div class="comment__sender">
                            <i class='bx bxs-send'></i>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="post__maker post-maker">
                <div class="owner__container">
                    <div class="owner__info">
                        <div class="post__img">
                            <img src="{{asset('assets/img/perfil.png')}}" alt="">
                        </div>
                        <div class="owner__name">
                            <h1 class="user__name">Abdelrahman Mahmoud</h1>
                            <p class="time">April 21 at 9:75 AM </p>
                        </div>
                    </div>
                    <div class="posts__icons">
                        <!-- <i class='bx bx-x delete-post'></i> -->
                    </div>
                </div>
                <div class="posts__content">
                    <p>مرحبا , هل التمرين دا كويس للجسم وهل ليه اضرار</p>
                </div>
                <div class="posts__img">
                    <video controls src="{{asset('assets/img/videocrossfit.mp4')}}" alt=""></video>
                </div>
                <div class="reaction__container">
                    <div class="likes">
                        <i class='bx bxs-like'></i> 98
                        <div class="likes-container" style="display: none;">
                            <ul>
                                <li><p class="user__name">Amr Khaled</p></li>
                                <li><p class="user__name">Fouad Mahmoud</p></li>
                                <li><p class="user__name">Omar Hesham</p></li>
                                <li><p class="user__name">Amr Khaled</p></li>
                                <li><p class="user__name">Fouad Mahmoud</p></li>
                                <li><p class="user__name">Omar Hesham</p></li>
                                <li><p class="user__name">Amr Khaled</p></li>
                                <li><p class="user__name">Fouad Mahmoud</p></li>
                                <li><p class="user__name">Omar Hesham</p></li>
                                <li><p class="user__name">Amr Khaled</p></li>
                                <li><p class="user__name">Fouad Mahmoud</p></li>
                                <li><p class="user__name">Omar Hesham</p></li>
                                <li><p class="user__name">Amr Khaled</p></li>
                                <li><p class="user__name">Fouad Mahmoud</p></li>
                                <li><p class="user__name">Omar Hesham</p></li>
                                <li><p class="user__name">Amr Khaled</p></li>
                                <li><p class="user__name">Fouad Mahmoud</p></li>
                                <li><p class="user__name">Omar Hesham</p></li>
                                <li><p class="user__name">Amr Khaled</p></li>
                                <li><p class="user__name">Fouad Mahmoud</p></li>
                                <li><p class="user__name">Omar Hesham</p></li>
                                <li><p class="user__name">Amr Khaled</p></li>
                                <li><p class="user__name">Fouad Mahmoud</p></li>
                                <li><p class="user__name">Omar Hesham</p></li>
                                <li><p class="user__name">Amr Khaled</p></li>
                                <li><p class="user__name">Fouad Mahmoud</p></li>
                                <li><p class="user__name">Omar Hesham</p></li>
                                <li><p class="user__name">Amr Khaled</p></li>
                                <li><p class="user__name">Fouad Mahmoud</p></li>
                                <li><p class="user__name">Omar Hesham</p></li>
                                <li><p class="user__name">Amr Khaled</p></li>
                                <li><p class="user__name">Fouad Mahmoud</p></li>
                                <li><p class="user__name">Omar Hesham</p></li>
                                <li><p class="user__name">Amr Khaled</p></li>
                                <li><p class="user__name">Fouad Mahmoud</p></li>
                                <li><p class="user__name">Omar Hesham</p></li>
                            </ul>
                        </div>
                    </div>
                    <div class="comments">
                        <p>7 comments</p>
                        <div class="comments-container" style="display: none;">
                            <ul>
                                <li><p class="user__name">Amr Khaled</p> gamd</li>
                                <li><p class="user__name">Fouad Mahmoud</p> you doing well</li>
                                <li><p class="user__name">Omar Hesham</p> nice </li>
                                <li><p class="user__name">Amr Khaled</p> gamd</li>
                                <li><p class="user__name">Fouad Mahmoud</p> you doing well</li>
                                <li><p class="user__name">Omar Hesham</p> nice </li>
                                <li><p class="user__name">Amr Khaled</p> gamd</li>
                                <li><p class="user__name">Fouad Mahmoud</p> you doing well</li>
                                <li><p class="user__name">Omar Hesham</p> nice </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="thinking__line"></div>
                <div class="posts__reaction">
                <div class="like" id="like-reaction">
                        <i class="bx bxs-like"></i>  <p>Like</p>
                    </div>
                    <div class="post comment-box">
                        <i class="bx bx-message-rounded-add"></i> <p>Comment</p>
                    </div>
                </div>

                <div class="thinking__line"></div>

                <div class="comment__section">
                    <div class="post__thinking">
                        <div class="post__img">
                            <img src="{{asset('assets/img/perfil.png')}}" alt="">
                        </div>
                        <div class="thinking">
                            <input type="text" class="thinking__input comment__input" placeholder="Write a public comment...">
                            <div class="comment__sender">
                            <i class='bx bxs-send'></i>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


</main>

<!--=============== MAIN JS ===============-->
<script src="{{asset('assets/js/timeline.js')}}"></script>
<livewire:scripts />
</body>
</html>
