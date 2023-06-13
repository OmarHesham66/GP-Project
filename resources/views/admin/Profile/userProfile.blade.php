@extends('layouts.Layout')
@section('style-user_profile')
<link rel="stylesheet" href="{{asset('assets/css/stylesProfile.css')}}">
<link href="{{ asset('assets/lightbox2-2.11.4/dist/css/lightbox.min.css') }}" rel="stylesheet" />
<link href="{{asset('assets/lightbox2-2.11.4/dist/css/lightbox.min.css')}}" rel="stylesheet" />
<link rel="stylesheet" href="{{asset('assets/css/stylesTimeline.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/stylesComment.css')}}">
@endsection


@section('user_profile')
    <section class="section section__height container" id="home">
        <!-- here i will put post and create post  -->
        <div class="page__container">
            @livewire('change-follow-button',['main_id'=>$main_id])
            {{--        @include('admin.Dashboard.Timeline.assets-timeline.create-post')--}}
            @include('admin.Dashboard.Timeline.assets-timeline.posts-timeline')
        </div>
    </section>


@endsection

@section('script-user_profile')
<script src="{{ asset('assets/js/timeline.js')}}"></script>
<script src="{{ asset('assets/lightbox2-2.11.4/dist/js/lightbox-plus-jquery.min.js') }}"></script>
<script src="https://code.jquery.com/jquery-3.7.0.min.js"
  integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
<script src="https://js.pusher.com/7.2/pusher.min.js"></script>
<script>
  Pusher.logToConsole = true;

  var pusher = new Pusher('3a50f7c38a677530c253', {
    cluster: 'mt1'
  });
  var channel = pusher.subscribe("notification");
  channel.bind("PushNotification", function (data) {
    Livewire.emit('notify')
  });


</script>


@livewireScripts
@endsection
