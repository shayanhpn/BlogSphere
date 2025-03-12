<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8" />
    <title>Blogge | Personal Blog Site</title>

    <!--Meta For No Index-->
    <meta name="robots" content="noindex, Nofollow, Noimageindex">

    <!-- mobile responsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

    <!-- Theme Stylesheet -->
    <link href="{{asset('blog/css/style.css')}}" rel="stylesheet" />

    <!--Favicon-->
    <link rel="shortcut icon" href="{{asset('blog/images/favicon.svg')}}" type="image/x-icon" />
    <link rel="icon" href="{{asset('/blog/images/favicon.svg')}}" type="image/x-icon" />
</head>

<body>

<!-- Navbar Start -->
<nav class="main-nav navbar navbar-expand-lg">
    <div class="container">
        <!-- Logo -->
        <a class="navbar-brand" href="index.html">
            <img class="logo-main" src="images/logo.svg" alt="logo" />
        </a>
        <!-- Toogle Button -->
        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#mainNav">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <div class="collapse navbar-collapse nav-list" id="mainNav">
            <!-- Navigation Links -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.html">Home </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.html">About </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.html">Contact</a>
                </li>
            </ul>
            <!-- Social Link -->
            <ul class="main-nav-social">
                <li>
                    <a href="#"><i class="fa fa-facebook"></i></a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-instagram"></i></a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- Navbar End -->

{{$slot}}

<section class="footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 mx-auto text-center">
                <div class="footer-logo">
                    <img src="images/logo.svg" alt="logo" />
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 mx-auto">
                <div class="footer-nav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="index.html">Home </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.html">About </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.html">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 mx-auto">
                <div class="sociale-icon">
                    <ul>
                        <li>
                            <a href="#"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="copy-right">
                    <p>© Copyright <span id="copyrightYear"></span> - All Rights Reserved by <a href="https://staticmania.com/" target="_blank">StaticMania</a> Distributed By <a href="https://themewagon.com/" target="blank">ThemeWagon</a></p>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC9rV6yesIygoVKTD6QLf_iCa9eiIIHqZ0&libraries=geometry">
</script>
<!-- Vendor JS -->
<script src="{{asset('blog/vendor/jQuery/jquery.min.js')}}"></script>
<script src="{{asset('blog/vendor/bootstrap/bootstrap.min.js')}}"></script>
<script src="{{asset('blog/vendor/slick/slick.min.js')}}"></script>
<script src="{{asset('blog/vendor/g-map/gmap.js')}}"></script>
<!-- Main JS -->
<script src="js/script.js"></script>
</body>
</html>
