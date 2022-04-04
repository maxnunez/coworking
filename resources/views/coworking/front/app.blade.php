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
    <link href="{{ asset('multiselect/multi.css') }}" rel="stylesheet">
    <link href="{{ asset('multiselect/theme.css') }}" rel="stylesheet">
    <script src="https://kit.fontawesome.com/5f6286de45.js" crossorigin="anonymous"></script>
    <title>WEFU | PARTNERS</title>
</head>

<body>
    @include('coworking.front.Template.nav')
        @yield('content')
    @include('coworking.front.Template.footer')

    <script src="{{ asset('front_page/js/jquery.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/masonry/4.2.2/masonry.pkgd.min.js"
        integrity="sha512-JRlcvSZAXT8+5SQQAvklXGJuxXTouyq8oIMaYERZQasB8SBDHZaUbeASsJWpk0UUrf89DP3/aefPPrlMR1h1yQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://kit.fontawesome.com/5f6286de45.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="{{ asset('front_page/js/owl.carousel.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous">
    </script>
    <script src="{{ asset('front_page/js/wow.js') }}"></script>
     <script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
     <script src="{{ asset('multiselect/multi.js') }}"></script>

<script type="text/javascript">
    $(document).ready(function () {
        $('#select-picker').multiSelect({
            keepOrder: true,
            selectableHeader: "<div class='custom-header'>Lista de Categorias</div>",
            selectionHeader: "<div class='custom-header'>Seleccionadas</div>",

        });
         $('.ckeditor').ckeditor();
    });

</script>

</body>

</html>
