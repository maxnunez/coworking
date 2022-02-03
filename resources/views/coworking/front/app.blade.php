<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
    integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
  <link rel="stylesheet" href="{{ asset('front_page/css/theme.css') }} ">
  <link rel="stylesheet" href="{{ asset('front_page/css/app.css') }}">
  <link rel="stylesheet" href="{{ asset('front_page/css/media-queries.css') }}">
  <link rel="stylesheet" href="{{ asset('front_page/css/animate.css') }}">
  <title>wefu</title>
</head>

<body>
  @include('coworking.front.Template.nav')
  <div class="container">
    @yield('content')
  </div>
  @include('coworking.front.Template.footer')
  <script src="{{ asset('front_page/js/jquery.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('front_page/js/owl.carousel.js') }}"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous">
  </script>
  <script src="{{ asset('front_page/js/wow.js') }}"></script>
  <script type="text/javascript" src="{{ asset('front_page/js/app.js') }}"></script>
</body>

</html>