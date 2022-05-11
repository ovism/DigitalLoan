<!doctype html>
<html lang="en">
<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- css -->
    <link rel="stylesheet" href="{{asset('assets/css/loanStyle.css')}}">

    <title>Loan Apply From</title>
</head>
<body>
<form action="{{route('loan-apply/form')}}" method="post" enctype="multipart/form-data">
    @csrf
<section class="h-100 h-custom gradient-custom-2">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12">
                <div class="card card-registration card-registration-2" style="border-radius: 15px;">
                    <div class="card-body p-0">
                        <div class="row g-0">
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <h3 class="fw-normal mb-5" style="color: #4835d4;">Registration From</h3>

                                    <div class="row">
                                        <div class="col-md-6 mb-4 pb-2">

                                            <div class="form-outline">
                                                <input type="text"  name="firstName" id="form3Examplev2" class="form-control form-control-lg" />
                                                <label class="form-label" for="form3Examplev2">First name</label>
                                            </div>

                                        </div>
                                        <div class="col-md-6 mb-4 pb-2">

                                            <div class="form-outline">
                                                <input type="text" id="form3Examplev3" name="lastName" class="form-control form-control-lg" />
                                                <label class="form-label" for="form3Examplev3">Last name</label>
                                            </div>

                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col-md-6 mb-4 pb-2">

                                            <div class="form-outline">
                                                <input type="text" id="form3Examplev2" name="contact" class="form-control form-control-lg" />
                                                <label class="form-label" for="form3Examplev2">Contact No</label>
                                            </div>

                                        </div>
                                        <div class="col-md-6 mb-4 pb-2">

                                            <div class="form-outline">
                                                <input type="text" id="form3Examplev3" class="form-control form-control-lg" />
                                                <label class="form-label" for="form3Examplev3">Emali</label>
                                            </div>

                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col-md-6 mb-4 ">

                                            <div class="form-outline">
                                                <input type="text" id="form3Examplev2" class="form-control form-control-lg" placeholder="DD/MM/YYYY"/>
                                                <label class="form-label" for="form3Examplev2" >Date Of Birth</label>
                                            </div>

                                        </div>
                                        <div class="col-md-6 mb-4">

                                            <select class="form-select pb-3" >
                                                <option selected>Place of Birth</option>
                                                <option value="1">Dhaka</option>
                                                <option value="2">Khulna</option>
                                                <option value="3">Chittagong</option>
                                                <option value="4">Barisal</option>
                                                <option value="5">Rajshahi</option>
                                                <option value="6">Sylhet</option>
                                                <option value="7">Rangpur</option>
                                                <option value="8">Mymensingh</option>
                                            </select>

                                        </div>
                                    </div>

                                    <div class="containar pb-3">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                            <label class="form-check-label" for="inlineRadio1">Male</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                            <label class="form-check-label" for="inlineRadio2">Female</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">
                                            <label class="form-check-label" for="inlineRadio3">Other</label>
                                        </div>
                                    </div>




                                    <div class="row">
                                        <div class="col-md-6 mb-4 pb-2 mb-md-0 pb-md-0">

                                            <div class="form-outline">
                                                <input type="text" id="form3Examplev5" class="form-control form-control-lg" />
                                                <label class="form-label" for="form3Examplev5">Company Name:</label>
                                            </div>

                                        </div>
                                        <div class="col-md-6">

                                            <select class="form-select pb-3">
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
                                            </select>

                                        </div>
                                    </div>


                                    <div class="form-outline form-white pt-3">
{{--                                        <input type="file" class="input-field" name="image_filepath" >--}}
                                        <input class="form-control" name="image_filepath" type="file" id="formFile">
                                        <label class="form-label" for="form3Examplea7">Upload your photo</label>
                                    </div>

                                    <div class="form-outline form-white pt-3">
                                        <input class="form-control" type="file" id="formFile">
                                        <label class="form-label" for="form3Examplea7">Upload your bank statement</label>
                                    </div>

                                    <div class="form-outline form-white pt-3">
                                        <input class="form-control" type="file" id="formFile">
                                        <label class="form-label" for="form3Examplea7">Upload your salary statement</label>
                                    </div>

                                </div>
                            </div>

                            <div class="col-lg-6 bg-indigo text-white">
                                <div class="p-5">
                                    <!-- <h3 class="fw-normal mb-5">Contact Details</h3> -->

                                    <div class="mb-4 pb-2">
                                        <div class="form-outline form-white">
                                            <input type="text" id="form3Examplea2" class="form-control form-control-lg" />
                                            <label class="form-label" for="form3Examplea2">Address</label>
                                        </div>
                                    </div>

                                    <div class="mb-4 pb-2">
                                        <div class="form-outline form-white">
                                            <input type="text" id="form3Examplea3" class="form-control form-control-lg" />
                                            <label class="form-label" for="form3Examplea3">Permanent Address</label>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-5 mb-4 pb-2">

                                            <div class="form-outline form-white">
                                                <select class="form-select pb-3" >
                                                    <option value="1">Dhaka</option>
                                                    <option value="2">Khulna</option>
                                                    <option value="3">Chittagong</option>
                                                    <option value="4">Barisal</option>
                                                    <option value="5">Rajshahi</option>
                                                    <option value="6">Sylhet</option>
                                                    <option value="7">Rangpur</option>
                                                    <option value="8">Mymensingh</option>
                                                </select>
                                                <label class="form-label" for="form3Examplea3">State</label>
                                            </div>

                                        </div>
                                        <div class="col-md-7 mb-4 pb-2">

                                            <div class="form-outline form-white">
                                                <input type="text" id="form3Examplea5" class="form-control form-control-lg" />
                                                <label class="form-label" for="form3Examplea5">Zip</label>
                                            </div>

                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col-md-5 mb-4 pb-2">

                                            <div class="form-outline form-white">
                                                <input type="text" id="form3Examplea7" class="form-control form-control-lg" />
                                                <label class="form-label" for="form3Examplea7">Nid/Passport/riving licence (Number)</label>
                                            </div>

                                        </div>
                                        <div class="col-md-7 mb-4 pb-2">

                                            <div class="form-outline form-white">
                                                <div class="form-outline form-white">
                                                    <select class="form-select pb-3" >
                                                        <option value="1">NID</option>
                                                        <option value="2">Passport number</option>
                                                        <option value="3">Driving Licence number</option>
                                                    </select>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="mb-4">
                                            <div class="form-outline form-white">
                                                <input type="text" id="form3Examplea9" class="form-control form-control-lg" />
                                                <label class="form-label" for="form3Examplea9">Your Email</label>
                                            </div>
                                        </div>

                                        <div class="mb-4">
                                            <div class="form-outline form-white">
                                                <input type="text" id="form3Examplea9" class="form-control form-control-lg" />
                                                <label class="form-label" for="form3Examplea9">Occupation</label>
                                            </div>
                                        </div>

                                        <div class="mb-4">
                                            <div class="form-outline form-white">
                                                <input type="text" id="form3Examplea9" class="form-control form-control-lg "  placeholder="1 year / 2 years / 3 years" />
                                                <label class="form-label" for="form3Examplea9">Work Experience</label>
                                            </div>
                                        </div>

                                        <div class="form-check d-flex justify-content-start mb-4 pb-3">
                                            <input class="form-check-input me-3" type="checkbox" value="" id="form2Example3c" />
                                            <label class="form-check-label text-white" for="form2Example3">
                                                I do accept the <a href="#!" class="text-white"><u>Terms and Conditions</u></a> of your
                                                site.
                                            </label>
                                        </div>



                                        <button type="submit" class="btn btn-light btn-lg"
                                                data-mdb-ripple-color="dark">Register</button>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
</form>
<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
-->
</body>
</html>
