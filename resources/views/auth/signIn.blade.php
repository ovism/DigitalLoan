<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Main css -->
    <link rel="stylesheet" href= "{{ asset("assets/css/authStyle.css") }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset("assets/img/smalllogo.png")}}">
    <title>Login</title>
</head>
<body>
<div class="main">

    <!-- Sing in  Form -->
    <section class="sign-in">
        <div class="container">
            <div class="signin-content">
                <div class="signin-image">
                    <figure><img src="assets/img/signin-image.jpg" alt="sing up image"></figure>
                    <a href="{{route('register')}}" methods="get" class="signup-image-link">Create an account</a>
                </div>

                <div class="signin-form">
                    <h2 class="form-title">Sign In</h2>
                    <form action="{{ route('login') }}" name="login" id="login" method="POST" class="register-form"  id="login-form">
                        @csrf
                        <div class="form-group">
                            <label for="your_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                            <input type="text" name="email" id="email" value="{{ old('email')}}" placeholder="Your Email"/>
                        </div>
                        @error('email')
                            <span class="text-danger">
                            {{ $message }}
                            </span>
                        @enderror


                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Example select</label>
                            <select class="form-control" name="exampleFormControlSelect1" id="exampleFormControlSelect1">
                                <option>OFFICER</option>
                                <option>CUSTOMER</option>
                                </select>
                        </div>

                        <div class="form-group">
                            <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                            <input type="password" id="password" name="password" placeholder="Password"/>
                        </div>
                        @error('password')
                        <span class="text-danger">
                            {{ $message }}
                        </span>
                        @enderror


                        <div class="form-group">
                            <input type="checkbox" name="remember-me" id="remember-me" class="agree-term" />
                            <label for="remember-me" class="label-agree-term"><span><span></span></span>Remember me</label>
                        </div>
                        <div class="form-group form-button">
                            <input type="submit" name="signin" id="signin" class="form-submit" value="Log in"/>
                        </div>
                    </form>
                    <div class="social-login">
                        <span class="social-label">Or login with</span>
                        <ul class="socials">
                            <li><a href="#"><i class="display-flex-center zmdi zmdi-facebook"></i></a></li>
                            <li><a href="#"><i class="display-flex-center zmdi zmdi-twitter"></i></a></li>
                            <li><a href="#"><i class="display-flex-center zmdi zmdi-google"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>
</body>
</html>