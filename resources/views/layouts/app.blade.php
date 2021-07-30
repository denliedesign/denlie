<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name="description" content="Denlie Design Makes Custom Web Designs from Scratch. Fast, SEO, Mobile-Friendly. We Specialize in Dance Website Design. Email customdenlie@gmail.com to Improve Your Online Presence Now!">

    <meta property="og:title" content="Denlie Design - Websites for Small Businesses">
    <meta property="og:description" content="Denlie Design Makes Custom Web Designs from Scratch. Fast, SEO, Mobile-Friendly. We Specialize in Dance Website Design. Email customdenlie@gmail.com to Improve Your Online Presence Now!">
    <meta property="og:image" content="https://denliedesign.com/images/kazarellis.jpg">
    <meta property="og:url" content="https://denliedesign.com">

    <link href="{{ asset('/css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Goldman:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Damion&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Big+Shoulders+Text&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">

    <title>@yield('title', 'Denlie Design - Small Business & Dance Website Design')</title>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-134589403-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-134589403-1');
    </script>


</head>
<body>

{{--@include('header')--}}
@yield('content')

<script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/gsap.min.js" defer></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/ScrollToPlugin.min.js" defer></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/ScrollTrigger.min.js" defer></script>
<script src="/js/script.js" defer></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>
