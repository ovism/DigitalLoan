<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Personal Loan</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="colorlib.com">

    <!-- MATERIAL DESIGN ICONIC FONT -->
    <link rel="stylesheet" href="{{asset('assets/fonts/material-design-iconic-font/css/material-design-iconic-font.css')}}">

    <!-- DATE-PICKER -->
    <link rel="stylesheet" href="{{asset('assets/vendor/date-picker/css/datepicker.min.css')}}">

    <!-- STYLE CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/mainStyle.css')}}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">

{{--    <!-- STYLE CSS -->--}}
{{--    <link rel="stylesheet" href="{{ asset("assets/css/mainStyle.css") }}">--}}
{{--    <!-- Bootstrap CSS -->--}}
{{--    <link rel="stylesheet" href="{{ asset("assets/css/bootstrap.min.css) }}">--}}

</head>
<body>
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
                    <a class="nav-link" href="#about">0000</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="wrapper">
    <div class="image-holder">
        <img src="{{asset('assets/img/form-wizard.png')}}" alt="">
    </div>
{{--    <form action="">--}}

       <form action="{{route('eligible/form')}}" method="post" enctype="multipart/form-data" id="" class="">
            @csrf
        <div class="form-header">

            <h3>Personal Loan Eligibility</h3>
        </div>
        <div id="wizard">
            <!-- SECTION 1 -->
            <h4></h4>
            <section>
                <div class="form-row" style="margin-bottom: 26px;">
                    <label for="">
                        Have you taken a loan before?
                    </label>
                    <div class="form-holder">
                        <select name="" id="" class="form-control">
                            <option value="no" class="option">No</option>
                            <option value="yes" class="option">Yes</option>
                        </select>
                        <i class="zmdi zmdi-caret-down"></i>
                    </div>
                </div>
                <div class="form-row">
                    <label for="">
                        Your Profession
                    </label>
                    <div class="form-holder">
                        <select name="profession" id="" class="form-control">
                            <option value="salaried" class="option">Salaried</option>
                            <option value="landLord" class="option">Land Lord</option>
                        </select>
                        <i class="zmdi zmdi-caret-down"></i>
                    </div>
                </div>
                <div class="form-row">
                    <label for="">
                        Your Residence Type
                    </label>
                    <div class="form-holder" >
                        <select name="residence" id="" class="form-control">
                            <option value="SelfOwnedHome" class="option">Self-Owned Homea</option>
                            <option value="RentedHome" class="option">Rented Home</option>
                            <option value="CompanyProvided" class="option">CompanyProvided</option>
                        </select>
                        <i class="zmdi zmdi-caret-down"></i>
                    </div>
                </div>
                <div class="form-row">
                    <label for="">
                        Loan Type
                    </label>
                    <div class="form-holder">
                        <select name="" id="" class="form-control">
                            <option value="" selected disabled>Select Term</option>
                            <option value="term 1" class="option">Personal Loan</option>
                        </select>
                        <i class="zmdi zmdi-caret-down"></i>
                    </div>
                </div>
            </section>

            <!-- SECTION 2 -->
            <h4></h4>
            <section>
                <div class="form-row">
                    <label for="">
                        Date of Birth:
                    </label>
                    <div class="form-holder">
                        <input type="text" class="form-control datepicker-here" data-language='en' data-date-format="dd - mm - yyyy" id="dp1" required>
                    </div>
                </div>
                <div class="form-row">
                    <label for="">
                        Location of Birth:
                    </label>
                    <div class="form-holder">
                        <select name="" id="" class="form-control">
                            <option value="dhaka" class="option">Dhaka</option>
                            <option value="chattogram" class="option">Chattogram</option>
                            <option value="khulna" class="option">Khulna</option>
                            <option value="rajshahi" class="option">Rajshahi</option>
                            <option value="sylhet" class="option">Sylhet</option>
                            <option value="barishal" class="option">Barishal</option>
                            <option value="rangpur" class="option">Rangpur</option>
                            <option value="mymensing" class="option">Mymensing</option>
                        </select>
                        <i class="zmdi zmdi-caret-down"></i>
                    </div>
                </div>
                <div class="form-row">
                    <label for="">
                        Your Email:
                    </label>
                    <div class="form-holder">
                        <input type="text" name="email" class="form-control" required>
                    </div>
                </div>
                <div class="form-row" style="margin-bottom: 3.4vh">
                    <label for="">
                        Phone Number:
                    </label>
                    <div class="form-holder">
                        <input type="text" class="form-control" required>
                    </div>
                </div>
                <div class="form-row" style="margin-bottom: 50px;">
                    <label for="">
                        Gender:
                    </label>
                    <div class="form-holder">
                        <div class="checkbox-circle">
                            <label class="male">
                                <input type="radio" name="gender" value="male" checked required> Male<br>
                                <span class="checkmark"></span>
                            </label>
                            <label class="female">
                                <input type="radio" name="gender" value="female" required> Female<br>
                                <span class="checkmark"></span>
                            </label>
                            <label>
                                <input type="radio" name="gender" value="transgender" required>Transgender<br>
                                <span class="checkmark"></span>
                            </label>
                        </div>
                    </div>
                </div>
            </section>

            <!-- SECTION 3 -->
            <h4></h4>
            <section>
                <div class="form-row">
                    <label for="">
                        Company Name:
                    </label>
                    <div class="form-holder">
                        <input type="text" class="form-control" placeholder="Start Typing Here" required>
                    </div>
                </div>
                <div class="form-row">
                    <label for="">
                        Company Type:
                    </label>
                    <div class="form-holder">
                        <select name="" id="" class="form-control">
                            <option value="" selected disabled>Selec Your Company Type</option>
                            <option value="school&college" class="option">School & College</option>
                            <option value="nationaluniversity" class="option">National University</option>
                            <option value="cadetcollege" class="option">Cadet College</option>
                            <option value="englishmediumschool" class="option">English Medium School</option>
                            <option value="PrivateUniversity" class="option">Private University</option>
                            <option value="publicuniversity" class="option">Public University</option>
                            <option value="publicmedical collegehospital" class="option">Public Medical College & Hospital</option>
                            <option value="privatemedicalcollege&hospital" class="option">Private Medical College & Hospital</option>
                            <option value="hospital" class="option">Hospital</option>
                            <option value="hospital" class="option">Government</option>
                            <option value="semigovernmentl" class="option">Semi Government</option>
                            <option value="autonomous" class="option">Autonomous</option>
                            <option value="other" class="option">Other</option>
                            <option value="bank" class="option">Bank</option>
                            <option value="financialinstitution" class="option">Financial Institution</option>
                            <option value="insurancecompany" class="option">Insurance Company</option>
                            <option value="investment&securitiescompany" class="option">Investment & Securities Company</option>
                            <option value="investment&securitiescompany" class="option">Investment & Securities Company</option>
                            <option value="assetmanagementco./brokeragehouse" class="option">Asset Management Co./Brokerage House</option>
                            <option value="ngo" class="option">NGO</option>
                            <option value="multinationalcompany" class="option">Multinational Company</option>
                            <option value="telecommunicationcompany" class="option">Telecommunication Company</option>
                            <option value="pharmaceuticals" class="option">Pharmaceuticals</option>
                            <option value="rmg" class="option">RMG</option>
                            <option value="garmentsbuyinghouse" class="option">Garments Buying House</option>
                            <option value="realestatecompany" class="option">Real Estate Company</option>
                            <option value="itcompany" class="option">IT Company</option>
                            <option value="internetserviceprovidercompany" class="option">Internet Service Provider Company</option>
                            <option value="embassy" class="option">Embassy</option>
                            <option value="newspaper" class="option">Newspaper</option>
                            <option value="tvchannel" class="option">TV Channel</option>
                            <option value="airlines" class="option">Airlines</option>
                            <option value="club" class="option">Club</option>
                            <option value="food&beveragecompany" class="option">Food & Beverage Company</option>
                            <option value="cementcompany" class="option">Cement Company</option>
                            <option value="tour&travalagenc" class="option">Tour & Traval Agency</option>
                            <option value="feedcompany" class="option">Feed Company</option>
                            <option value="paintscompany" class="option">Paints Company</option>
                            <option value="furniture" class="option">Furniture</option>
                            <option value="solarcompany" class="option">Solar Company</option>
                            <option value="hotel" class="option">Hotel</option>
                            <option value="shippingindustry" class="option">Shipping Industry</option>
                            <option value="interiordesigncompany" class="option">Interior Design Company</option>
                            <option value="consultancyfirm" class="option">Consultancy Firm</option>
                            <option value="charteredacountantfirm" class="option">Chartered Acountant Firm</option>
                            <option value="unorganization" class="option">UN Organization</option>
                            <option value="advertisingagency" class="option">Advertising Agency</option>
                            <option value="Iinternationalorganization" class="option">International Organization</option>
                            <option value="foreignngo" class="option">Foreign NGO</option>
                            <option value="army" class="option">Army</option>
                            <option value="navy" class="option">Navy</option>
                            <option value="airforce" class="option">Air Force</option>
                            <option value="police" class="option">Police</option>
                        </select>
                        <i class="zmdi zmdi-caret-down"></i>
                    </div>
                </div>

                <div class="form-row">
                    <label for="">
                        Your Job Status:
                    </label>
                    <div class="form-holder">
                        <select name="" id="" class="form-control">
                            <option value="" selected disabled>Select Job Status</option>
                            <option value="permanent" class="option">Permanent</option>
                            <option value="contractual" class="option">Contractual</option>
                            <option value="prodationary" class="option">prodationary</option>
                        </select>
                        <i class="zmdi zmdi-caret-down"></i>
                    </div>
                </div>

                <div class="form-row" style="margin-bottom: 38px">
                    <label for="">
                        Job Experience (Current)
                    </label>
                    <div class="form-holder">
                        <select name="" id="" class="form-control">
                            <option value="" selected disabled>0 Year</option>
                            <option value="1Year" class="option">1 Year</option>
                            <option value="2Years" class="option">2 Years</option>
                            <option value="3Years" class="option">3 Years</option>
                            <option value="4Years" class="option">4 Years</option>
                            <option value="5Years" class="option">5 Years</option>
                            <option value="6Years" class="option">6 Years</option>
                            <option value="7Years" class="option">7 Years</option>
                            <option value="8Years" class="option">8 Years</option>
                            <option value="9Years" class="option">9 Years</option>
                            <option value="10Years" class="option">10 Years</option>
                            <option value="11Years" class="option">11 Years</option>
                            <option value="12Years" class="option">12Years</option>
                            <option value="13Years" class="option">13 Years</option>
                            <option value="14Years" class="option">14 Years</option>
                            <option value="15Years" class="option">15 Years</option>
                            <option value="16Years" class="option">16 Years</option>
                            <option value="17Years" class="option">17 Years</option>
                            <option value="18Years" class="option">18 Years</option>
                            <option value="19Years" class="option">19 Years</option>
                            <option value="20Years" class="option">20 Years</option>
                            <option value="21Years" class="option">21 Years</option>
                            <option value="22Years" class="option">22 Years</option>
                            <option value="23Years" class="option">23 Years</option>
                            <option value="24Years" class="option">24 Years</option>
                            <option value="25Years" class="option">25 Years</option>
                            <option value="26Years" class="option">26 Years</option>
                            <option value="27Years" class="option">27 Years</option>
                            <option value="28Years" class="option">28 Years</option>
                            <option value="29Years" class="option">29 Years</option>
                            <option value="30Years" class="option">30 Years</option>
                        </select>
                        <i class="zmdi zmdi-caret-down"></i>
                    </div>
                </div>
                <div class="form-row">
                    <label for="">
                        Job Experience (Total)
                    </label>
                    <div class="form-holder">
                        <select name="" id="" class="form-control">
                            <option value="" selected disabled>0 Year</option>
                            <option value="1Year" class="option">1 Year</option>
                            <option value="2Years" class="option">2 Years</option>
                            <option value="3Years" class="option">3 Years</option>
                            <option value="4Years" class="option">4 Years</option>
                            <option value="5Years" class="option">5 Years</option>
                            <option value="6Years" class="option">6 Years</option>
                            <option value="7Years" class="option">7 Years</option>
                            <option value="8Years" class="option">8 Years</option>
                            <option value="9Years" class="option">9 Years</option>
                            <option value="10Years" class="option">10 Years</option>
                            <option value="11Years" class="option">11 Years</option>
                            <option value="12Years" class="option">12Years</option>
                            <option value="13Years" class="option">13 Years</option>
                            <option value="14Years" class="option">14 Years</option>
                            <option value="15Years" class="option">15 Years</option>
                            <option value="16Years" class="option">16 Years</option>
                            <option value="17Years" class="option">17 Years</option>
                            <option value="18Years" class="option">18 Years</option>
                            <option value="19Years" class="option">19 Years</option>
                            <option value="20Years" class="option">20 Years</option>
                            <option value="21Years" class="option">21 Years</option>
                            <option value="22Years" class="option">22 Years</option>
                            <option value="23Years" class="option">23 Years</option>
                            <option value="24Years" class="option">24 Years</option>
                            <option value="25Years" class="option">25 Years</option>
                            <option value="26Years" class="option">26 Years</option>
                            <option value="27Years" class="option">27 Years</option>
                            <option value="28Years" class="option">28 Years</option>
                            <option value="29Years" class="option">29 Years</option>
                            <option value="30Years" class="option">30 Years</option>
                        </select>
                        <i class="zmdi zmdi-caret-down"></i>
                    </div>
                </div>
                <div class="form-row">
                    <label for="">
                        Bank Name:
                    </label>
                    <div class="form-holder">
                        <input type="text" class="form-control" placeholder="Write Down Your Bank Name" required>
                    </div>
                </div>
                <div class="form-row">
                    <label for="">
                    </label>
                    <div class="form-holder">
                        <input type="text" class="form-control" placeholder="Enter Take Home Bank Salary (BDT)" required>
                    </div>
                </div>
                <div class="form-row">
                    <label for="">
                    </label>
                    <div class="form-holder">
                        <select name="" id="" class="form-control">
                            <option value="" selected disabled>7 Months Deposited</option>
                            <option value="1time" class="option">1 Time</option>
                            <option value="2times" class="option">2 Times</option>
                            <option value="3times" class="option">3 Times</option>
                            <option value="4times" class="option">4 Times</option>
                            <option value="5times" class="option">5 Times</option>
                            <option value="6times" class="option">6 Times</option>
                            <option value="7times" class="option">7 Times</option>
                        </select>
                        <i class="zmdi zmdi-caret-down"></i>
                    </div>
                </div>
                <div class="form-row">
                    <label for="">
                    </label>
                    <div class="form-holder">
                        <input type="text" class="form-control" placeholder="Enter Amount (BDT)" required>
                        <p>asdasdasd</p>
                    </div>
                </div>

                <div class="checkbox-circle" style="margin-bottom: 48px;">
                    <label>
                        <input type="checkbox" checked required>I agree all statement in Terms & Conditions
                        <span class="checkmark"></span>
                    </label>
                </div>
            </section>

        </div>
           <button type="submit">test</button>
    </form>
</div>

<script src="{{asset('assets/js/jquery-3.3.1.min.js')}}"></script>

<!-- JQUERY STEP -->
<script src= "{{asset('assets/js/jquery.steps.js')}}"></script>

<!-- DATE-PICKER -->
<script src="{{asset('assets/vendor/date-picker/js/datepicker.js')}}"></script>
<script src="{{asset('assets/vendor/date-picker/js/datepicker.en.js')}}"></script>

<script src="{{asset('assets/js/main.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>


<!-- Template created and distributed by Colorlib -->
</body>
</html>
