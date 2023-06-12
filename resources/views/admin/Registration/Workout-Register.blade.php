<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="{{asset('assets/css/stylesSignup2.css')}}">

    <!--=============== BOX Icons ===============-->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <!--=============== script ===============-->

    <title></title>
</head>

<body>
    <div class="container">
        <div class="login__content">
            <img src="{{asset('assets/img/gym-login3.jpg')}}" alt="login" class="login__img">

            <form action="{{route('workout')}}" method="post" enctype="multipart/form-data" class="login__form">
                @csrf
                {{-- <input type="hidden" value="{{ $id }}" name="id_of_user"> --}}
                <div>
                    <p class="login__description">
                        Please fill in all fields.
                    </p>
                </div>
                <div>
                    <div class="login__inputs">
                        <div>
                            <label for="" class="login__label">Select your Gender:</label>
                            <div class="input">
                                <i class="bx bx-male-female input__lock"></i>
                                <select required class="input__password input__email" name="gender" id="gender">
                                    <option value="male">male</option>
                                    <option value="female">female</option>
                                </select>
                            </div>
                        </div>

                        <div>
                            <label for="" class="login__label">Height:</label>
                            <div class="input">
                                <i class="bx bx-bone input__lock"></i>
                                <input name="height" type="number" placeholder="Enter your Height (Cm)" required
                                    class="input__password input__email" id="height">
                            </div>
                        </div>

                        <div>
                            <label for="" class="login__label">weight:</label>
                            <div class="input">
                                <i class="bx bx-cookie input__lock"></i>
                                <input name="weight" type="number" placeholder="Enter your weight (Kg)" required
                                    class="input__password input__email" id="weight">
                            </div>
                        </div>

                        <div>
                            <label for="" class="login__label">Your Activity level:</label>
                            <div class="input">
                                <i class="bx bx-pulse input__lock"></i>
                                <select required class="input__password input__email" name="activity" id="activity">
                                    <option value="1.2" selected="">Sedentary (office job)</option>
                                    <option value="1.375">Light Exercise (1-2 days/week)</option>
                                    <option value="1.55">Moderate Exercise (3-5 days/week)</option>
                                    <option value="1.725">Heavy Exercise (6-7 days/week)</option>
                                    <option value="1.9">Athlete (2x per day) </option>
                                </select>
                            </div>
                        </div>

                        <div>
                            <label for="" class="login__label">Your Exercise level:</label>
                            <div class="input">
                                <i class="bx bx-dumbbell input__lock"></i>
                                <select required class="input__password input__email" name="exercise_level"
                                    id="exercise">
                                    <option selected="">Beginner</option>
                                    <option>advanced (more than 6 months)</option>
                                </select>
                            </div>
                        </div>

                        <div>
                            <label for="" class="login__label">Body fat percentage:</label>
                            <div class="input">
                                <i class="bx bxs-capsule input__lock"></i>
                                <input name="bodyfat" type="number" placeholder="Enter your body fat percentage (%)"
                                    required class="input__password input__email" id="fat">
                            </div>
                        </div>


                    </div>
                </div>

                <div>
                    <div class="login__buttons">
                        <button type="submit" class="login__button">Continue</button>
                    </div>
                </div>

            </form>
        </div>
    </div>
    <!--=============== MAIN JS ===============-->
    <script src="{{asset('assets/js/signs.js')}}"></script>
</body>

</html>
