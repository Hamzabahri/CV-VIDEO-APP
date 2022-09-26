
<!doctype html>
<html lang="en">
<head>
    <title>CVVIDEO &mdash;  offre d'emploi en tunisie</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link rel="stylesheet" href="{{asset("css/custom-bs.css")}}">
    <link rel="stylesheet" href="{{asset("css/jquery.fancybox.min.css")}}">
    <link rel="stylesheet" href="{{asset("css/bootstrap-select.min.css")}}">
    <link rel="stylesheet" href="{{asset("fonts/icomoon/style.css")}}">
    <link rel="stylesheet" href="{{asset("fonts/line-icons/style.css")}}">
    <link rel="stylesheet" href="{{asset("css/owl.carousel.min.css")}}">
    <link rel="stylesheet" href="{{asset("css/animate.min.css")}}">
    <link rel="stylesheet" href="{{asset("css/quill.snow.css")}}">
    <link rel="stylesheet" href="{{asset("https://cdn.jsdelivr.net/gh/LikaloLLC/tourguide.js@0.2.0/tourguide.css")}}">

    <!-- Add IntroJs styles-->
    <link rel="stylesheet" href="{{asset("css/tour-default.css")}}" type="text/css">


    <!-- MAIN CSS -->
    <link rel="stylesheet" href="{{asset("css/style.css")}}">

    <style>
        body {
            background-image: url({{asset("image/imgg.jpg")}}) !important;
        }
    </style>
</head>
<body id="top">

<div id="overlayer"></div>
<div class="loader">
    <div class="spinner-border text-primary" role="status">
        <span class="sr-only">Loading...</span>
    </div>
</div>


<div class="site-wrap">
    <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close mt-3">
                <span class="icon-close2 js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->
    <!-- NAVBAR -->
    <header class="site-navbar mt-3 site-header">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="site-logo col-6"><a href={{ route('home') }}><p> <img src="{{asset('images/logocv.png')}}" style="width: 150px; height: 150px;}" alt="Image"></p></a></div>

                <nav class="mx-auto site-navigation">
                    <ul class="site-menu js-clone-nav d-xl-block ml-0 pl-0">
                        <li><a href={{ route('home') }} class="nav-link">Accueil</a></li>
                        <li><a href="{{route('desc')}}">Entreprise</a></li>
                        
                        @if(Auth::guard('entreprise')->check())



                        <li class="has-children">
                            <a href="{{route("toutoffre")}}">Offre d'emploi</a>
                            <ul class="dropdown">
                                <li><a href="{{route("toutoffre")}}">Offre d'emploi</a></li>
                                <li ><a href="{{route("offre")}}">Déposer un offre d'emploi</a></li>
                            </ul>
                        </li>
                        @else
                            <li><a href="{{route("toutoffre")}}">Offre d'emploi</a></li>
                        @endif
                        @if(Auth::guard('condidat')->check())
                        <li ><a href="{{route('cvteque')}}">CV-théque</a></li>
                            <li><a href="{{route('deposercv')}}">Déposer un CV</a></li>
                        @elseif(Auth::guard('entreprise')->check())
                            <li><a href="{{route('cvteque')}}">CV-théque</a></li>
                            
                            @else
                            <li><a href="{{route('guide')}}">Guide dépot CV</a></li>
                            @endif


                            <!--  <li class="d-lg-none"><a href="post-job.html"><span class="mr-2">+</span> Post a Job</a></li>-->


                    </ul>
                </nav>

                <div class="right-cta-menu text-right d-flex aligin-items-center col-6">
                    <div class="ml-auto" style="display:flex">
                        @if(Auth::guard('condidat')->check())
                            <a href="{{route('profile')}}" class="btn btn-primary border-width-2 d-none d-lg-inline-block ">
                                <span class="mr-2 icon-lock_outline"></span>Profil</a>

                            <a href="{{route('logout')}}" class="btn btn-primary border-width-2 d-none d-lg-inline-block">
                                <span class="mr-2 icon-lock_outline"></span>Déconnexion</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>

                    @elseif(Auth::guard('entreprise')->check())
                        <a href="{{route('eprofile')}}" class="btn btn-primary border-width-2 d-none d-lg-inline-block ">
                            <span class="mr-2 icon-lock_outline"></span>Profil</a>

                            <a href="{{route('logout')}}" class="btn btn-primary border-width-2 d-none d-lg-inline-block">
                                <span class="mr-2 icon-lock_outline"></span>Déconnexion</a>



                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>

                    @else
                            <div class="dropdown">
                                <a href="" class="btn btn-secondary dropdown-toggle " type="button" id="dropdownMenuButton"
                                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="mr-2 icon-lock_outline"></span>Connexion</a>


                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="{{ route("log1") }}">Condidat</a>
                                    <a class="dropdown-item" href={{ route('log2') }}>Employeur</a>

                                </div>
                            </div>
                            <div class="dropdown">
                                <a href="" class="btn btn-secondary dropdown-toggle " type="button" id="dropdownMenuButton"
                                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="mr-2 icon-lock_outline"></span>Inscription</a>


                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="{{ route('inscri') }}">Condidat</a>
                                    <a class="dropdown-item" href={{ route('inscri2') }}>Employeur</a>

                                </div>
                            </div>
                @endif

                </div>
                    <a href="#" class="site-menu-toggle js-menu-toggle d-inline-block d-xl-none mt-lg-2 ml-3"><span class="icon-menu h3 m-0 p-0 mt-2"></span></a>

                </div>

            </div>
        </div>
    </header>
    <!-- HOME -->

    @yield('filter')

    <div class="row">


        <div class="message">
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

        </div>
    </div>


    @yield("content")


    @yield('partenaire')


    <footer class="site-footer">

        <a href="#top" class="smoothscroll scroll-top">
            <span class="icon-keyboard_arrow_up"></span>
        </a>

        <div class="container">
            <div class="row mb-5">
                <div class="col-6 col-md-3 mb-4 mb-md-0">
                    <h3>EMPLOYEUR</h3>
                    <ul class="list-unstyled">
                        <li><a href="{{route("offre")}}">Publier une annonce</a></li>
                        <li><a href="{{route('cvteque')}}">Trouver un CV</a></li>
                        <li><a href="{{ route("log2") }}">Connexion</a></li>
                        
                    </ul>
                </div>
                <div class="col-6 col-md-3 mb-4 mb-md-0">
                    <h3>CHERCHEUR D'EMPLOI</h3>
                    <ul class="list-unstyled">
                        <li><a href="{{route("toutoffre")}}">Trouver un emploi</a></li>
                        <li><a href="{{ route("deposercv") }}">Publier un CV</a></li>
                        <li><a href="{{ route("log1") }}">Connexion</a></li>
                        
                    </ul>
                </div>
                <div class="col-6 col-md-3 mb-4 mb-md-0">
                    <h3>Support</h3>
                    <ul class="list-unstyled">
                        <li><a href="#">Termes & Conditions</a></li>
                        
                    </ul>
                </div>
                <div class="col-6 col-md-3 mb-4 mb-md-0">
                    <h3>Contact Us</h3>
                    <div class="footer-social">
                        <a href="https://www.facebook.com"><span class="icon-facebook"></span></a>
                        <a href="https://www.twitter.com"><span class="icon-twitter"></span></a>
                        <a href="https://www.instagram.com"><span class="icon-instagram"></span></a>
                        <a href="https://www.facebook.com"><span class="icon-linkedin"></span></a>
                    </div>
                </div>
            </div>

            <div class="row text-center">
                <div class="col-12">
                    <p class="copyright"><small>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved 
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></small></p>
                </div>
            </div>
        </div>
    </footer>


</div>

<!-- SCRIPTS -->
<script src="{{asset("js/jquery.min.js")}}"></script>
<script src="{{asset("js/bootstrap.bundle.min.js")}}"></script>
<script src="{{asset("https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js")}}"></script>
<script src="{{asset("https://unpkg.com/filepond-plugin-file-encode/dist/filepond-plugin-file-encode.min.js")}}"></script>

<script src="{{asset("js/isotope.pkgd.min.js")}}"></script>
<script src="{{asset("js/stickyfill.min.js")}}"></script>
<script src="{{asset("js/jquery.fancybox.min.js")}}"></script>
<script src="{{asset("js/jquery.easing.1.3.js")}}"></script>

<script src="{{asset("js/jquery.waypoints.min.js")}}"></script>
<script src="{{asset("js/jquery.animateNumber.min.js")}}"></script>
<script src="{{asset("js/owl.carousel.min.js")}}"></script>

<script src="{{asset("js/bootstrap-select.min.js")}}"></script>

<script src="{{asset("js/custom.js")}}"></script>

<script src="{{asset("js/tour.js")}}"></script>
<script src="{{asset("https://cdn.jsdelivr.net/gh/LikaloLLC/tourguide.js@0.2.0/tourguide.min.js")}}"></script>
<script src="{{asset("https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js")}}"></script>


@yield("script")


</body>
</html>
