<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!--scripts -->

     <!-- Bootstrap core CSS -->
  <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/css/font-awesome.min.css')}}" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="{{asset('assets/css/added_style.css')}}" rel="stylesheet">
</head>
<body>
    <div id="app">
      {{--  @include('layouts.header') --}}

       @yield('content')
       @include('layouts.footer')
    </div>
    <script src="{{asset('assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('js/app.js')}}" defer ></script>
    <script>
        $(document).ready(function(){
          $('.switch-tologin-modal').on('click',function(){
            $('#register-modal').modal('hide');
            $('#login-modal').modal('show');
          })
          $('.switch-toregister-modal').on('click',function(){
            $('#login-modal').modal('hide');
            $('#register-modal').modal('show');
          })
        })
      </script>
</body>
</html>
