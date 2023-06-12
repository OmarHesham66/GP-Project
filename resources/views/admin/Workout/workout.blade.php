@extends('layouts.Layout')
@section('style-workout')
<link rel="stylesheet" href="{{ asset('assets/css/stylesWorkout.css') }}">
<link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
@endsection


@section('workout')
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
        @if ($saturday=='yes')
        <li>
          <a href="#tranding-saturday" class="nav__link">Saturday</a>
        </li>
        @endif
        @if ($sunday=='yes')
        <li>
          <a href="#tranding-sunday" class="nav__link">Sunday</a>
        </li>
        @endif
        @if ($monday=='yes')
        <li>
          <a href="#tranding-monday" class="nav__link">Monday</a>
        </li>
        @endif
        @if ($tuesday=='yes')
        <li>
          <a href="#tranding-tuesday" class="nav__link">Tuesday</a>
        </li>
        @endif
        @if($wednesday=='yes')
        <li>
          <a href="#tranding-wednesday" class="nav__link">Wednesday</a>
        </li>
        @endif
        @if($thursday=='yes')
        <li>
          <a href="#tranding-thursday" class="nav__link">Thursday</a>
        </li>
        @endif
        @if ($friday=='yes')
        <li>
          <a href="#tranding-friday" class="nav__link">Friday</a>
        </li>
        @endif
      </ul>
    </nav>

    </nav>
  </header>

  <!-- swipper  -->
  @if ($saturday=='yes')
  <section id="tranding-saturday" class="tranding-section">

    <section id="tranding">
      <div class="containnner">
        <div class="swiper tranding-slider">
          <div class="swiper-wrapper">
            <!-- Slide-start -->
            @foreach ($system_arr['السبت'] as $sys )
            @for ($i=0;$i<$arr_number[$sys->Exercise_Name];$i++ )
              <div class="swiper-slide tranding-slide">
                <div class="tranding-slide-img">
                  <video controls src="{{ asset('workout/'.$sys->muscle[$i]->Muscle_Video) }}" alt=""></video>
                </div>
                <div class="tranding-slide-content">
                  <div class="tranding-slide-content-bottom">
                    <h2 class="food-name" style="color: rgb(179, 179, 179)">
                      Exercise {{ $i+1 }} :
                      {{ $sys->Exercise_Name }}
                    </h2>
                    <p class="food-content">{{$sys->Exercise_Details}}.</p>
                    <p class="food-content" style="color: red"> - {{$sys->muscle[$i]->Muscle_Duration}}.</p>
                  </div>
                </div>
              </div>
              @endfor
              @endforeach
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
  @endif


  @if ($sunday=='yes')

  <section id="tranding-sunday" class="tranding-section">
    <section id="tranding">
      <div class="containnner">
        <div class="swiper tranding-slider">
          <div class="swiper-wrapper">
            <!-- Slide-start -->
            @foreach ($system_arr['الاحد'] as $sys )
            @for ($i=0;$i<$arr_number[$sys->Exercise_Name];$i++ )
              <div class="swiper-slide tranding-slide">
                <div class="tranding-slide-img">
                  <video controls src="{{ asset('workout/'.$sys->muscle[$i]->Muscle_Video) }}" alt="">
                </div>
                <div class="tranding-slide-content">
                  <div class="tranding-slide-content-bottom">
                    <h2 class="food-name" style="color: rgb(179, 179, 179)">
                      Exercise {{ $i+1 }} :
                      {{ $sys->Exercise_Name }}
                    </h2>
                    <p class="food-content">{{$sys->Exercise_Details}}.</p>
                    <p class="food-content" style="color: red"> - {{$sys->muscle[$i]->Muscle_Duration}}.</p>
                  </div>
                </div>
              </div>
              @endfor
              @endforeach
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
  @endif

  @if ($monday=='yes')
  <section id="tranding-monday" class="tranding-section">
    <section id="tranding">
      <div class="containnner">
        <div class="swiper tranding-slider">
          <div class="swiper-wrapper">
            <!-- Slide-start -->

            @foreach ($system_arr['الاثنين'] as $sys )
            @for ($i=0;$i<$arr_number[$sys->Exercise_Name];$i++ )
              <div class="swiper-slide tranding-slide">
                <div class="tranding-slide-img">
                  <video controls src="{{ asset('workout/'.$sys->muscle[$i]->Muscle_Video) }}" alt="">
                </div>
                <div class="tranding-slide-content">
                  <div class="tranding-slide-content-bottom">
                    <h2 class="food-name" style="color: rgb(179, 179, 179)">
                      Exercise {{ $i+1 }} :
                      {{ $sys->Exercise_Name }}
                    </h2>
                    <p class="food-content">{{$sys->Exercise_Details}}.</p>
                    <p class="food-content" style="color: red"> - {{$sys->muscle[$i]->Muscle_Duration}}.</p>
                  </div>
                </div>
              </div>
              @endfor
              @endforeach
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

  @endif
  @if ($tuesday=='yes')

  <section id="tranding-tuesday" class="tranding-section">
    <section id="tranding">
      <div class="containnner">
        <div class="swiper tranding-slider">
          <div class="swiper-wrapper">
            <!-- Slide-start -->

            @foreach ($system_arr['الثلاثاء'] as $sys )
            @for ($i=0;$i<$arr_number[$sys->Exercise_Name];$i++ )
              <div class="swiper-slide tranding-slide">
                <div class="tranding-slide-img">
                  <video controls src="{{ asset('workout/'.$sys->muscle[$i]->Muscle_Video) }}" alt="">
                </div>
                <div class="tranding-slide-content">
                  <div class="tranding-slide-content-bottom">
                    <h2 class="food-name" style="color: rgb(179, 179, 179)">
                      Exercise {{ $i+1 }} :
                      {{ $sys->Exercise_Name }}
                    </h2>
                    <p class="food-content">{{$sys->Exercise_Details}}.</p>
                    <p class="food-content" style="color: red"> - {{$sys->muscle[$i]->Muscle_Duration}}.</p>
                  </div>
                </div>
              </div>
              @endfor
              @endforeach
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
  @endif

  @if ($wednesday=='yes')

  <section id="tranding-wednesday" class="tranding-section">
    <section id="tranding">
      <div class="containnner">
        <div class="swiper tranding-slider">
          <div class="swiper-wrapper">
            <!-- Slide-start -->
            @foreach ($system_arr['الاربعاء'] as $sys )
            @for ($i=0;$i<$arr_number[$sys->Exercise_Name];$i++ )
              <div class="swiper-slide tranding-slide">
                <div class="tranding-slide-img">
                  <video controls src="{{ asset('workout/'.$sys->muscle[$i]->Muscle_Video) }}" alt="">
                </div>
                <div class="tranding-slide-content">
                  <div class="tranding-slide-content-bottom">
                    <h2 class="food-name" style="color: rgb(179, 179, 179)">
                      Exercise {{ $i+1 }} :
                      {{ $sys->Exercise_Name }}
                    </h2>
                    <p class="food-content">{{$sys->Exercise_Details}}.</p>
                    <p class="food-content" style="color: red"> - {{$sys->muscle[$i]->Muscle_Duration}}.</p>
                  </div>
                </div>
              </div>
              @endfor
              @endforeach
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
  @endif
  {{-- {{ dd($thursday) }} --}}
  @if ($thursday=='yes')
  <section id="tranding-thursday" class="tranding-section">
    <section id="tranding">
      <div class="containnner">
        <div class="swiper tranding-slider">
          <div class="swiper-wrapper">
            <!-- Slide-start -->
            @foreach ($system_arr['الخميس'] as $sys )
            @for ($i=0;$i<$arr_number[$sys->Exercise_Name];$i++ )
              <div class="swiper-slide tranding-slide">
                <div class="tranding-slide-img">
                  <video controls src="{{ asset('workout/'.$sys->muscle[$i]->Muscle_Video) }}" alt="">
                </div>
                <div class="tranding-slide-content">
                  <div class="tranding-slide-content-bottom">
                    <h2 class="food-name" style="color: rgb(179, 179, 179)">
                      Exercise {{ $i+1 }} :
                      {{ $sys->Exercise_Name }}
                    </h2>
                    <p class="food-content">{{$sys->Exercise_Details}}.</p>
                    <p class="food-content" style="color: red"> - {{$sys->muscle[$i]->Muscle_Duration}}.</p>
                  </div>
                </div>
              </div>
              @endfor
              @endforeach
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
  @endif

  @if ($friday=='yes')
  <section id="tranding-friday" class="tranding-section">
    <section id="tranding">
      <div class="containnner">
        <div class="swiper tranding-slider">
          <div class="swiper-wrapper">
            <!-- Slide-start -->
            @foreach ($system_arr['الجمعه'] as $sys )
            @for ($i=0;$i<$arr_number[$sys->Exercise_Name];$i++ )
              <div class="swiper-slide tranding-slide">
                <div class="tranding-slide-img">
                  <video controls src="{{ asset('workout/'.$sys->muscle[$i]->Muscle_Video) }}" alt="">
                </div>
                <div class="tranding-slide-content">
                  <div class="tranding-slide-content-bottom">
                    <h2 class="food-name" style="color: rgb(179, 179, 179)">
                      Exercise {{ $i+1 }} :
                      {{ $sys->Exercise_Name }}
                    </h2>
                    <p class="food-content">{{$sys->Exercise_Details}}.</p>
                    <p class="food-content" style="color: red"> - {{$sys->muscle[$i]->Muscle_Duration}}.</p>
                  </div>
                </div>
              </div>
              @endfor
              @endforeach
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
  @endif


</section>
@endsection
@section('script-workout')
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
<!--=============== MAIN JS ===============-->
<script src="{{ asset('assets/js/workout&nutrition.js') }}"></script>
@endsection