<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content=" ">
    <meta name="author" content=" ">

    <meta property="og:title" content=" " />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ url('') }}" />
    <meta property="og:image" content="{{ asset('img/logo.png') }}" />

    <link rel="icon" type="image/x-icon" href="{{ asset('img/favicon.ico') }}" />
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ asset('img/apple-icon-72x72.png') }}">
    <link rel="apple-touch-icon-precomposed" href="{{ asset('img/apple-icon-57x57.png') }}">

    <title> Title </title>

    <link href="{{ asset('css/style.css') }}" rel="stylesheet" />

    @inertiaHead

</head>

<body>
    {{-- <div class="loader">
        <div class="text-center">
            <div class="loader-image-animation">
                <img src="{{ asset('img/loading.svg')}}" alt="">
            </div>
        </div>
    </div> --}}
    @inertia
    <script src="{{ asset('js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ asset('js/manifest.js') }}"></script>
    <script src="{{ asset('js/vendor.js') }}"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
</body>

</html>
