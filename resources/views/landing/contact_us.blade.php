 <!doctype html>
 <html lang="en">


 <head>
     <!-- Required meta tags -->
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

     <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">

     <link rel="stylesheet" href="fonts/icomoon/style.css">

     <link rel="stylesheet" href="css/owl.carousel.min.css">

     <link rel="stylesheet" href="{{ asset('landing/fonts/icomoon/style.css') }}">

     <!-- Owl Carousel CSS -->
     <link rel="stylesheet" href="{{ asset('landing/css/owl.carousel.min.css') }}">

     <!-- Bootstrap CSS from assets folder -->
     <link rel="stylesheet" href="{{ asset('landing/css/bootstrap.min.css') }}">

     <!-- Bootstrap Map File -->
     <link rel="stylesheet" href="{{ asset('landing/css/bootstrap.min.css.map') }}">


     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
         integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
         crossorigin="anonymous" referrerpolicy="no-referrer" />
     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link
         href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
         rel="stylesheet">
     <link
         href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
         rel="stylesheet">
     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=Cormorant+SC:wght@300;400;500;600;700&display=swap"
         rel="stylesheet">

     <!-- Style -->
     <link rel="stylesheet" href="{{ asset('landing/css/style.css') }}">
     <link rel="stylesheet" href="{{ asset('landing/css/captains.css') }}">
     <link rel="stylesheet" href="{{ asset('landing/css/nav.css') }}">


     <title>
         Yacht Management Platform
     </title>
 </head>

 <body style="font-family: Poppins;">
    
    
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
                            <img src="{{ asset('landing/images/logo.png') }}" alt="logo">
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

     <div class="hero pt-5 hero-hieght" style="background-image: url('landing/images/contact.png');">
         <div class="overlay"></div>

         <div class="container py-5 content">
             <div class="row align-items-center justify-content-center pt-5">
                 <div class="col-lg-8 intro text-center">
                     <div class="container mx-auto px-4 py-20 text-center">
                         <h2 class="text-uppercase  subtitle-hero">Do you have any questions?</h2>
                         <h1 class="py-3 display-4 hero-title text-uppercase "
                             style="font-family: Cormorant SC; font-size: 48px;">contact us
                         </h1>
                         <p class="lead subtitle-hero" style="line-height: 0px;">Check also our FAQ’s below</p>

                     </div>
                 </div>
             </div>
         </div>
         <div class="message-section">
             <button onclick="handleAlert()" class="message-div">
                 <img data-toggle="popover" data-content="I am happy to help" src="{{asset('landing/images/message.png')}}">
             </button>

         </div>
     </div>

     <!-- section1 -->
     <div class="captain-section1 position-relative">
         <div class="container ">
             <div class="row align-items-center">
                 <div class="col-md-12">
                     <h5 class="sub-title pt-5" style="color: #00365E;">Yacht Maintenance Made Simple: Your
                         One-Stop Solution</h5>
                     <h2 class="big-title" style="color: #00365E;font-family: Cormorant Garamond;">Let your voice
                         reach us!</h2>
                 </div>
                 <div class="background-lines-cap">
                     <img src="{{asset('landing/images/rightwaves.png')}}  " alt="">
                 </div>
                 <div class="background-lines-cap-left">
                     <img src="{{asset('landing/images/contact-left.png')}}" alt="">
                 </div>
             </div>
         </div>
     </div>

     <!-- section2 -->
     <div class="bg-gray-100  section2">
         <div class="container container-section2">

             <form class="col-lg-7 m-auto">
                 <div class="form-group">
                     <input type="text" class="form-control" id="inputAddress" placeholder="First Name *">
                 </div>
                 <div class="form-group">
                     <input type="text" class="form-control" id="inputAddress" placeholder="Last Name *">
                 </div>
                 <div class="form-group">
                     <input type="text" class="form-control" id="inputAddress2" placeholder="Phone No *">
                 </div>
                 <div class="form-group">
                     <input type="text" class="form-control" id="inputAddress2" placeholder="Email *">
                 </div>
                 <div class="form-group">
                     <input type="text" class="form-control" id="inputAddress2" placeholder="Phone No">
                 </div>
                 <div class="form-group">
                     <input type="text" class="form-control" id="inputAddress2" placeholder="Company Name">
                 </div>
                 <div class="form-group">
                     <select id="inputState" class="form-control">
                         <option selected>I am a</option>
                         <option>...1</option>
                         <option>...2</option>
                         <option>...3</option>

                     </select>
                 </div>
                 <div class="form-group">
                     <select id="inputState" class="form-control">
                         <option selected>Where did you hear about WorldYachtRefit platform?</option>
                         <option>...1</option>
                         <option>...2</option>
                         <option>...3</option>

                     </select>
                 </div>
                 <div class="form-group">
                     <textarea cols="20" rows="5" type="text" class="form-control" id="inputAddress2"
                         placeholder="Tell us your thoughts"></textarea>
                     <label class=" text-sm-left py-2" style="color: #9CAFD1; font-size: 14px; font-weight: 400;">0
                         of 3000 max characters.</label>

                 </div>
                 <div class="form-group">
                     <input type="radio" aria-label="Radio button for following text input"> <label
                         class="text-gray text-sm-left" style="color: #00365E;">
                         I authorize the processing of my personal data for commercial purposes.

                     </label>
                     <p class="" style="font-size: 13px; letter-spacing: 1px;">By submitting my information,
                         I confirm that I have read and understood the WorldYachtrefit Privacy policy</p>

                 </div>

                 <button type="submit" class="btn btn-primary px-4"
                     style="background-color: #5E8BF7;border-radius: 1px;"><a href="./contact-delivered.html"
                         style="color: white; text-decoration: none;">Submit</a></button>
             </form>
         </div>
     </div>
     <div class="col-md-12 m-auto  py-5 text-center border-top">

         <div class="col-md-7 m-auto  py-5 text-center ">
             <h5 class="sub-title text-uppercase">Some questions that our customer have</h5>
             <h2 class="big-title" style="font-family: Cormorant Garamond;">Frequently asked questions</h2>
             <div class=" d-flex justify-content-center flex-column flex-md-row py-4">
                 <a href="./captains.html" style="color: black;"> <button class="contact-btn">OWNERS &
                         CAPTAINS</button></a>
                 <a href="./CompniesAndProfessional.html" style="color: black;"><button
                         class="contact-btn">PROFESSIONALS</button></a>
                 <a href="./Surveyors.html" style="color: black;"> <button class="contact-btn">SURVEYORS</button></a>
             </div>
             <div class="container">


                 <!-- <div id="accordion" class=" m-auto py-5">
                        <div class="card border-0">
                            <button style="outline: none;" class="card-header collapsed border-0 bg-white card-link"
                                data-toggle="collapse" data-target="#collapseOne">
    
                                <b class="header-title float-left bg-white"
                                    style="font-weight: 400; font-size: 16px; color: #5E8BF7;">
                                    Can I create an account as freelancer?
                                </b>
                                <i class="fas fa-plus float-right "></i>
                            </button>
    
                            <div id="collapseOne" class="collapse" data-parent="#accordion">
                                <div class="card-body  text-left" style="font-weight: 400; font-size: 14px; color: #00365E;">
                                    Computer Science portal
                                    for geeks. It contains well written, well
    
                                </div>
                            </div>
                        </div>
                        <hr />
                        <div class="card border-0">
                            <button style="outline: none;" class="card-header collapsed card-link bg-white border-0"
                                data-toggle="collapse" data-target="#collapseTwo">
    
                                <b class="header-title float-left"
                                    style="font-weight: 400; font-size: 16px; color: #5E8BF7;">
                                    Do I need to pay before accept a job</b>
                                <i class="fas fa-plus float-right "></i>
                            </button>
    
                            <div id="collapseTwo" class="collapse" data-parent="#accordion">
                                <div class="card-body py-0 text-left " style="font-weight: 400; font-size: 14px; color: #00365E;">
                                    GeeksforGeeks is a Computer Science portal
                                    for geeks. It contains well written, well
                                    thought and well explained computer science
                                    and programming articles, quizzes etc.
                                </div>
                            </div>
                        </div>
                        <hr/>
                        <div class="card border-0">
                            <button style="outline: none;" class="card-header collapsed card-link bg-white border-0"
                                data-toggle="collapse" data-target="#collapseThree">
    
                                <b class="header-title float-left"
                                    style="font-weight: 400; font-size: 16px; color: #5E8BF7;">
                        Will I have problems with the contract that I signed?
                    </b>
                                <i class="fas fa-plus float-right "></i>
                            </button>
    
                            <div id="collapseThree" class="collapse" data-parent="#accordion">
                                <div class="card-body py-0 text-left " style="font-weight: 400; font-size: 14px; color: #00365E;">
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
         </div>
     </div>
     <!-- SECTION3 -->
     <div class="section5 big-section py-5" style="background-image: url(landing/images/contact-below.png);">
         <div class="overlay"></div>
         <div class="container">
             <h2 class="section-title text-center text-uppercase" style="font-family: Cormorant SC;">Register today
                 and discover the simplicity,
                 efficiency, and peace of mind that comes
                 with our online platform.</h2>
             <div class=" col-xl-4 m-auto buttons-cta py-4">
                 <a href="./AccountSelection.html" class="btn btn-primary border d-block text-uppercase">Create
                     Free Account</a>
                 <a href="./plans.html"
                     class="btn btn-outline-primary border border-top-0 d-block text-uppercase">Check Our Plans</a>
             </div>
             <div class="text-center mt-4">
                 <p class="follow-us text-uppercase">Follow us on</p>
                 <div class="social-icons">
                     <!-- Insert your social media icons here -->
                     <i class="fab fa-facebook"></i>
                     <i class="fab fa-twitter"></i>
                     <i class="fab fa-instagram"></i>
                 </div>
             </div>
         </div>
     </div>

     <!-- section4 -->
     <div class="section6">
         <div class="container">
             <div class="row">
                 <div class="col-md-6">
                     <h5 class="sub-title">Be the first to know</h5>
                     <h2 class="title" style="font-family: Cormorant Garamond; color: #00365E;">Stay up-to-date
                         with the news</h2>
                     <form class="contact-form">
                         <input type="email" placeholder="Email*" class="form-control" required>
                         <button type="submit" class="btn btn-primary mt-3 text-uppercase">Subscribe
                             newsletter</button>
                     </form>
                 </div>
                 <div class="col-md-6">
                     <img src="{{asset('landing/images/contact-us.png')}} " alt="Image" class="img-fluid">
                 </div>
             </div>
         </div>
     </div>
     <!-- footer -->

     <footer>
         <div class="footer-section1">
             <div class="container">
                 <div class="row align-items-center">
                     <div class="col-md-6">
                         <p class="text-left sub-title">Secured payments & satisfaction</p>
                     </div>
                     <div class="col-md-6 text-right">
                         <img src="{{asset('landing/images/payments.png')}}  " alt="Visa">

                         <!-- Add more icons as needed -->
                     </div>
                 </div>
             </div>
         </div>
         <div class="footer-section2">
             <div class="container">
                 <div class="row align-items-center">
                     <div class="col-md-4">
                         <p class="text-left">Copyright © 2024 WORLD YACHT REFIT</p>
                     </div>
                     <div class="col-md-8 text-right">
                         <a href="#">Terms and Conditions</a>
                         <a href="#">Privacy Policy</a>
                         <a href="{{route('landing.contact')}}">Contact Us</a>
                         <a href="#">Cookies Policy</a>
                         <!-- Add more links as needed -->
                     </div>
                 </div>
             </div>
         </div>
     </footer>

     <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>




     <script src="{{ asset('landing/js/jquery-3.3.1.min.js') }}"></script>



     <script>
         $(document).ready(function() {
             $('[data-toggle="popover"]').popover();
         });
     </script>
     <script src="{{ asset('landing/js/popper.min.js') }}"></script>
     <script src="{{ asset('landing/js/bootstrap.min.js') }}"></script>
     <script src="{{ asset('landing/js/jquery.sticky.js') }}"></script>
     <script src="{{ asset('landing/js/main.js') }}"></script>
     <script src="{{ asset('landing/js/owl.carousel.min.js') }}"></script>
     <script src="{{ asset('landing/js/my-carousel.js') }}" type="text/javascript"></script>


 </body>

 </html>
