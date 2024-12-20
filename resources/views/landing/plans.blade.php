<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('fonts/icomoon/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('landing/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- Style -->
    <link rel="stylesheet" href="{{ asset('landing/css/Company.css') }}">
    <link rel="stylesheet" href="{{ asset('landing/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('landing/css/nav.css') }}">
    <link rel="stylesheet" href="{{ asset('landing/css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('landing/css/plans.css') }}">

    <title>Yacht Management Platform</title>
</head>

<body>

    <div class="site-mobile-menu">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close mt-3">
                <span class="icon-close2 js-menu-toggle">X</span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div>

    <header class="site-navbar" role="banner">
        <div class="px-3">
            <div class="row align-items-center">
                <div class="col-10 col-xl-2">
                    <h1 class="mb-0 site-logo"><a href="index.html" class="text-white mb-0">
                            <img src="{{asset('landing/images/logo.png')}} " alt="logo">
                        </a></h1>
                </div>
                <div class="col-12 col-md-10 d-none d-xl-block">
                    <nav class="site-navigation position-relative text-right" role="navigation">

                        <ul class="site-menu js-clone-nav mr-auto d-none d-lg-block">
                            <li><a href="{{ route('landing.captain') }}"><span>OWNERS & CAPTAINS</span></a></li>
                            <li><a href="{{ route('landing.comapany-profession') }}"><span>COMPANIES &
                                        PROFESSION</span></a></li>
                            <li><a href="{{ route('landing.surveyor') }}"><span>SURVEYORS</span></a></li>
                            <li><a href="{{ route('landing.plans') }}"><span>PLANS</span></a></li>

                            <li class="btn-group regestration-buttons" role="group" aria-label="Basic example">
                                <button href="" type="button" class="btn  button-lg">
                                    <a href="{{route('login')}}">LOGIN</a>
                                </button>
                                <button type="button" class="btn " style=" background: white; color: #111;">
                                    <a style="text-decoration: none;  " href="{{route('registeration')}}">
                                        GET STARTED
                                    </a>
                                </button>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a
                        href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3">
                            <i class="fas fa-bars"></i>
                        </span></a></div>
            </div>
        </div>
        </div>
    </header>


    <div class="hero pt-5"
        style="background-image: url('landing/images/heroPlans.png'); height: 75vh;">
        <!-- <div class="overlay"></div> -->
        <div class="container pt-5 content">
            <div class="row align-items-center justify-content-center pt-5">
                <div class="col-lg-12 intro text-center">
                    <div class="container mx-auto px-4  text-center">
                        <h3 class="text-uppercase subtitle-hero " style="line-height: 0px;">Plans for everyone
                        </h3>
                        <h1 class=" text-white  " style="font-family:Cormorant SC ; font-size: 48px; letter-spacing: 2px;">Easy to jump in platform
                        </h1>
                        <p class="lead text-gray-300 hero-description" style="font-family: Poppins;
                        font-weight: 400;
                        letter-spacing: 1px;
                        text-align: center;
                        ">Discover all features, prices and tools that will be available for you
                        </p>
                        <div class="mt-5 d-flex flex-column align-items-center">

                        </div>
                        <!-- <button class="text-white py-5 bg-transparent border-0" style="outline: none;">

                            <a href="#down" class="text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor"
                                    class="bi bi-chevron-double-down" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M1.646 6.646a.5.5 0 0 1 .708 0L8 12.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708" />
                                    <path fill-rule="evenodd"
                                        d="M1.646 2.646a.5.5 0 0 1 .708 0L8 8.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708" />
                                </svg>
                            </a>
                        </button> -->


                    </div>

                </div>

            </div>


        </div>

    </div>
    <div class="message-section  ">
        <button onclick="handleAlert()" class="message-div">
            <img data-toggle="popover" data-content="I am happy to help" src="{{asset('landing/images/message.png')}}   ">
        </button>

    </div>
    <!-- section1 -->
    <div class="captain-section1 pt-5 pb-5  ">
        <div class="container position-relative">
            <div class="row align-items-center">
                <div class="col-md-9  mx-auto">
                    <h5 class="sub-title text-uppercase">Owners and Captains centralized hub
                    </h5>
                    <h2 class="big-title">Our platform eliminates the need for endless phone calls,
                        emails, and
                        paperwork to manage your yatch’s maintenance
                        needs.</h2>
                </div>
                <div class="background-lines-cap">
                    <img src="{{asset('landing/images/rightwaves.png')}} " alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- section2 -->
    <p class="button-header-text text-center pb-2 pt-5 ">
        See all available perks as
    </p>

    <div class="perk-as-buttons col-md-8">
        <a href="./captains.html"> <button class="Owners-buttons text-uppercase">Owners & Captains</button></a>
        <a href="./CompniesAndProfessional.html"> <button class="companies-buttons text-uppercase">Companies &
                Professionals</button></a>
        <a href="./Surveyors.html"><button class="surveyor-buttons text-uppercase">Surveyours</button></a>
    </div>
    <!-- <div class="col-md-8 d-flex m-auto small-screen-button   flex-column" style="display: flex; align-items: center;" >
        <a href="./captains.html"> <button class="bg-white  py-2  text-uppercase" style="width: 312px;border: 1px solid #C6D2E7; color: #00365E;">Owners & Captains</button></a>
        <a href="./CompniesAndProfessional.html"> <button class=" bg-white  py-2  text-uppercase" style="width: 312px; border: 1px solid #C6D2E7; color: #00365E; border-top: 0px;" >Companies & Professionals</button></a>
         <a href="./Surveyors.html"><button class="bg-white  py-2 text-uppercase" style="width: 312px; border: 1px solid #C6D2E7; border-top: 0; color: #00365E;" >Surveyours</button></a>
     </div> -->

    <div class="plans-card">
        <div class="col-md-4 border px-0">
            <div class="price-table tbl-wet p-4 ">
                <div class="pt-header">
                    <span class="pt-heading">Forever Free</span>
                    <span class="priceValue">
                        0€
                        <div>No hassle, no worry.</div>
                    </span>
                </div>
                <div>
                    <button class="get-started-btn">
                        <a href="#" style="font-size: 14px; font-weight: 500;" class="btn-wet text-white">Get
                            Started*</a>
                    </button>
                </div>
                <div class="py-3" style="color: #1CBDA0; font-weight: 500; font-size: 14px;">
                    * get a 30 days full access trial
                </div>
                <div class="py-3" style=" font-weight: 500; font-size: 14px;">
                    Best way to test all the feaures and check how our platform can help you to manage
                    your vessel.
                </div>
                <hr />

                <div class="pt-body">

                    <ul>
                        <li class="d-flex align-content-center align-items-center">
                            <img src="{{asset('landing/images/Icon.png')}}  ">
                            <span class="ml-1">
                                Unlimited documents
                            </span>
                        </li>
                        <li class="d-flex align-content-center align-items-center">
                            <img src="{{asset('landing/images/Icon.png')}}">
                            <span class="ml-1">
                                Daily incident reporting
                            </span>
                        </li>
                        <li class="d-flex align-content-center align-items-center">
                            <img src="{{asset('landing/images/Icon.png')}}">
                            <span class="ml-1">
                                Surveyor hiring
                            </span>
                        </li>
                        <li class="d-flex align-content-center align-items-center">
                            <img src="{{asset('landing/images/Icon.png')}}">
                            <span class="ml-1">
                                User verification
                            </span>
                        </li>
                        <li class="d-flex align-content-center align-items-center">
                            <img src="{{asset('landing/images/Icon.png')}}">
                            <span class="ml-1">
                                Up to 4 posts
                            </span>
                        </li>
                        <li class="d-flex align-content-center align-items-center">
                            <img src="{{asset('landing/images/Icon.png')}}">
                            <span class="ml-1">
                                Weekly progress reporting
                            </span>
                        </li>
                        <li class="d-flex align-content-center align-items-center">
                            <img src="{{asset('landing/images/Icon.png')}}">
                            <span class="ml-1">
                                Unlimited Fleet management
                            </span>
                        </li>
                        </li>
                        <li class="d-flex align-content-center align-items-center py-2">
                            <span class="ml-1">
                                *During the trial period you can test all features completely unlocked

                            </span>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-4 px-0 border  ">

            <div class=" px-0 text-uppercase text-center text-white py-1" style="background-color: #5E8BF7;">
                most popular</div>
            <div class="price-table tbl-wet p-4">
                <div class="pt-header">
                    <span class="pt-headingSecond">Membership</span>
                    <span class="priceValueSecond">
                        50€/month
                        <div class="py-3" style="font-size: 14px;">Per metter for each vessel own.
                            Billed annualy</div>
                    </span>
                </div>

                <div>
                    <button class="get-started-btn">
                        <a href="#" class="btn-wet text-white" style="font-size: 14px; font-weight: 500 ;">Start
                            30 days Trial*</a>
                    </button>
                </div>
                <div class="py-3">
                    <span style="font-size: 14px; font-weight: 400;" class="">Manage your vessel with
                        the best features available and access exclusive offers.</span>

                </div>
                <hr />
                <div class="pt-body">
                    <p class="pt-2" style="font-size: 14px; color: #5E8BF7; font-weight: 500;">Include
                        all Free Perks +</p>
                    <ul>
                        <li class="d-flex align-content-center align-items-center">
                            <img src="{{asset('landing/images/Icon.png')}} ">
                            <span class="ml-1">
                                Team management
                            </span>
                        </li>
                        <li class="d-flex align-content-center align-items-center">
                            <img src="{{asset('landing/images/Icon.png')}} ">
                            <span class="ml-1">
                                Access to workplan
                            </span>
                        </li>
                        <li class="d-flex align-content-center align-items-center">
                            <img src="{{asset('landing/images/Icon.png')}} ">
                            <span class="ml-1">
                                Referal link
                            </span>
                        </li>
                        <li class="d-flex align-content-center align-items-center">
                            <img src="{{asset('landing/images/Icon.png')}} ">
                            <span class="ml-1">
                                Access to profiles & reviews
                            </span>
                        </li>
                        <li class="d-flex align-content-center align-items-center">
                            <img src="{{asset('landing/images/Icon.png')}} ">
                            <span class="ml-1">
                                Access companies jobs
                            </span>
                        </li>
                        <li class="d-flex align-content-center align-items-center">
                            <img src="{{asset('landing/images/Icon.png')}} ">
                            <span class="ml-1">
                                Access to ranks
                            </span>
                        </li>
                        </li>
                        <li class="d-flex align-content-center align-items-center py-2">
                            <span class="ml-1">
                                *During the trial period you can test all features completely unlocked
                            </span>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- section3 -->


    <div class="container  plans-table">
        <h3 class="text-center py-5" style="display: flex; align-items: center; justify-content: center; gap: 15px;">

            <span> Compare all plans</span>
            <svg xmlns="http://www.w3.org/2000/svg" style="width: 24; height: 24px;" fill="currentColor"
                class="bi bi-chevron-up" viewBox="0 0 16 16">
                <path fill-rule="evenodd"
                    d="M7.646 4.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1-.708.708L8 5.707l-5.646 5.647a.5.5 0 0 1-.708-.708z" />
            </svg>
        </h3>
        <table class="table table-striped">
            <thead>
                <tr class="">
                    <th scope="col" class="">Company all plans</th>
                    <th scope="col" class="text-center">Free plane </br> Available to all plans</th>
                    <th scope="col" class="text-center">Owners and </br>Captain </th>
                    <th scope="col" class="text-center">Companies & </br>Profissionals</th>
                    <th scope="col">Surveyor</th>

                </tr>
            </thead>
            <tbody>
                <tr>
                    <td scope="row">Fully Unlocked trial period</td>
                    <td class="text-center">Max-4</td>
                    <td class="text-center">Otto</td>
                    <td class="text-center">@mdo</td>
                    <td class="text-center">@mdosa</td>

                </tr>
                <tr>
                    <td scope="row">Job payment retention</td>
                    <td class="text-center">Jacob</td>
                    <td class="text-center"><svg xmlns="http://www.w3.org/2000/svg"
                            class="border rounded-circle p-1 border-success text-success"
                            style="width: 24px; height: 24px;" viewBox="0 0 448 512">
                            <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                            <path
                                d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z" />
                        </svg></td>
                    <td class="text-center">@fat</td>
                    <td class="text-center"><svg xmlns="http://www.w3.org/2000/svg"
                            class="border rounded-circle p-1 border-success text-success"
                            style="width: 24px; height: 24px;"
                            viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                            <path
                                d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z" />
                        </svg></td>

                </tr>
                <tr>
                    <td scope="row">Fully Unlocked trial period</td>
                    <td class="text-center">Max-4</td>
                    <td class="text-center">Otto</td>
                    <td class="text-center">@mdo</td>
                    <td class="text-center"><svg xmlns="http://www.w3.org/2000/svg"
                            class="border rounded-circle p-1 border-success text-success"
                            style="width: 24px; height: 24px;"
                            viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                            <path
                                d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z" />
                        </svg></td>

                </tr>
                <tr>
                    <td scope="row">Fully Unlocked trial period</td>
                    <td class="text-center">Max-4</td>
                    <td class="text-center">Otto</td>
                    <td class="text-center">@mdo</td>
                    <td class="text-center">@mdosa</td>

                </tr>
                <tr>
                    <td scope="row">Fully Unlocked trial period</td>
                    <td class="text-center">Max-4</td>
                    <td class="text-center">Otto</td>
                    <td class="text-center">@mdo</td>
                    <td class="text-center"><svg xmlns="http://www.w3.org/2000/svg"
                            class="border rounded-circle p-1 border-success text-success"
                            style="width: 24px; height: 24px;"
                            viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                            <path
                                d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z" />
                        </svg></td>

                </tr>
                <tr>
                    <td scope="row">Fully Unlocked trial period</td>
                    <td class="text-center">Max-4</td>
                    <td class="text-center">Otto</td>
                    <td class="text-center">@mdo</td>
                    <td class="text-center"><svg xmlns="http://www.w3.org/2000/svg"
                            class="border rounded-circle p-1 border-success text-success"
                            style="width: 24px; height: 24px;"
                            viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                            <path
                                d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z" />
                        </svg></td>

                </tr>
                <tr>
                    <td scope="row">Fully Unlocked trial period</td>
                    <td class="text-center">Max-4</td>
                    <td class="text-center">Otto</td>
                    <td class="text-center">@mdo</td>
                    <td class="text-center"><svg xmlns="http://www.w3.org/2000/svg"
                            class="border rounded-circle p-1 border-success text-success"
                            style="width: 24px; height: 24px;"
                            viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                            <path
                                d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z" />
                        </svg></td>

                </tr>
                <tr>
                    <td scope="row">Fully Unlocked trial period</td>
                    <td class="text-center">Max-4</td>
                    <td class="text-center">Otto</td>
                    <td class="text-center">@mdo</td>
                    <td class="text-center"><svg xmlns="http://www.w3.org/2000/svg"
                            class="border rounded-circle p-1 border-success text-success"
                            style="width: 24px; height: 24px;"
                            viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                            <path
                                d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z" />
                        </svg></td>

                </tr>
                <tr>
                    <td scope="row">Fully Unlocked trial period</td>
                    <td class="text-center">Max-4</td>
                    <td class="text-center">Otto</td>
                    <td class="text-center">@mdo</td>
                    <td class="text-center"><svg xmlns="http://www.w3.org/2000/svg"
                            class="border rounded-circle p-1 border-success text-success"
                            style="width: 24px; height: 24px;"
                            viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                            <path
                                d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z" />
                        </svg></td>

                </tr>
                <tr>
                    <td scope="row">Job payment retention</td>
                    <td class="text-center">Larry</td>
                    <td class="text-center">the Bird</td>
                    <td class="text-center"><svg xmlns="http://www.w3.org/2000/svg"
                            class="border rounded-circle p-1 border-success text-success"
                            style="width: 24px; height: 24px;"
                            viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                            <path
                                d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z" />
                        </svg></td>
                    <td class="text-center">@twitterse</td>

                </tr>
                <tr>
                    <td scope="row">Fully Unlocked trial period</td>
                    <td class="text-center"><svg xmlns="http://www.w3.org/2000/svg"
                            class="border rounded-circle p-1 border-success text-success"
                            style="width: 24px; height: 24px;"
                            viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                            <path
                                d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z" />
                        </svg></td>
                    <td class="text-center">Otto</td>
                    <td class="text-center"><svg xmlns="http://www.w3.org/2000/svg"
                            class="border rounded-circle p-1 border-success text-success"
                            style="width: 24px; height: 24px;"
                            viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                            <path
                                d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z" />
                        </svg></td>
                    <td class="text-center">@mdosa</td>

                </tr>
            </tbody>
        </table>
        <hr />
    </div>
    <!-- section 4 -->

    <div class=" get-unlock">
        <div class=" d-flex  container">
            <div class="col-4 " style="color: #00365E; font-size: 20px; font-weight: 400;">
                Get your plan today and unlock all features
            </div>
            <div class="col-8">
                <div class="  px-0 sectionButtons">
                    <p class="text-center buttonToptext">
                        Free Plane
                    </p>
                    <p class="text-center buttonToptext">
                        Owners &<br />
                        Captains
                    </p>
                    <p class="text-center buttonToptext">
                        Companies &<br /> Professionals
                    </p>
                    <p class="text-center buttonToptext">
                        Surveyours
                    </p>
                </div>
                <div class="  px-0 sectionButtons">

                    <button class="text-uppercase freeplane">get started</button>


                    <button class="text-uppercase freeplane">get started</button>

                    <button class="text-uppercase freeplane ">get started</button>

                    <button class="text-uppercase freeplane">get started</button>
                </div>
            </div>

        </div>
    </div>
    <div class="py-5 mt-3">

        <p class="text-center text-uppercase  " style="font-size: 16px; color: #00365E; font-weight: 500;">
            Loved by companies and Owners
        </p>
        <h3 class="text-center text-uppercase pt-2 featured">
            We got featured on
        </h3>
        <div class="featured-image">
            <img src="{{asset('landing/images/img_logo 1.png')}} ">
            <img src="{{asset('landing/images/Capa_1.png')}}" class="ml-3">
        </div>


    </div>
    <hr />
    <!-- secttion 5 -->
    <div class="py-5">
        <h3 class="featured">
            Frequently asked questions
        </h3>
        <!-- <center> -->
        <div class="container">

<!-- 
            <div id="accordion" class="col-md-8 bg-danger m-auto py-5">
                <div class="card bg-dark border-0" >
                    <button style="outline: none;" class="card-header collapsed border-0 bg-white card-link"
                        data-toggle="collapse" data-target="#collapseOne">

                        <b class="header-title float-left bg-white"
                            style="font-weight: 400; font-size: 20px; color: #5E8BF7;">
                            Can I cancel my subscription at any moment?
                        </b>
                        <i class="fas fa-plus float-right "></i>
                    </button>

                    <div id="collapseOne" class="collapse" data-parent="#accordion">
                        <div class="card-body" style="font-weight: 400; font-size: 16px; color: #00365E;">
                            Computer Science portal
                            for geeks. It contains well written, well

                        </div>
                    </div>
                </div>
                <hr />
                <div class="card border-0">
                    <button style="outline: none;" class="card-header collapsed card-link bg-white border-0"
                        data-toggle="collapse" data-target="#collapseTwo">

                        <b class="header-title float-left" style="font-weight: 400; font-size: 20px; color: #5E8BF7;">
                            What happen to all my posts if i stop paying my subscription?</b>
                        <i class="fas fa-plus float-right "></i>
                    </button>

                    <div id="collapseTwo" class="collapse" data-parent="#accordion">
                        <div class="card-body">
                            GeeksforGeeks is a Computer Science portal
                            for geeks. It contains well written, well
                            thought and well explained computer science
                            and programming articles, quizzes etc.
                        </div>
                    </div>
                </div>
                <hr />


            </div> -->
        </div>
        <!-- </center> -->
    </div>
    <div class="row gap-4    py-5 cards-section"
        style="background-image: url('landing/images/plansimage.jpg'); position: relative;">
        <div class="overlays"></div>
        <div class="col-8  m-auto d-flex  align-content-end">
            <div class="col-8 text-white ">
                <h2 style="font-size: 48px; font-weight: 400;">
                    Unlock your business's full
                    potential with our cutting-edge
                    online platform
                </h2>
                <p class="text-white text-uppercase" style="font-size: 16px; font-weight: 400;">
                    Start today and get 1 month free
                    full access
                </p>

            </div>
            <div class="col-4 mt-2">

                <button class="text-uppercase text-center w-100 border-0 p-3 bg-white"
                    style="font-size: 14px; font-weight: 500;">
                    Create a free account Today
                </button>
                <button
                    class="text-uppercase text-white text-center outline-none border border-white  w-100 p-3 bg-transparent"
                    style="font-size: 14px; font-weight: 500;">
                    Check our plane
                </button>

            </div>
        </div>

    </div>
    <div>
    </div>

    <!-- section6 -->
    <div class="section6">
        <div class="container">
          <div class="d-flex px-2 justify-content-center flex-column flex-md-row " style="gap:30px;">
            <div class="col-md-6">
              <h3 class="sub-title text-uppercase">Be the first to know</h3>
              <h1>Stay up-to-date with the news</h1>
              <form class="contact-form ">
                <input type="email" placeholder="Email*" class="form-control" required>
                <button type="submit" class="  footer-button mt-3 text-uppercase" style="">Subscribe
                  newsletter</button>
              </form>
            </div>
            <div class="col-md-6">
              <img src="{{asset('landing/images/contact-us.png')}} " alt="Image" class="img-fluid">
            </div>
          </div>
        </div>
      </div>




    <footer id="down">
        <div class="footer-section1">
          <div class="container">
            <div class="row">
              <div class="col-12 col-md-6 text-center items-center align-items-center  text-center text-md-left">
                <h3 class="  text-uppercase ">Secured payments & satisfaction</h3>
              </div>
              <div class="col-12 col-md-6 text-center text-md-right">
                <img src="{{asset('landing/images/payments.png')}} " alt="Visa">
              </div>
            </div>
          </div>
        </div>
        <div class="footer-section2">
          <div class="container">
            <div class="row align-items-center footer-section-responsive">
              <div class="col-lg-4 text-center ">
                <p class="text-center text-lg-left">Copyright © 2024 WORLD YACHT REFIT</p>
              </div>
              <div class="col-lg-8 text-center footer-links">
                <a href="#">Terms and Conditions</a>
                <a href="#">Privacy Policy</a>
                <a href="{{route('landing.contact')}}">Contact Us</a>
                <a href="#">Cookies Policy</a>
              </div>
            </div>
          </div>
        </div>
      </footer>

      <script src="{{ asset('landing/js/jquery-3.3.1.min.js') }}"></script>
      <script>
          $(document).ready(function () {
              $('[data-toggle="popover"]').popover();
          });
      </script>
      <script src="{{ asset('landing/js/popper.min.js') }}"></script>
      <script src="{{ asset('landing/js/bootstrap.min.js') }}"></script>
      <script src="{{ asset('landing/js/jquery.sticky.js') }}"></script>
      <script src="{{ asset('landing/js/main.js') }}"></script>
      <script src="{{ asset('landing/js/owl.carousel.min.js') }}"></script>
      <script src="{{ asset('landing/js/my-carousel.js') }}" type="text/javascript"></script>
      <script>
          $('.card-header').click(function () {
              $(this).find('i').toggleClass('fas fa-plus fas fa-minus');
          });
      </script>



</body>

</html>