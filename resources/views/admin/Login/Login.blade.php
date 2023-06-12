<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--=============== BOX Icons ===============-->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!-- <link rel="stylesheet" href="{{asset('assets/css/normalize.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/all.min.css')}}"> -->

    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="{{asset('assets/css/stylesLogin.css')}}">

    <title></title>
</head>

<body>
    <div class="container">
        <div class="login__content">
            <img src="{{asset('assets/img/gym-login.jpg')}}" alt="login" class="login__img">

            <form action="{{route('post_login')}}" method="post" class="login__form">
                @csrf
                @if (isset($error))
                <div class="alert-danger"  role="alert">
                    {{ $error }}
                </div>
                @endif
                <div>
                    <h1 class="login__title">
                        <span>Welcome </span> Back
                    </h1>
                    <p class="login__description">
                        Welcome! Please login to continue.
                    </p>
                </div>
                <div>
                    <div class="login__inputs">
                        <div>
                            <label for="" class="login__label">Email</label>
                            <div class="input">
                                <i class="bx bx-envelope input__lock"></i>
                                <input name="email" type="email" value="{{ old('email') }}"
                                    placeholder="Enter your email address" class="input__password input__email">
                            </div>

                        </div>
                        {{-- Error Email --}}
                        @error('email')
                        <div class="alert-danger1" role="alert">
                            {{$message}}
                        </div>
                        @enderror

                        <div>
                            <label for="" class="login__label">Password</label>

                            <div class="input">
                                <div class="input__overlay" id="input-overlay"></div>
                                <i class="bx bx-lock-alt input__lock"></i>
                                <input name="password" type="password" placeholder="Enter your password"
                                    class="input__password" id="input-pass">
                                <i class="bx bx-hide input__icon" id="input-icon"></i>
                            </div>
                        </div>
                        @error('password')
                        <div class="alert-danger2" role="alert">
                            {{$message}}
                        </div>
                        @enderror
                    </div>

                </div>

                <div>
                    <div class="login__buttons">
                        <button type="submit" class="login__button">Log In</button>
                        <a class="login__button login__button-ghost" href="{{route('email_register')}}">Sign Up</a>
                    </div>

                    <a href="" class="login__forget">Forgot Password</a>
                </div>
            </form>
        </div>
    </div>

    <!--=============== MAIN JS ===============-->
    <script src="{{asset('assets/js/signs.js')}}"></script>
</body>

</html>