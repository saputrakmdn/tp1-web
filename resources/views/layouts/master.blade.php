<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta name="description" content=""/>
    <meta name="author" content=""/>
    <title>Pro Driving Center - Kursus mobil terbaik</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="{{asset('template/assets/favicon.ico')}}"/>
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css"/>
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet"
          type="text/css"/>
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{asset('template/css/styles.css')}}" rel="stylesheet"/>
</head>
<body id="page-top">
<!-- Navigation-->
@include('layouts.header')
{{--content--}}
@yield('content')
{{--footer--}}
@include('layouts.footer')

@include('layouts.modals.car-matic')
@include('layouts.modals.car-manual')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->
<script src="{{asset('template/js/scripts.js')}}"></script>
<script>
    var myCarousel = document.querySelector('#recipeCarousel')
    var carousel = new bootstrap.Carousel(myCarousel, {
        interval: 2000
    });

    let items = document.querySelectorAll('.carousel .carousel-item')

    items.forEach((el) => {
        const minPerSlide = 4
        let next = el.nextElementSibling
        for (var i=1; i<minPerSlide; i++) {
            if (!next) {
                // wrap carousel by using first child
                next = items[0]
            }
            let cloneChild = next.cloneNode(true)
            el.appendChild(cloneChild.children[0])
            next = next.nextElementSibling
        }
    });

</script>
</body>
</html>
