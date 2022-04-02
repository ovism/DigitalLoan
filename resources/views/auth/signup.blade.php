<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Main css -->
    <link rel="stylesheet" href= "{{ asset("assets/css/authStyle.css") }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset("assets/img/smalllogo.png")}}">
    <title>Signup</title>
</head>
<body>
<div class="main">

    <!-- Sign up form -->
    <section class="signup">
        <div class="container">
            <div class="signup-content">
                <div class="signup-form">
                    <h2 class="form-title">Sign up</h2>
                    <form action="{{ route('register') }}"  method="post" id="register"  class="register-form" >
                        @csrf
                        <div class="form-group">
                            <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                            <input type="text" name="name" id="name" placeholder="Your Name"/>
                        </div>
                        @error('name')
                            <span class="text-danger">
                            {{ $message }}
                            </span>
                        @enderror

                        <div class="form-group">
                            <label for="email"><i class="zmdi zmdi-email"></i></label>
                            <input type="email" name="email" id="email" placeholder="Your Email"/>
                        </div>
                        @error('email')
                        <span class="text-danger">
                            {{ $message }}
                            </span>
                        @enderror

                        <div class="form-group">
                            <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                            <input type="password" name="password" id="password" placeholder="Password"/>
                        </div>
                        @error('password')
                        <span class="text-danger">
                            {{ $message }}
                            </span>
                        @enderror

                        <div class="form-group">
                            <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                            <input type="password" name="password_confirmation" id="password-confirmation" placeholder="Repeat your password"/>
                        </div>
                        @error('password-confirmation')
                        <span class="text-danger">
                            {{ $message }}
                            </span>
                        @enderror

                        <div class="form-group">
                            <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                            <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>
                        </div>
                        @error('name')
                        <span class="text-danger">
                            {{ "please agrre term and condition" }}
                            </span>
                        @enderror
                        <div class="form-group form-button">
                            <input type="submit" name="signup" id="signup" class="form-submit" value="Register"/>
                        </div>
                    </form>
                </div>
                <div class="signup-image">
                    <figure><img src="assets/img/signup-image.jpg" alt="sing up image"></figure>
                    <a href="{{route('login')}}" class="signup-image-link">I am already member</a>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
