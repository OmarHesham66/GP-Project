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
        <li>
          <a href="#tranding-saturday" class="nav__link">Saturday</a>
        </li>
        <li>
          <a href="#tranding-sunday" class="nav__link">Sunday</a>
        </li>
        <li>
          <a href="#tranding-monday" class="nav__link">Monday</a>
        </li>
        <li>
          <a href="#tranding-tuesday" class="nav__link">Tuesday</a>
        </li>
        <li>
          <a href="#tranding-wednesday" class="nav__link">Wednesday</a>
        </li>
        <li>
          <a href="#tranding-thursday" class="nav__link">Thursday</a>
        </li>
        <li>
          <a href="#tranding-friday" class="nav__link">Friday</a>
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
            @if ($saturday=='yes')
            @foreach ($system_arr['السبت'] as $sys )
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
              @else
              <div class="tranding-slide-img">
                <img src="{{ asset('workout/restDay1.jpg') }}" alt="tranding">
              </div>
              <div class="tranding-slide-content">
              </div>
              @endif


              <!-- Slide-end -->


          </div>
          @if ($saturday=='yes')


          <div class="tranding-slider-control">
            <div class="swiper-button-prev slider-arrow">
              <ion-icon name="arrow-back-outline"></ion-icon>
            </div>
            <div class="swiper-button-next slider-arrow">
              <ion-icon name="arrow-forward-outline"></ion-icon>
            </div>
            <div class="swiper-pagination"></div>
          </div>
          @endif
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
            @if ($sunday=='yes')
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
              @else
              <div class="tranding-slide-img">
                <img src="{{ asset('workout/restDay1.jpg') }}" alt="tranding">
              </div>
              <div class="tranding-slide-content">
              </div>
              @endif

              <!-- Slide-end -->

          </div>
          @if ($sunday=='yes')


          <div class="tranding-slider-control">
            <div class="swiper-button-prev slider-arrow">
              <ion-icon name="arrow-back-outline"></ion-icon>
            </div>
            <div class="swiper-button-next slider-arrow">
              <ion-icon name="arrow-forward-outline"></ion-icon>
            </div>
            <div class="swiper-pagination"></div>
          </div>
          @endif

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
            @if ($monday=='yes')

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
              @else
              <div class="tranding-slide-img">
                <img src="{{ asset('workout/restDay1.jpg') }}" alt="tranding">
              </div>
              <div class="tranding-slide-content">
              </div>
              @endif


              <!-- Slide-end -->

          </div>
          @if ($tuesday=='yes')


          <div class="tranding-slider-control">
            <div class="swiper-button-prev slider-arrow">
              <ion-icon name="arrow-back-outline"></ion-icon>
            </div>
            <div class="swiper-button-next slider-arrow">
              <ion-icon name="arrow-forward-outline"></ion-icon>
            </div>
            <div class="swiper-pagination"></div>
          </div>
          @endif

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
            @if ($tuesday=='yes')

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


              @else
              <div class="tranding-slide-img">
                <img src="{{ asset('workout/restDay1.jpg') }}" alt="tranding">
              </div>
              <div class="tranding-slide-content">
              </div>
              @endif

              <!-- Slide-end -->

          </div>

          @if ($tuesday=='yes')


          <div class="tranding-slider-control">
            <div class="swiper-button-prev slider-arrow">
              <ion-icon name="arrow-back-outline"></ion-icon>
            </div>
            <div class="swiper-button-next slider-arrow">
              <ion-icon name="arrow-forward-outline"></ion-icon>
            </div>
            <div class="swiper-pagination"></div>
          </div>
          @endif
        </div>
      </div>
    </section>
  </section>


  <section id="tranding-wednesday" class="tranding-section">
    <section id="tranding">
      <div class="containnner">
        <div class="swiper tranding-slider">
          <div class="swiper-wrapper">
            <!-- Slide-start -->
            @if ($wednesday=='yes')
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
              @else
              <div class="tranding-slide-img">
                <img src="{{ asset('workout/restDay1.jpg') }}" alt="tranding">
              </div>
              <div class="tranding-slide-content">
              </div>
              @endif



              <!-- Slide-end -->
          </div>

          @if ($wednesday=='yes')


          <div class="tranding-slider-control">
            <div class="swiper-button-prev slider-arrow">
              <ion-icon name="arrow-back-outline"></ion-icon>
            </div>
            <div class="swiper-button-next slider-arrow">
              <ion-icon name="arrow-forward-outline"></ion-icon>
            </div>
            <div class="swiper-pagination"></div>
          </div>
          @endif

        </div>
      </div>
    </section>
  </section>

  <section id="tranding-thursday" class="tranding-section">
    <section id="tranding">
      <div class="containnner">
        <div class="swiper tranding-slider">
          <div class="swiper-wrapper">
            <!-- Slide-start -->
            @if ($thursday=='yes')
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
              @else
              <div class="tranding-slide-img">
                <img src="{{ asset('workout/restDay1.jpg') }}" alt="tranding">
              </div>
              <div class="tranding-slide-content">
              </div>
              @endif


              <!-- Slide-end -->

          </div>

          @if ($thursday=='yes')


          <div class="tranding-slider-control">
            <div class="swiper-button-prev slider-arrow">
              <ion-icon name="arrow-back-outline"></ion-icon>
            </div>
            <div class="swiper-button-next slider-arrow">
              <ion-icon name="arrow-forward-outline"></ion-icon>
            </div>
            <div class="swiper-pagination"></div>
          </div>
          @endif

        </div>
      </div>
    </section>
  </section>

  <section id="tranding-friday" class="tranding-section">
    <section id="tranding">
      <div class="containnner">
        <div class="swiper tranding-slider">
          <div class="swiper-wrapper">
            <!-- Slide-start -->
            @if ($friday=='yes')
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
              @else
              <div class="tranding-slide-img">
                <img src="{{ asset('workout/restDay1.jpg') }}" alt="tranding">
              </div>
              <div class="tranding-slide-content">
              </div>
              @endif


              <!-- Slide-end -->
          </div>

          @if ($friday=='yes')


          <div class="tranding-slider-control">
            <div class="swiper-button-prev slider-arrow">
              <ion-icon name="arrow-back-outline"></ion-icon>
            </div>
            <div class="swiper-button-next slider-arrow">
              <ion-icon name="arrow-forward-outline"></ion-icon>
            </div>
            <div class="swiper-pagination"></div>
          </div>
          @endif

        </div>
      </div>
    </section>
  </section>


</section>
@endsection
@section('script-workout')
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
<!--=============== MAIN JS ===============-->
<script src="{{ asset('assets/js/workout&nutrition.js') }}"></script>
@endsection