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

        <form action="{{route('workout2')}}" method="post" enctype="multipart/form-data" class="login__form">
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
                        <label for="" class="login__label">Workout_place:</label>
                        <div class="input">
                            <i class="bx bx-male-female input__lock"></i>
                            <select required class="input__password input__email" name="workout_place" id="gender">
                                <option >Home</option>
                                <option >Gym</option>
                            </select>
                        </div>
                    </div>

                    <div class="login__inputs">
                        <div>
                            <label for="" class="login__label">Workout_Tools:</label>
                            <div class="input">
                                <i class="bx bx-male-female input__lock"></i>
                                <select required class="input__password input__email" name="workout_tool" id="gender">
                                    <option >Dummble</option>
                                    <option >Bar</option>
                                    <option value="NULL" >Both</option>
                                </select>
                            </div>
                        </div>
                            <div class="login__inputs">
                                <div>
                                    <label for="" class="login__label">The days of exercise:</label>
                                    <div class="input">
                                        <i class="bx bx-male-female input__lock"></i>
                                        <select required class="input__password input__email" multiple="multiple" name="workout_days[]" id="gender">
                                            <option >السبت</option>
                                            <option >الاحد</option>
                                            <option >الاثنين</option>
                                            <option >الثلاثاء</option>
                                            <option >الاربعاء</option>
                                            <option >الخميس</option>
                                            <option >الجمعة</option>
                                        </select>
                                    </div>
                                </div>
                                <div>
                                    <div class="login__buttons">
                                        <button type="submit" class="login__button">Continue</button>
                                    </div>
                                </div>
                            </div>
                            </div>
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
