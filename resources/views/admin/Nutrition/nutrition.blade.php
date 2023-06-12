@extends('layouts.Layout')
@section('style-nutrition')
    <link rel="stylesheet" href="{{ asset('assets/css/stylesNutrition.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
@endsection


@section('nutrition')
    <section class="section section__height container" id="home">
        <!-- here i will put post and create post  -->
        <header class="days-header">
            <div class="days-table">
                Days Schedule
            </div>
            <div class="hamburger">
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
            </div>
            <nav class="nav-days">
                <ul>
                    <li>
                        <a href="#tranding-saturday" class="nav__link">breakfast</a>
                    </li>
                    <li>
                        <a href="#tranding-monday"class="nav__link">launch</a>
                    </li>
                    <li>
                        <a href="#tranding-tuesday" class="nav__link">dinner</a>

                    </li>
                    <li>
                        <a href="#tranding-sunday" class="nav__link">snacks</a>

                    </li>
                </ul>
            </nav>

            </nav>
        </header>

        <!-- swipper  -->
        <section id="tranding-saturday" class="tranding-section">
            <section id="tranding">
                <div class="containnner">
                    <div class="swiper tranding-slider">
                        <div class="swiper-wrapper">
                            <!-- Slide-start -->
                            <div class="swiper-slide tranding-slide">
                                <div class="tranding-slide-img">
                                    <img src="{{asset('images/Images-Nutrition/defult.jpg')}}" alt="Tranding">
                                </div>
                                <div class="tranding-slide-content">
                                    <div class="tranding-slide-content-bottom">
                                        <h2 class="food-name main-meal-name">
                                            {{ $data[0][0]['meal']->name_meal}}
                                        </h2>
                                        <div class="main-meal">
                                            <p>Total Calories for the meal: {{round($data[0][0]['meal']->calories_meal)}} Cal</p>
                                            <p>Total Proteins in the meal: {{round($data[0][0]['meal']->protein)}} g</p>
                                            <p>Total Carbs in the meal: {{round($data[0][0]['meal']->carb)}} g</p>
                                            <p>Total Fats in the meal: {{round($data[0][0]['meal']->fat)}} g</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Slide-end -->
                            <!-- Slide-start -->
                            @for($i=0;$i<count($data[0][0]['compontent_meal']);$i++)
                                <div class="swiper-slide tranding-slide">
                                    <div class="tranding-slide-img">
                                        <img src="{{asset('images/Images-Nutrition/'.$data[0][0]['compontent_meal'][$i]->photo)}}" alt="Tranding">
                                    </div>
                                    <div class="tranding-slide-content">
                                        <div class="tranding-slide-content-bottom">
                                            <h2 class="food-name">
                                                {{ $data[0][0]['compontent_meal'][$i]->name_compontent_meal}}
                                            </h2>
                                            <div class="ingredient-meal">
                                                <p>Total weight of the ingredient: {{ceil( $data[0][0]['compontent_meal'][$i]->weight)}}
                                                    {{ $data[0][0]['compontent_meal'][$i]->measruing_unit}}</p>
                                                <p>Total Calories for the ingredient: {{round($data[0][0]['compontent_meal'][$i]->calories)}} Cal</p>
                                                <p>Total Proteins in the ingredient: {{ round($data[0][0]['compontent_meal'][$i]->protein)}} g</p>
                                                <p>Total Carbs in the ingredient: {{ round($data[0][0]['compontent_meal'][$i]->carb)}} g</p>
                                                <p>Total Fats in the ingredient: {{ round($data[0][0]['compontent_meal'][$i]->fat)}} g</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endfor
                        </div>

                        <div class="tranding-slider-control">
                            <div class="swiper-button-prev slider-arrow">
                                <ion-icon name="arrow-back-outline"></ion-icon>
                            </div>
                            <div class="swiper-button-next slider-arrow">
                                <ion-icon name="arrow-forward-outline"></ion-icon>
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>

                    </div>
                </div>
            </section>
        </section>

        <section id="tranding-sunday" class="tranding-section">
            <section id="tranding">
                <div class="containnner">
                    <div class="swiper tranding-slider">
                        <div class="swiper-wrapper">
                            <!-- Slide-start -->
                            <div class="swiper-slide tranding-slide">
                                <div class="tranding-slide-img">
                                    <img src="{{asset('images/Images-Nutrition/defult.jpg')}}" alt="Tranding">
                                </div>
                                <div class="tranding-slide-content">
                                    <div class="tranding-slide-content-bottom">
                                        <h2 class="food-name main-meal-name">
                                            {{ $data[0][1]['meal']->name_meal}}
                                        </h2>
                                        <div class="main-meal">
                                            <p>Total Calories for the meal: {{round($data[0][1]['meal']->calories_meal)}} Cal</p>
                                            <p>Total Proteins in the meal: {{round($data[0][1]['meal']->protein)}} g</p>
                                            <p>Total Carbs in the meal: {{round($data[0][1]['meal']->carb)}} g</p>
                                            <p>Total Fats in the meal: {{round($data[0][1]['meal']->fat)}} g</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Slide-end -->
                            <!-- Slide-start -->
                            @for($i=0;$i<count($data[0][1]['compontent_meal']);$i++)
                                <div class="swiper-slide tranding-slide">
                                    <div class="tranding-slide-img">
                                        <img src="{{asset('images/Images-Nutrition/'.$data[0][1]['compontent_meal'][$i]->photo)}}" alt="Tranding">
                                    </div>
                                    <div class="tranding-slide-content">
                                        <div class="tranding-slide-content-bottom">
                                            <h2 class="food-name">
                                                {{ $data[0][1]['compontent_meal'][$i]->name_compontent_meal}}
                                            </h2>
                                            <div class="ingredient-meal">
                                                <p>Total weight of the ingredient: {{ceil( $data[0][1]['compontent_meal'][$i]->weight)}}
                                                    {{ $data[0][1]['compontent_meal'][$i]->measruing_unit}}</p>
                                                <p>Total Calories for the ingredient: {{round($data[0][1]['compontent_meal'][$i]->calories)}} Cal</p>
                                                <p>Total Proteins in the ingredient: {{ round($data[0][1]['compontent_meal'][$i]->protein)}} g</p>
                                                <p>Total Carbs in the ingredient: {{ round($data[0][1]['compontent_meal'][$i]->carb)}} g</p>
                                                <p>Total Fats in the ingredient: {{ round($data[0][1]['compontent_meal'][$i]->fat)}} g</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endfor
                            <!-- Slide-end -->
                        </div>

                        <div class="tranding-slider-control">
                            <div class="swiper-button-prev slider-arrow">
                                <ion-icon name="arrow-back-outline"></ion-icon>
                            </div>
                            <div class="swiper-button-next slider-arrow">
                                <ion-icon name="arrow-forward-outline"></ion-icon>
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>

                    </div>
                </div>
            </section>
        </section>

        <section id="tranding-monday" class="tranding-section">
            <section id="tranding">
                <div class="containnner">
                    <div class="swiper tranding-slider">
                        <div class="swiper-wrapper">
                            <!-- Slide-start -->
                            <div class="swiper-slide tranding-slide">
                                <div class="tranding-slide-img">
                                    <img src="{{asset('images/Images-Nutrition/defult.jpg')}}" alt="Tranding">
                                </div>
                                <div class="tranding-slide-content">
                                    <div class="tranding-slide-content-bottom">
                                        <h2 class="food-name main-meal-name">
                                            {{ $data[0][2]['meal']->name_meal}}
                                        </h2>
                                        <div class="main-meal">
                                            <p>Total Calories for the meal: {{round($data[0][2]['meal']->calories_meal)}} Cal</p>
                                            <p>Total Proteins in the meal: {{round($data[0][2]['meal']->protein)}} g</p>
                                            <p>Total Carbs in the meal: {{round($data[0][2]['meal']->carb)}} g</p>
                                            <p>Total Fats in the meal: {{round($data[0][2]['meal']->fat)}} g</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Slide-end -->
                            <!-- Slide-start -->
                            @for($i=0;$i<count($data[0][2]['compontent_meal']);$i++)
                                <div class="swiper-slide tranding-slide">
                                    <div class="tranding-slide-img">
                                        <img src="{{asset('images/Images-Nutrition/'.$data[0][2]['compontent_meal'][$i]->photo)}}" alt="Tranding">
                                    </div>
                                    <div class="tranding-slide-content">
                                        <div class="tranding-slide-content-bottom">
                                            <h2 class="food-name">
                                                {{ $data[0][2]['compontent_meal'][$i]->name_compontent_meal}}
                                            </h2>
                                            <div class="ingredient-meal">
                                                <p>Total weight of the ingredient: {{ceil( $data[0][2]['compontent_meal'][$i]->weight)}}
                                                    {{ $data[0][2]['compontent_meal'][$i]->measruing_unit}}</p>
                                                <p>Total Calories for the ingredient: {{round($data[0][2]['compontent_meal'][$i]->calories)}} Cal</p>
                                                <p>Total Proteins in the ingredient: {{ round($data[0][2]['compontent_meal'][$i]->protein)}} g</p>
                                                <p>Total Carbs in the ingredient: {{ round($data[0][2]['compontent_meal'][$i]->carb)}} g</p>
                                                <p>Total Fats in the ingredient: {{ round($data[0][2]['compontent_meal'][$i]->fat)}} g</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endfor
                            <!-- Slide-end -->
                        </div>

                        <div class="tranding-slider-control">
                            <div class="swiper-button-prev slider-arrow">
                                <ion-icon name="arrow-back-outline"></ion-icon>
                            </div>
                            <div class="swiper-button-next slider-arrow">
                                <ion-icon name="arrow-forward-outline"></ion-icon>
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>

                    </div>
                </div>
            </section>
        </section>

        <section id="tranding-tuesday" class="tranding-section">
            <section id="tranding">
                <div class="containnner">
                    <div class="swiper tranding-slider">
                        <div class="swiper-wrapper">
                            <!-- Slide-start -->
                            <div class="swiper-slide tranding-slide">
                                <div class="tranding-slide-img">
                                    <img src="{{asset('images/Images-Nutrition/defult.jpg')}}" alt="Tranding">
                                </div>
                                <div class="tranding-slide-content">
                                    <div class="tranding-slide-content-bottom">
                                        <h2 class="food-name main-meal-name">
                                            {{ $data[1]['meal']->name_meal}}
                                        </h2>
                                        <div class="main-meal">
                                            <p>Total Calories for the meal: {{round($data[1]['meal']->calories_meal)}} Cal</p>
                                            <p>Total Proteins in the meal: {{round($data[1]['meal']->protein)}} g</p>
                                            <p>Total Carbs in the meal: {{round($data[1]['meal']->carb)}} g</p>
                                            <p>Total Fats in the meal: {{round($data[1]['meal']->fat)}} g</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Slide-end -->
                            <!-- Slide-start -->
                            @for($i=0;$i<count($data[1]['compontent_meal']);$i++)
                                <div class="swiper-slide tranding-slide">
                                    <div class="tranding-slide-img">
                                        <img src="{{asset('images/Images-Nutrition/'.$data[1]['compontent_meal'][$i]->photo)}}" alt="Tranding">
                                    </div>
                                    <div class="tranding-slide-content">
                                        <div class="tranding-slide-content-bottom">
                                            <h2 class="food-name">
                                                {{ $data[1]['compontent_meal'][$i]->name_compontent_meal}}
                                            </h2>
                                            <div class="ingredient-meal">
                                                <p>Total weight of the ingredient: {{ceil( $data[1]['compontent_meal'][$i]->weight)}}
                                                    {{ $data[1]['compontent_meal'][$i]->measruing_unit}}</p>
                                                <p>Total Calories for the ingredient: {{round($data[1]['compontent_meal'][$i]->calories)}} Cal</p>
                                                <p>Total Proteins in the ingredient: {{ round($data[1]['compontent_meal'][$i]->protein)}} g</p>
                                                <p>Total Carbs in the ingredient: {{ round($data[1]['compontent_meal'][$i]->carb)}} g</p>
                                                <p>Total Fats in the ingredient: {{ round($data[1]['compontent_meal'][$i]->fat)}} g</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endfor
                            <!-- Slide-end -->
                        </div>

                        <div class="tranding-slider-control">
                            <div class="swiper-button-prev slider-arrow">
                                <ion-icon name="arrow-back-outline"></ion-icon>
                            </div>
                            <div class="swiper-button-next slider-arrow">
                                <ion-icon name="arrow-forward-outline"></ion-icon>
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>

                    </div>
                </div>
            </section>
        </section>
        @endsection



        @section('script-nutrition')
            <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
            <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
            <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
            <!--=============== MAIN JS ===============-->
            <script src="{{ asset('assets/js/workout&nutrition.js') }}"></script>
@endsection




