<!DOCTYPE html>
<html lang="en-US" dir="ltr" class="dark chrome windows fontawesome-i2svg-active fontawesome-i2svg-complete">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>MyCms</title>


    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('../myCms/assets/img/favicons/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32"
        href="{{ asset('../myCms/assets/img/favicons/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16"
        href="{{ asset('../myCms/assets/img/favicons/favicon-16x16.png') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('../myCms/assets/img/favicons/favicon.ico') }}">
    <link rel="manifest" href="{{ asset('../myCms/assets/img/favicons/manifest.json') }}">
    <meta name="msapplication-TileImage" content="{{ asset('../myCms/assets/img/favicons/mstile-150x150.png') }}">
    <meta name="theme-color" content="#ffffff">
    <script src="{{ asset('../myCms/assets/js/config.js') }}"></script>
    <script src="{{ asset('../myCms/vendors/overlayscrollbars/OverlayScrollbars.min.js') }}"></script>

    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700%7cPoppins:300,400,500,600,700,800,900&amp;display=swap"
        rel="stylesheet">
    <link href="{{ asset('../myCms/vendors/overlayscrollbars/OverlayScrollbars.min.css') }}" rel="stylesheet">
    <link href="{{ asset('../myCms/assets/css/theme.min.css') }}" rel="stylesheet" id="style-default">
    <link href="{{ asset('../myCms/assets/css/user.min.css') }}" rel="stylesheet" id="user-style-default">
    <!--    Stylesheets-->
    @routes
    @vite()
</head>

<body>
    @inertia

    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script src="{{ asset('../myCms/vendors/popper/popper.min.js') }}"></script>
    <script src="{{ asset('../myCms/vendors/bootstrap/bootstrap.min.js') }}"></script>
    <script src="{{ asset('../myCms/vendors/anchorjs/anchor.min.js') }}"></script>
    <script src="{{ asset('../myCms/vendors/is/is.min.js') }}"></script>
    <script src="{{ asset('../myCms/vendors/fontawesome/all.min.js') }}"></script>
    <script src="{{ asset('../myCms/vendors/lodash/lodash.min.js') }}"></script>
    <script src="{{ asset('https://polyfill.io/v3/polyfill.min.js?features=window.scroll') }}"></script>
    <script src="{{ asset('../myCms/vendors/list.js/list.min.js') }}"></script>
    <script src="{{ asset('../myCms/assets/js/theme.js') }}"></script>
    <script src="{{ asset('../myCms/vendors/tinymce/tinymce.min.js') }}"></script>
</body>

</html>
