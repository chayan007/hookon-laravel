
<!DOCTYPE html>
<html >
<head>
  <!-- Site made with Mobirise Website Builder v4.7.2, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="_token" content="{{ csrf_token() }}">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="{{asset('assets/ExtraAssets/hookon.png')}}" />  <meta name="description" content="">
      <title>@yield('page_name')</title>
  <link rel="stylesheet" href="{{ asset('assets/web/assets/mobirise-icons/mobirise-icons.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/web/assets/mobirise-icons-bold/mobirise-icons-bold.css') }} ">
  <!--<link rel="stylesheet" href="{{ asset('assets/tether/tether.min.css') }}">-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="{{ asset('assets/dropdown/css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/socicon/css/styles.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/theme/css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/mobirise/css/mbr-additional.css') }}" type="text/css">
  <link rel="stylesheet" href="{{ asset('assets/ExtraAssets/owl.carousel.min.css') }}"/>
  <link rel="stylesheet" href="{{ asset('assets/style.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/ExtraAssets/owl.theme.default.min.css') }}">


  <link rel="stylesheet" href="{{asset('bower_components/font-awesome/css/font-awesome.min.css')}}">
  <link rel="stylesheet" href="{{asset('bower_components/Ionicons/css/ionicons.min.css')}}">
  <link rel="stylesheet" href="{{asset('dist/css/AdminLTE.min.css')}}">
  <link rel="stylesheet" href="{{asset('dist/css/skins/skin-red.min.css')}}">
  <link rel="stylesheet" href="{{asset('bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">
  <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.js"></script>

</head>
<body class="skin-red layout-top-nav">

    <div class="wrapper">

        @include('layouts.header')
        <div class="content-wrapper">
          @yield('content')
       </div>

    </div>


      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
      <script src="{{ asset('assets/ExtraAssets/owl.carousel.min.js') }}"></script>

      <!-- AdminLTE App -->
      <script src="{{asset('dist/js/adminlte.min.js')}}"></script>

      <!-- My scripts---->
      <script src="{{asset('assets/main.js')}}"></script>
</body>
</html>
