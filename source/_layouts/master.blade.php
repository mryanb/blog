<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <link rel="stylesheet" href="/assets/css/main.css">
        <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">
            
    </head>
    <body>
        <div style="display: none;" class="" id="stickyHeader">
            <nav class="navbar d-none d-md-block navbar-expand-lg navbar-light bg-light topbar border-bottom py-3">
                <div class="container">
                    <div class="d-block m-auto m-md-0">
                        <div class="dropdown top-dropdown pr-0 pr-md-4 border-right float-left">
                            <span>
                                        <img src="assets/img/language-switcher-icon.svg" width="16" />
                                    </span>
                            <button class="btn btn-light dropdown-toggle bg-light border-light text-dark" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                English
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">English</a>
                                <a class="dropdown-item" href="#">English</a>
                                <a class="dropdown-item" href="#">English</a>
                            </div>
                        </div>
                        <div class="dropdown top-dropdown ml-2 ml-md-3 float-left">
                            <button class="btn btn-light dropdown-toggle bg-light border-light text-dark" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Sales : +99 999 9999
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">Sales : +99 999 9999</a>
                                <a class="dropdown-item" href="#">Sales : +99 999 9999</a>
                                <a class="dropdown-item" href="#">Sales : +99 999 9999</a>
                            </div>
                        </div>
                    </div>
                    <div class="d-block d-sm-flex align-items-center m-auto m-md-0">
                        <form class="form-inline my-2 my-lg-0 position-relative search-form">
                            <input class="form-control mr-sm-2 pl-5" type="search" placeholder="Search" aria-label="Search">
                            <button class="p-0 bg-white border-0 position-absolute">
                                <img src="assets/img/search_icon.png" width="18" />
                                    </button>
                        </form>
                        <a href="#" class="btn btn-outline-primary my-2 my-sm-0 bg-white">Login</a>
                        <a href="#" class="btn btn-primary my-2 my-sm-0 text-white ml-3">Get HubSpot free</a>
                    </div>
                </div>
            </nav>
        </div>
        <header>
            <nav class="navbar main-nav navbar-expand-lg navbar-light bg-white py-4">
                <div class="container">
                    <div>
                        <!-- <a class="navbar-brand" href="#">
                            <img src="assets/img/HSLogo_color.svg" />
                        </a> -->
                    </div>
                    <div>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse bg-white" id="navbarSupportedContent">
                            <ul class="navbar-nav mr-auto">
                                @if ($page->getPath() != '')
                                <li class="nav-item mx-3 {{ $page->active('index') }}">
                                    <a class="nav-link font-weight-bold" href="{{ $page->baseUrl }}/">Home
                                        <span class="sr-only">(current)</span>
                                    </a>
                                </li>
                                @endif
                                <li class="nav-item mx-3 {{ $page->active('about') }}">
                                    <a class="nav-link font-weight-bold" href="{{ $page->baseUrl }}/about">About</a>
                                </li>
                                <!-- <li class="nav-item dropdown mx-3">
                                    <a class="nav-link dropdown-toggle font-weight-bold" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                        Resources
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                    </div>
                                </li> -->
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
        </header>
        @yield('body')
        <section class="hsg-footer__bottom py-5 text-white">
            <div class="container border-top">
                <div class="row pt-5">
                    <div class="col-12 col-sm-6 order-2 order-md-1 text-center text-md-left">
                        <!-- <a href="#">
                            <img src="" alt="Logo">
                        </a> -->
                        <p class="my-2">Copyright © 2018 Ryan Bantz</p>
                    </div>
                    <div class="col-12 col-sm-6 order-1 order-md-2">
                        <ul class="list-style-inline m-0 p-0 text-center text-md-right">
                            <li>
                                <a href="#">Legal Stuff</a>
                            </li>

                            <li>
                                <a href="#">Privacy Policy</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    </body>
    <script type="text/javascript" src="/assets/js/main.js"></script>
</html>
