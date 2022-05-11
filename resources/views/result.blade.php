<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset("assets/css/bootstrap.min.css")}}">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="{{ asset("assets/css/styleR.css") }}">
    <title>Osit Solutions LTD</title>
</head>

<body>

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
                    <a class="nav-link" href="../index.html">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#about">about</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#reviews">reviews</a>
                </li>
            </ul>

        </div>
    </div>
</nav>

<section>
    <h1>Loan Eligibility</h1>
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Monthly EMI </h5>
                        <p class="card-text">{{$emi}}</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Interest Rate</h5>
                        <p class="card-text">{{$interestRate}}</p>
                    </div>
                </div>
            </div>
            <div class="container pt-5 pb-5">
                <div class="card text-center">


                    <div class="card-body">
                        <h5 class="card-title">Loan Amount</h5>
                        <p class="card-text">{{$loanAmount}}</p>
                    </div>
            </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>Do You Want To Apply For Loan</h2>
                    </div>
                </div>

                <div class="d-grid gap-2">
                   <a href="{{ route('loan-apply')}}"> <button type="button"  class="btn btn-success">Click Here</button> </a>
                </div>
            </div>
        </div>
    </div>

</section>




</body>

</html>
