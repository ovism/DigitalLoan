<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href= "{{ asset("assets/css/bootstrap.min.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/css/owl.carousel.min.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/css/owl.theme.default.min.css") }}">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="{{ asset("assets/css/style.css") }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset("assets/img/smalllogo.png")}}">

    <title>Osit Solutions LTD</title>
</head>

<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="70">


<!-- TOP NAV -->
<div class="top-nav" id="home">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-auto">
                <p> <i class='bx bxs-envelope'></i>info@ositsltd.com</p>
                <p> <i class='bx bxs-phone-call'></i>01988224411</p>
            </div>
            <div class="col-auto social-icons">
                <a href="#"><i class='bx bxl-facebook'></i></a>
                <a href="#"><i class='bx bxl-twitter'></i></a>
                <a href="#"><i class='bx bxl-instagram'></i></a>

            </div>
        </div>
    </div>
</div>


<!-- BOTTOM NAV -->
<nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top">
    <div class="container">
        <a class="navbar-brand" href="#">Osit Solutions LTD</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#about">About</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#reviews">Reviews</a>
                </li>
            </ul>
            <a href="{{route('login')}}"  class="btn btn-brand ms-lg-3">Log In</a>
        </div>
    </div>
</nav>



<!-- SLIDER -->
<div class="owl-carousel owl-theme hero-slider">
    <div class="slide slide1">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center text-white">
                    <h6 class="text-white text-uppercase">Personal Loan</h6>
                    <h1 class="display-3 my-4">Get Loan Online<br />experiances</h1>
                    <a href="#" class="btn btn-brand">Get Started</a>
                    <a href="#" class="btn btn-outline-light ms-3">Our work</a>
                </div>
            </div>
        </div>
    </div>
    <div class="slide slide2">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-10 offset-lg-1 text-white">
                    <h6 class="text-white text-uppercase">SME Loan</h6>
                    <h1 class="display-3 my-4">We Provide Loan For Small Bussiness <br />Professionals</h1>
                    <a href="#" class="btn btn-brand">Get Started</a>
                    <a href="#" class="btn btn-outline-light ms-3">Our work</a>
                </div>
            </div>
        </div>
    </div>
</div>



<!-- Loan card -->
<section>
    <div class="container">
        <div class="row text-center p-4" >
            <div class="col-12">
                <h2>Check Eligibility & Apply</h2>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row p-4">
            <div class="col-md-3">
                <h4 class="text-center"><strong>Personal Loan</strong></h4>
                <hr>
                <div class="profile-card-2"><a href= "{{route('personalloan')}}">
                        <img src="assets/img/loan-01.png" class="img img-responsive"></a>
                    <div class="profile-name">PERSONAL LOAN</div>
                    <div class="profile-username">Personal loan</div>
                    <div class="profile-icons">
                        <a href="#"><i class="fa fa-linkedin"></i></a></div>
                </div>
            </div>
            <div class="col-md-3">
                <h4 class="text-center">SME Loan</h4>
                <hr>
                <div class="profile-card-2">
                    <img src="assets/img/loan2-01.png" class="img img-responsive">
                    <div class="profile-name">SME LOAN</div>
                    <div class="profile-username">SME Loan</div>
                    <div class="profile-icons"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-linkedin"></i></a></div>
                </div>
            </div>
            <div class="col-md-3">
                <h4 class="text-center"><strong>Credit Card</strong></h4>
                <hr>
                <div class="profile-card-2">
                    <img src="assets/img/loan2-01.png" class="img img-responsive">
                    <div class="profile-name">Credit Card</div>
                    <div class="profile-username">credit card</div>
                    <div class="profile-icons"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-linkedin"></i></a></div>
                </div>
            </div>
            <div class="col-md-3">
                <h4 class="text-center">Prize Bond</h4>
                <hr>
                <div class="profile-card-2">
                    <img src="assets/img/loan2-01.png" class="img img-responsive">
                    <div class="profile-name">Prize Bond</div>
                    <div class="profile-username">Prize Bond</div>
                    <div class="profile-icons"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-linkedin"></i></a></div>
                </div>
            </div>

        </div>
    </div>
</section>


<!--OverView -->
<!--<section id="about">

    <div class="container p-5">
        <div class="row justify-content-center">
            <h1>Overview</h1>
            <div class="col-lg-5 py-5">
                <div class="row">


                    <div class="col-12">
                        <div class="info-box">
                            <img src="assets/img/icon6.png" alt="">
                            <div class="ms-4">
                                <h5>Features</h5>
                                <p>Loan amount from BDT 1 lac to BDT 20 lac<br>
                                    Loan tenure 12 to 60 months<br>
                                    No hidden charges<br>
                                    Competitive interest rate</p>

                            </div>
                        </div>
                    </div>
                    <div class="col-12 mt-4">
                        <div class="info-box">
                            <img src="assets/img/icon4.png" alt="">
                            <div class="ms-4">
                                <a href=""><h5>Processing Fee</h5></a>
                                <p> </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 mt-4">
                        <div class="info-box">
                            <img src="assets/img/icon5.png" alt="">
                            <div class="ms-4">
                                <a href=""><h5>Required Documents</h5></a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <img src="assets/img/about.png" alt="">
            </div>
        </div>
    </div>
</section>

<div>
</div>-->




<!-- Calculator -->
<section id="calculator">
    <div class="row">
        <div class="col-12" id="loan_text">
            <h4>Taking a loan? Calculate your EMI</h4>
        </div>
    </div>
    <div class="container p-5" id="emic">
        <div class="row text-center justify-content-center gy-4">
            <div class="col col-lg-2 col-sm-6">
                <label for="inputloanamount" class="form-label"><h6>Loan Amount</h6></label>
                <input type="text" id="loanamount" class="form-control" aria-describedby="loanamountHelpBlock">
            </div>
            <div class="col-lg-2 col-sm-6">
                <label for="inputtenure" class="form-label"><h6>Tenure</h6></label>
                <input type="text" id="inputtenure" class="form-control" aria-describedby="tenureHelpBlock">
            </div>
            <div class="col-lg-2 col-sm-6">
                <label for="inputinterestrate" class="form-label"><h6>Interest Rate</h6></label>
                <input type="text" id="inputinterestrate" class="form-control" aria-describedby="interestrateHelpBlock">
            </div>
            <div class="col-lg-2 col-sm-6" id="">
                <label for="inputresult" class="form-label"><h6>Result</h6></label>
                <input type="text" id="inputresult" class="form-control" aria-describedby="resultHelpBlock">
            </div>
            <div class="col-12 p-3" style="display: none;">
                <button type="button" class="btn btn-success" id="calculatorbtn">Calculate EMI</button>
            </div>
            <div class="col-8 p-3" style="background-color: white;">
                <button type="button" class="btn btn-success" id="calculatorbtn">Calculate EMI</button>
            </div>
        </div>
    </div>
</section>




<section id="services" class="text-center">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="intro">
                    <h6>Our Services</h6>
                    <h1>What We Do?</h1>
                    <p class="mx-auto">Whatever the occasion or requirement, make smart financial choice with Our Bank Personal Loan to fulfill all your dreams, reach to new heights and make your day to day journey of life joyful.</p>
                </div>
            </div>
        </div>
        <div class="row g-4">
            <div class="col-lg-4 col-md-6">
                <div class="service">
                    <img src="assets/img/icon7-01.png" alt="">
                    <h5>BDT 1 Lac - BDT 20 Lac</h5>
                    <p>Loan amount</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service">
                    <img src="assets/img/icon8-01.png" alt="">
                    <h5>12 - 60 months</h5>
                    <p>Loan tenure</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service">
                    <img src="assets/img/icon9-01.png" alt="">
                    <h5>Competitive</h5>
                    <p>Interest rate</p>
                </div>
            </div>
        </div>
    </div>
</section>



<!-- Applicable -->
<!--<section class="applicable" id="applicable_part">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <img src="assets/img/Applicable-01.png" alt="">
            </div>
            <div class="col-lg-5" id="applicable_text" >
                <h2>Eligibility</h2>


                <p id="appli_text"><span class="blink">Hey! want To Know About Your Loan Eligibility</span></p>

                <p>Click the Button below to know about your Loan Eligibility </p>

                <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-brand ms-lg-3">Click Here</a>

            </div>
        </div>
    </div>
</section>-->





<section class="bg-light " id="reviews">

    <div class="owl-theme owl-carousel reviews-slider container">
        <div class="review">
            <div class="person">
                <img src="assets/img/team_1.jpg" alt="">
                <h5>Shamim</h5>
                <small>Bussinessman</small>
            </div>
            <h3>Ally Bank is a one-stop shop for online-only banking customers from coast to coast</h3>
            <div class="stars">
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star'></i>
                <i class="bx bxs-star-half"></i>
            </div>
            <i class='bx bxs-quote-alt-left'></i>
        </div>
        <div class="review">
            <div class="person">
                <img src="assets/img/team_2.jpg" alt="">
                <h5>Niloy</h5>
                <small>Web developer</small>
            </div>
            <h3>Alliant Credit Union is an NCUA-insured credit union based in Chicago that offers deposit accounts with competitive APYs and minimal fees. It offers a highly rated mobile app as well as access to a wide network of surcharge-free ATMs.</h3>
            <div class="stars">
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star'></i>
                <i class="bx bxs-star-half"></i>
            </div>
            <i class='bx bxs-quote-alt-left'></i>
        </div>
        <div class="review">
            <div class="person">
                <img src="assets/img/team_3.jpg" alt="">
                <h5>Rohan</h5>
                <small>Graphics designer</small>
            </div>
            <h3>Transportation Alliance Bank is mostly an online bank that offers deposit accounts for individuals and businesses, as well as commercial loans.</h3>
            <div class="stars">
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star'></i>
                <i class="bx bxs-star-half"></i>
            </div>
            <i class='bx bxs-quote-alt-left'></i>
        </div>
    </div>
</section>




<section class="bg-light" id="">
    <div class="container p-5">
        <div class="row">
            <div class="col-12">
                <div class="intro">
                    <h6>Work</h6>
                    <h1>Online loan Cients</h1>
                    <p class="mx-auto">Our Online Loan customers are happy to apply for loan online and giving reviews. we are happy to serve them also.<p>
                </div>
            </div>
        </div>
    </div>
    <div id="projects-slider" class="owl-theme owl-carousel">
        <div class="project">
            <div class="overlay"></div>
            <img src="assets/img/project1.jpg" alt="">
            <div class="content">
                <h2>Consulting Marketing</h2>
                <h6>Personal Loan</h6>
            </div>
        </div>
        <div class="project">
            <div class="overlay"></div>
            <img src="assets/img/project2.jpg" alt="">
            <div class="content">
                <h2>Consulting Marketing</h2>
                <h6>Bussinessman</h6>
            </div>
        </div>
        <div class="project">
            <div class="overlay"></div>
            <img src="assets/img/project3.jpg" alt="">
            <div class="content">
                <h2>Consulting Marketing</h2>
                <h6>Bussinessman</h6>
            </div>
        </div>
        <div class="project">
            <div class="overlay"></div>
            <img src="assets/img/project4.jpg" alt="">
            <div class="content">
                <h2>Consulting Marketing</h2>
                <h6>Bussinessman</h6>
            </div>
        </div>
        <div class="project">
            <div class="overlay"></div>
            <img src="assets/img/project5.jpg" alt="">
            <div class="content">
                <h2>Consulting Marketing</h2>
                <h6>Bussinessman</h6>
            </div>
        </div>
    </div>
</section>



<footer>
    <div class="footer-top text-center">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 text-center">
                    <h4 class="navbar-brand">Osit Solutions LTD</h4>
                    <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of
                        classical Latin literature from</p>
                    <div class="col-auto social-icons">
                        <a href="#"><i class='bx bxl-facebook'></i></a>
                        <a href="#"><i class='bx bxl-twitter'></i></a>
                        <a href="#"><i class='bx bxl-instagram'></i></a>
                        <a href="#"><i class='bx bxl-pinterest'></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom text-center">
        <p class="mb-0">Copyright@2022. All rights Reserved OSIT Solutions</p>
    </div>
</footer>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="modal-body p-0">
                <div class="container-fluid">
                    <div class="row gy-4">
                        <div class="col-lg-4 col-sm-12 bg-cover"
                             style="background-image: url(img/c2.jpg); min-height:300px;">
                            <div>

                            </div>
                        </div>
                        <div class="col-lg-8">
                            <form class="p-lg-5 col-12 row g-3">
                                <div>
                                    <h1>Login</h1>
                                    <p>Welcome</p>
                                </div>
                                <div class="col-12">
                                    <label for="userName" class="form-label">Email address</label>
                                    <input type="email" class="form-control" placeholder="@example.com" id="userName"
                                           aria-describedby="emailHelp" required="">
                                </div>
                                <div class="col-12">
                                    <label >password</label>
                                    <input type="password"required>
                                </div>

                                <div class="col-12">
                                    <button type="submit" class="btn btn-brand">Login</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<script src="{{asset("assets/js/jquery.min.js")}}"></script>
<script src="{{asset("assets/js/bootstrap.bundle.min.js")}}"></script>
<script src="{{asset("assets/js/owl.carousel.min.js")}}"></script>
<script src="{{asset("assets/js/app.js")}}"></script>
</body>

</html>
