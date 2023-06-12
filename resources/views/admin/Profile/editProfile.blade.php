<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!--=============== FAVICON ===============-->
        <link rel="shortcut icon" href="{{asset('assets/img/favicon.png')}}" type="image/x-icon">
        <!--=============== CSS ===============-->
        <link rel="stylesheet" href="{{asset('assets/css/stylesEditProfile.css')}}">

        <!--=============== BOX Icons ===============-->
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

        <title></title>
    </head>
    <body>
        <div class="container">
            <div class="login__content">
                <!-- <img  class="login__img"> -->
                <img src="{{asset('assets/img/gym-login.jpg')}}" alt="login" class="login__img">

                <form action="{{route('Edit')}}" method="post" enctype="multipart/form-data" class="login__form">
                    @csrf
                    <div class="background__edit">
                    <div class="nav__mask">
                        <img src="{{ asset('images/user-profile/'.$client->photo) }}" alt="" class="nav__img">
                    </div>

                    <a id="fileButton" name="media" class="follow__button">
                        Change Photo
                    </a>
                    <input type="file" name="media" value="{{$client->photo}}" id="fileInput" style="display: none;">
                </div>

                    <div>
                        <div class="login__inputs">
                            <div>
                                <label for="" class="login__label">User Name</label>
                                <div class="input">
                                    <i class="bx bx-user-plus input__lock"></i>
                                    <input type="text" name="name" value="{{$client->name}}"  class="input__password input__email" id="username">
                                </div>
                            </div>

                            <div>
                                <label for="" class="login__label">Email</label>
                                <div class="input">
                                    <i class="bx bx-envelope input__lock"></i>
                                    <input type="email" name="email" value="{{$client->email}}"  class="input__password input__email" id="email">
                                </div>
                            </div>

                            <div>
                                <label for="" class="login__label">Phone Number</label>
                                <div class="input">
                                    <i class="bx bx-phone input__lock"></i>
                                    <input type="number" name="phone" value="{{$client->phone}}"  class="input__password input__email" id="phone">
                                </div>
                            </div>

                            <div>
                                <label for="" class="login__label">Age</label>
                                <div class="input">
                                    <i class="bx bx-message-square-edit input__lock"></i>
                                    <input type="number" name="age" value="{{$client->age}}" class="input__password input__email" id="age">
                                </div>
                            </div>

                            <div>
                                <label for="" class="login__label">Password</label>
                                <div class="input">
                                    <div class="input__overlay" id="input-overlay"></div>
                                    <i class="bx bx-lock-alt input__lock"></i>
                                    <input type="password" name="password" placeholder="Enter your password"  class="input__password" id="input-pass">
                                    <i class="bx bx-hide input__icon" id="input-icon"></i>
                                </div>
                            </div>

                            <div>
                                <label for="" class="login__label">Confirm Password</label>
                                <div class="input">
                                    <div class="input__overlay" id="input-overlays"></div>
                                    <i class="bx bx-lock-alt input__lock"></i>
                                    <input type="password" name="password_confirmation" placeholder="Re-Enter your password"  class="input__password" id="input-passs">
                                    <i class="bx bx-hide input__icon" id="input-icons"></i>
                                </div>
                            </div>

                            <!-- <div>
                                <label for="" class="login__label">Height:</label>
                                <div class="input">
                                    <i class="bx bx-bone input__lock"></i>
                                    <input type="number" placeholder="Enter your Height (Cm)" required class="input__password input__email" id="height">
                                </div>
                            </div>

                            <div>
                                <label for="" class="login__label">weight:</label>
                                <div class="input">
                                    <i class="bx bx-cookie input__lock"></i>
                                    <input type="number" placeholder="Enter your weight (Kg)" required class="input__password input__email" id="weight">
                                </div>
                            </div>
                        </div> -->

                        <div>
                            <div class="login__buttons">
                                <button type="submit"  class="login__button">Submit</button>
                            </div>
                        </div>

                        </div>
                        </div>
                </form>
            </div>
            </div>
        </div>

        <!--=============== MAIN JS ===============-->
{{--        <script src="{{asset('assets/js/signs.js')}}"></script>--}}
        @if($errors->any())
            @foreach($errors->all() as $error)
            <div class="danger">
                {{$error}}<br>
            </div>
             @endforeach
        @endif
        <script src="{{asset('assets/js/create-post.js')}}"></script>
        <script src="{{asset('assets/js/signs.js')}}"></script>
    </body>
</html>

