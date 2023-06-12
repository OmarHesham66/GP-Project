<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--=============== FAVICON ===============-->
    <link rel="shortcut icon" href="{{asset('assets/img/favicon.png')}}" type="image/x-icon">

    <!--=============== BOXICON ===============-->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="{{asset('assets/css/stylesHome.css')}}">

    <title>FitnessFuelX</title>
</head>
<body>
<!--==================== HEADER ====================-->
<header class="header" id="header">
    <nav class="nav container">
        <a href="#" class="nav__logo">
            <img src="{{asset('assets/img/favicon.png')}}" alt="logo"> FitnessFuelX
        </a>

        <div class="nav__menu" id="nav-menu">
            <ul class="nav__list">
                <li class="nav__item">
                    <a href="#home" class="nav__link">home</a>
                </li>
                <li class="nav__item">
                    <a href="#program" class="nav__link">program</a>
                </li>
                <li class="nav__item">
                    <a href="#choose" class="nav__link">choose</a>
                </li>
                <li class="nav__item">
                    <a href="#calculate" class="nav__link">calculate</a>
                </li>

                <div class="nav__link">
                    <button onclick="window.location.href = '{{route('email_register')}}' ;" class="button nav__button">
                        Register Now
                    </button>
                </div>
            </ul>

            <div class="nav__close" id="nav-close">
                <i class='bx bx-x'></i>
            </div>
        </div>

        <!-- toggle button  -->
        <div class="nav__toggle" id="nav-toggle">
            <i class='bx bx-menu'></i>
        </div>
    </nav>
</header>

<!--==================== MAIN ====================-->
<main class="main">
    <!--==================== HOME ====================-->
    <section class="home section" id="home">
        <div class="home__container container grid">
            <div class="home__data">
                <h2 class="home__subtitle">MAKE YOUR</h2>
                <h1 class="home__title">BODY SHAPE</h1>
                <p class="home__description">
                    In here we will help you to shape and build your ideal
                    body and live your life to the fullest.
                </p>
                <a href="{{route('get_login')}}" class="button button__flex">
                    Get Started <i class="ri-arrow-right-line"></i>
                </a>
            </div>

            <div class="home__images">
                <img src="{{asset('assets/img/home-img.png')}}" alt="home image" class="home__img">

                <div class="home__triangle home__triangle-3"></div>
                <div class="home__triangle home__triangle-2"></div>
                <div class="home__triangle home__triangle-1"></div>
            </div>
        </div>
    </section>

    <!--==================== LOGOS ====================-->
    <section class="logos section">
        <div class="logos__container container grid">
            <img src="{{asset('assets/img/logo1.png')}}" alt="logo image" class="logos__img">
            <img src="{{asset('assets/img/logo2.png')}}" alt="logo image" class="logos__img">
            <img src="{{asset('assets/img/logo3.png')}}" alt="logo image" class="logos__img">
            <img src="{{asset('assets/img/logo4.png')}}" alt="logo image" class="logos__img">
        </div>
    </section>

    <!--==================== PROGRAM ====================-->
    <section class="program section" id="program">
        <div class="container">
            <div class="section__data">
                <h2 class="section__subtitle">Our program</h2>
                <div class="section__titles">
                    <h1 class="section__title-border">BUILD YOUR</h1>
                    <h1 class="section__title">BEST BODY</h1>
                </div>
            </div>

            <div class="program__container grid">
                <article class="program__card">
                    <div class="program__shape">
                        <img src="{{asset('assets/img/program1.png')}}" alt="program image" class="program__img">
                    </div>

                    <h3 class="program__title">Home Dumbbell only or Bar only</h3>

                    <p class="program__description">
                        If you busy and cannot go to gym ,and you have only dumbbells ,or only Bar in home<br>
                        We got you.
                    </p>

                    <a href="#" class="program__button">
                        <i class='bx bx-right-arrow-alt'></i>
                    </a>
                </article>

                <article class="program__card">
                    <div class="program__shape">
                        <img src="{{asset('assets/img/program2.png')}}" alt="program image" class="program__img">
                    </div>

                    <h3 class="program__title">Cardio Exercise</h3>

                    <p class="program__description">
                        Exercise your heart rate up and keeps it
                        up for a prolonged period of time.
                    </p>

                    <a href="#" class="program__button">
                        <i class='bx bx-right-arrow-alt'></i>
                    </a>
                </article>

                <article class="program__card">
                    <div class="program__shape">
                        <img src="{{asset('assets/img/program3.png')}}" alt="program image" class="program__img">
                    </div>

                    <h3 class="program__title">Home without any equipments</h3>

                    <p class="program__description">
                        even if you have nothing to exercise with, don't care <br>We got you.
                    </p>

                    <a href="#" class="program__button">
                        <i class='bx bx-right-arrow-alt'></i>
                    </a>
                </article>

                <article class="program__card">
                    <div class="program__shape">
                        <img src="{{asset('assets/img/program4.png')}}" alt="program image" class="program__img">
                    </div>

                    <h3 class="program__title">Gym Weight Lifting</h3>

                    <p class="program__description">
                        what ever you have days free,<br> We will personalize your workout days plan.
                    </p>

                    <a href="#" class="program__button">
                        <i class='bx bx-right-arrow-alt'></i>
                    </a>
                </article>
            </div>
        </div>
    </section>

    <!--==================== CHOOSE US ====================-->
    <section class="choose section" id="choose">
        <div class="choose__overflow">
            <div class="choose__container container grid">
                <div class="choose__content">
                    <div class="section__data">
                        <h2 class="section__subtitle">Best Reasons</h2>
                        <div class="section__titles">
                            <h1 class="section__title-border">WHY</h1>
                            <h1 class="section__title">CHOOSE US ?</h1>
                        </div>
                    </div>

                    <p class="choose__description">
                        Choose your customized type of workout plans ,<br>and your nutrition system will be automatically generate. <br>Remember the
                        only bad workout is the one you didn't do.
                    </p>

                    <div class="choose__data">
                        <div class="choose__group">
                            <h3 class="choose__number">10k+</h3>
                            <p class="choose__subtitle">Total members</p>
                        </div>
                        <div class="choose__group">
                            <h3 class="choose__number">+All type</h3>
                            <p class="choose__subtitle">Flexibility</p>
                        </div>
                        <div class="choose__group">
                            <h3 class="choose__number">50+</h3>
                            <p class="choose__subtitle">nutrition and workout Programs</p>
                        </div>
                        <div class="choose__group">
                            <h3 class="choose__number">timeline</h3>
                            <p class="choose__subtitle">Communication between users</p>
                        </div>
                    </div>
                </div>

                <div class="choose__images">
                    <img src="{{asset('assets/img/choose-img.png')}}" alt="choose image" class="choose__img">

                    <div class="choose__triangle choose__triangle-1"></div>
                    <div class="choose__triangle choose__triangle-2"></div>
                    <div class="choose__triangle choose__triangle-3"></div>
                </div>
            </div>
        </div>
    </section>

    <!--==================== PRICING ====================-->
    <!-- <section class="pricing section" id="pricing">
        <div class="container">
            <div class="section__data">
                <h2 class="section__subtitle">Pricing</h2>
                <div class="section__titles">
                    <h1 class="section__title-border">OUR</h1>
                    <h1 class="section__title">SPECIAL PLAN</h1>
                </div>
            </div>

            <div class="pricing__container grid">
                <article class="pricing__card">
                    <header class="pricing__header">
                        <div class="pricing__shape">
                            <img src="{{asset('assets/img/pricing1.png')}}" alt="pricing image" class="pricing__img">
                        </div>

                        <h1 class="pricing__title">BASIC PACKAGE</h1>
                        <h2 class="pricing__number">$200</h2>
                    </header>

                    <ul class="pricing__list">
                        <li class="pricing__item">
                            <i class='bx bx-check-circle'></i> 5 Days in a week
                        </li>
                        <li class="pricing__item">
                            <i class='bx bx-check-circle'></i> 01 SweatShirt(Merch)
                        </li>
                        <li class="pricing__item pricing__item-opacity">
                            <i class='bx bx-check-circle'></i> 01 Bottle of Protein
                        </li>
                        <li class="pricing__item pricing__item-opacity">
                            <i class='bx bx-check-circle'></i> Access to Videos
                        </li>
                        <li class="pricing__item pricing__item-opacity">
                            <i class='bx bx-check-circle'></i> Muscle Stretching
                        </li>
                    </ul>

                    <a href="#" class="button button__flex pricing__button">
                        Purchase Now <i class='bx bx-right-arrow-alt'></i>
                    </a>
                </article>

                <article class="pricing__card">
                    <header class="pricing__header">
                        <div class="pricing__shape">
                            <img src="{{asset('assets/img/pricing2.png')}}" alt="pricing image" class="pricing__img">
                        </div>

                        <h1 class="pricing__title">PREMIUM PACKAGE</h1>
                        <h2 class="pricing__number">$240</h2>
                    </header>

                    <ul class="pricing__list">
                        <li class="pricing__item">
                            <i class='bx bx-check-circle'></i> 5 Days in a week
                        </li>
                        <li class="pricing__item">
                            <i class='bx bx-check-circle'></i> 01 SweatShirt(Merch)
                        </li>
                        <li class="pricing__item">
                            <i class='bx bx-check-circle'></i> 01 Bottle of Protein
                        </li>
                        <li class="pricing__item pricing__item-opacity">
                            <i class='bx bx-check-circle'></i> Access to Videos
                        </li>
                        <li class="pricing__item pricing__item-opacity">
                            <i class='bx bx-check-circle'></i> Muscle Stretching
                        </li>
                    </ul>

                    <a href="#" class="button button__flex pricing__button">
                        Purchase Now <i class='bx bx-right-arrow-alt'></i>
                    </a>
                </article>

                <article class="pricing__card">
                    <header class="pricing__header">
                        <div class="pricing__shape">
                            <img src="{{asset('assets/img/pricing3.png')}}" alt="pricing image" class="pricing__img">
                        </div>

                        <h1 class="pricing__title">DIAMOND PACKAGE</h1>
                        <h2 class="pricing__number">$420</h2>
                    </header>

                    <ul class="pricing__list">
                        <li class="pricing__item">
                            <i class='bx bx-check-circle'></i> 5 Days in a week
                        </li>
                        <li class="pricing__item">
                            <i class='bx bx-check-circle'></i> 02 SweatShirt(Merch)
                        </li>
                        <li class="pricing__item">
                            <i class='bx bx-check-circle'></i> 05 Bottle of Protein
                        </li>
                        <li class="pricing__item">
                            <i class='bx bx-check-circle'></i> Access to Videos
                        </li>
                        <li class="pricing__item">
                            <i class='bx bx-check-circle'></i> Muscle Stretching
                        </li>
                    </ul>

                    <a href="#" class="button button__flex pricing__button">
                        Purchase Now <i class='bx bx-right-arrow-alt'></i>
                    </a>
                </article>
            </div>
        </div>
    </section> -->

    <!--==================== CALCULATE ====================-->
    <section class="calculate section" id="calculate">
        <div class="calculate__container container grid">
            <div class="calculate__content">
                <div class="section__ titles">
                    <h1 class="section__title-border">CALCULATE</h1>
                    <h1 class="section__title">YOUR BMI</h1>
                </div>

                <p class="calculate__description">
                    The body mass index (BMI) calculator calculates
                    body mass index from your weight and height.
                </p>

                <form action="" class="calculate__form" id="calculate-form">
                    <div class="calculate__box">
                        <input type="number" placeholder="Height" class="calculate__input" id="calculate-cm">
                        <label for="" class="calculate__label">cm</label>
                    </div>
                    <div class="calculate__box">
                        <input type="number" placeholder="Weight" class="calculate__input" id="calculate-kg">
                        <label for="" class="calculate__label">kg</label>
                    </div>

                    <button type="submit" class="button button__flex">
                        Calculate Now <i class='bx bx-right-arrow-alt'></i>
                    </button>
                </form>

                <p class="calculate__message" id="calculate-message"></p>
            </div>

            <img src="{{asset('assets/img/calculate-img.png')}}" alt="calculate image" class="calculate__img">
        </div>
    </section>
</main>

<!--==================== FOOTER ====================-->
{{--<footer class="footer section" id="footer">--}}
{{--    <div class="footer__container container grid">--}}
{{--        <div>--}}
{{--            <a href="#" class="footer__logo">--}}
{{--                <img src="{{asset('assets/img/favicon.png')}}" alt="logo"> FitnessFuelX--}}
{{--            </a>--}}
{{--            <p class="footer__description">--}}
{{--                Subscribe for company <br> updates below--}}
{{--            </p>--}}

{{--            <form action="" class="footer__form" id="contact-form">--}}
{{--                <input type="email" name="user_email" placeholder="Your Email"  class="footer__input" id="contact-user">--}}
{{--                <button type="submit" class="button">--}}
{{--                    Subscribe--}}
{{--                </button>--}}
{{--            </form>--}}

{{--            <p class="footer__message" id="contact-message"></p>--}}
{{--        </div>--}}

{{--        <div class="footer__content">--}}
{{--            <div>--}}
{{--                <h3 class="footer__title">--}}
{{--                    SERVICES--}}
{{--                </h3>--}}

{{--                <ul class="footer__links">--}}
{{--                    <li>--}}
{{--                        <a href="#" class="footer__link">Flex Muscle</a>--}}
{{--                    </li>--}}
{{--                    <li>--}}
{{--                        <a href="#" class="footer__link">Cardio Exercise</a>--}}
{{--                    </li>--}}
{{--                    <li>--}}
{{--                        <a href="#" class="footer__link">Basic Yoga</a>--}}
{{--                    </li>--}}
{{--                    <li>--}}
{{--                        <a href="#" class="footer__link">Weight Lifting</a>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--            </div>--}}

{{--            <div>--}}
{{--                <h3 class="footer__title">--}}
{{--                    PRICING--}}
{{--                </h3>--}}

{{--                <ul class="footer__links">--}}
{{--                    <li>--}}
{{--                        <a href="#" class="footer__link">basic</a>--}}
{{--                    </li>--}}
{{--                    <li>--}}
{{--                        <a href="#" class="footer__link">Premium</a>--}}
{{--                    </li>--}}
{{--                    <li>--}}
{{--                        <a href="#" class="footer__link">Diamond</a>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--            </div>--}}

{{--            <div>--}}
{{--                <h3 class="footer__title">--}}
{{--                    COMPANY--}}
{{--                </h3>--}}

{{--                <ul class="footer__links">--}}
{{--                    <li>--}}
{{--                        <a href="#" class="footer__link">About Us</a>--}}
{{--                    </li>--}}
{{--                    <li>--}}
{{--                        <a href="#" class="footer__link">Careers</a>--}}
{{--                    </li>--}}
{{--                    <li>--}}
{{--                        <a href="#" class="footer__link">Customers</a>--}}
{{--                    </li>--}}
{{--                    <li>--}}
{{--                        <a href="#" class="footer__link">Partners</a>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

{{--    <div class="container">--}}
{{--        <div class="footer__group">--}}
{{--            <ul class="footer__social">--}}
{{--                <a href="https://www.facebook.com/addekrt.vdnewwjf.9/" target="_blank" class="footer__social-link">--}}
{{--                    <i class='bx bxl-facebook-circle'></i>--}}
{{--                </a>--}}
{{--                <a href="https://twitter.com/abdelrahmmann1" target="_blank" class="footer__social-link">--}}
{{--                    <i class='bx bxl-twitter'></i>--}}
{{--                </a>--}}
{{--                <a href="https://www.instagram.com/_abdelrahmmann/" target="_blank" class="footer__social-link">--}}
{{--                    <i class='bx bxl-instagram'></i>--}}
{{--                </a>--}}
{{--            </ul>--}}

{{--            <span class="footer__copy">--}}
{{--                        &#169; Copyright FitnessFuelX. All rights reserved--}}
{{--                    </span>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</footer>--}}

<!--========== SCROLL UP ==========-->
<a href="#" class="scrollup" id="scroll-up">
    <i class='bx bx-up-arrow-alt'></i>
</a>

<!--=============== SCROLLREVEAL ===============-->
<script src="{{asset('assets/js/scrollreveal.min.js')}}"></script>

<!--=============== EMAIL JS ===============-->
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js"></script>

<!--=============== MAIN JS ===============-->
<script src="{{asset('assets/js/home.js')}}"></script>
</body>
</html>
