<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="{{asset('assets/css/stylesSignup1.css')}}">

    <!--=============== BOX Icons ===============-->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <title>register</title>
</head>

<body>
    <div class="container">
        <div class="login__content">
            <img src="{{asset('assets/img/gym-login3.jpg')}}" alt="login" class="login__img">

            <form action="{{route('register')}}" method="post" class="login__form">
                @csrf
                <div>
                    <p class="login__description">
                        Please fill in all fields.
                    </p>
                </div>
                <div>
                    <div class="login__inputs">
                        <div>
                            <label for="" class="login__label">User Name</label>
                            <div class="input">
                                <i class="bx bx-user-plus input__lock"></i>
                                <input name="name" value="{{old('name')}}" type="text"
                                    placeholder="Enter your User Name" class="input__password input__email"
                                    id="username">
                            </div>
                        </div>
                        {{-- Error name --}}
                        @error('name')
                        <h1 class="alert-danger1" role="alert">
                            {{$message}}
                        </h1>
                        @enderror

                        <div>
                            <label for="" class="login__label">Email</label>
                            <div class="input">
                                <i class="bx bx-envelope input__lock"></i>
                                <input name="email" value="{{old('email')}}" type="email"
                                    placeholder="Enter your email address" class="input__password input__email"
                                    id="email">
                            </div>
                        </div>
                        {{-- Error Email --}}
                        @error('email')
                        <div class="alert-danger2" role="alert">
                            {{$message}}
                        </div>
                        @enderror

                        <div>
                            <label for="" class="login__label">Phone Number</label>
                            <div class="input">
                                <i class="bx bx-phone input__lock"></i>
                                <input name="phone" value="{{ old('phone') }}" type="tel"
                                    placeholder="Enter your Phone number" class="input__password input__email"
                                    id="phone">
                            </div>
                        </div>
                        {{-- Error phone --}}
                        @error('phone')
                        <div class="alert-danger3" role="alert">
                            {{$message}}
                        </div>
                        @enderror

                        <div>
                            <label for="" class="login__label">Age</label>
                            <div class="input">
                                <i class="bx bx-message-square-edit input__lock"></i>
                                <input name="age" value="{{ old('age') }}" type="number" placeholder="Enter your Age"
                                    class="input__password input__email" id="age">
                            </div>
                        </div>
                        {{-- Error Age --}}
                        @error('age')
                        <div class="alert-danger4" role="alert">
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
                        {{-- Error Password --}}
                        @error('password')
                        <div class="alert-danger5" role="alert">
                            {{$message}}
                        </div>
                        @enderror

                        <div>
                            <label for="" class="login__label">Confirm Password</label>
                            <div class="input">
                                <div class="input__overlay" id="input-overlays"></div>
                                <i class="bx bx-lock-alt input__lock"></i>
                                <input name="password_confirmation" type="password" placeholder="Re-Enter your password"
                                    class="input__password" id="input-passs">
                                <i class="bx bx-hide input__icon" id="input-icons"></i>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="login__buttons">
                            <button type="submit" class="login__button">Continue</button>
                        </div>
                    </div>

                </div>
            </form>
        </div>
    </div>
    <!--=============== MAIN JS ===============-->
    <script src="{{asset('assets/js/signs.js')}}"></script>
</body>

</html>