<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="{{asset('assets/css/stylesSignup3.css')}}">

    <!--=============== BOX Icons ===============-->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!-- <link href="https://www.flaticon.com/css/flaticon.css" rel="stylesheet" type="text/css"> -->

    <title></title>
</head>

<body>
    <div class="container">
        <div class="login__content">
            <img src="{{asset('assets/img/gym-login3.jpg')}}" alt="login" class="login__img">

            <form action="{{route('nutrition')}}" method="post" enctype="multipart/form-data" class="login__form">
                @csrf
                <div>
                    <p class="login__description">
                        Please fill in all fields.
                    </p>
                </div>
                <div>
                    <div class="login__inputs">

                        <div>
                            <label for="" class="login__label">Your Goal:</label>
                            <div class="input">
                                <i class="bx bx-trophy input__lock"></i>
                                <select required class="input__password input__email" name="goal" id="goal">
                                    <option selected="">Lose Fat</option>
                                    <option>Maintain weight</option>
                                    <option>Build muscle</option>
                                </select>
                            </div>
                        </div>

                        <div>
                            <label for="" class="login__label">Your nutrition system type:</label>
                            <div class="input">
                                <i class="bx bx-bowl-rice input__lock"></i>
                                <select class="input__password input__email" name="food" id="nutrition">
                                    <option selected="">None</option>
                                    <option>Vegeterian</option>
                                    <option>Low Carb</option>
                                    <option>Keto</option>
                                </select>
                            </div>
                        </div>

                        <div>
                            <label for="" class="login__label">Your Food Allergy:</label>
                            <div class="input">
                                <i class="bx bx-cookie input__lock"></i>
                                <select class="input__password input__email" name="allergy[]" multiple="multiple"
                                    id="Allergy">
                                    <option>None</option>
                                    <option>Dairy</option>
                                    <option>Eggs</option>
                                    <option>Peanuts</option>
                                    <option>Fish</option>
                                </select>
                            </div>
                        </div>


                    </div>
                </div>

                <div>
                    <div class="login__buttons">
                        <button type="submit" class="login__button">Submit</button>
                    </div>
                </div>

            </form>
        </div>
    </div>


</body>

</html>
