@extends('layout')
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->  
  <link rel="icon" type="image/png" href="{{asset('login/images/icons/favicon.ico')}}"/>
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="{{asset('login/vendor/bootstrap/css/bootstrap.min.css')}}">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="{{asset('login/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="{{asset('login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css')}}">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="{{asset('login/vendor/animate/animate.css')}}">
<!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="{{asset('login/vendor/css-hamburgers/hamburgers.min.css')}}">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="{{asset('login/vendor/animsition/css/animsition.min.css')}}">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="{{asset('login/vendor/select2/select2.min.css')}}">
<!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="{{asset('login/vendor/daterangepicker/daterangepicker.css')}}">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="{{asset('login/css/util.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('login/css/main.css')}}">
<!--===============================================================================================-->
</head>
<body>


  
  <div class="limiter">
    <div class="container-login100">
      <div class="wrap-login100">
        <!-- <div class="login100-form-title" style="background-image: url('login/images/bg-01.jpg');">
          <span class="login100-form-title-1">
            Sign In
          </span>
        </div> -->

        <form method="post" class="login100-form validate-form" action=" {{url('/signup_post')}}">

          {{ csrf_field() }}

          <div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
            <span class="label-input100">Your name</span>
            <input class="input100" type="text" name="name" placeholder="Enter username">
            <span class="focus-input100"></span>
          </div>

          <div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
            <span class="label-input100">Email</span>
            <input class="input100" type="text" name="email" placeholder="Enter username">
            <span class="focus-input100"></span>
          </div>

           <div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
            <span class="label-input100">Registration number</span>
            <input class="input100" type="text" name="reg_num" placeholder="Enter username">
            <span class="focus-input100"></span>
          </div>

          <div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
            <span class="label-input100">Department</span>
            <input class="input100" type="text" name="department" placeholder="Enter username">
            <span class="focus-input100"></span>
          </div>

           <div class="wrap-input100 validate-input m-b-18">
            <span class="label-input100">Type</span>
                        <select class="input100" name="user_type" id="user_type">
                            <option slected value="">User Type</option>
                            <option value="Teacher">Teacher</option>
                            <option value="Student">Student</option>
                        </select>
                        <span class="focus-input100"></span>
                    </div>

          <div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
            <span class="label-input100">Password</span>
            <input class="input100" type="password" name="password" placeholder="Enter password">
            <span class="focus-input100"></span>
          </div>


          <div class="container-login100-form-btn">
            <button class="login100-form-btn">
              Sign up
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>
  
<!--===============================================================================================-->
  <script src="{{asset('login/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
<!--===============================================================================================-->
  <script src="{{asset('login/vendor/animsition/js/animsition.min.js')}}"></script>
<!--===============================================================================================-->
  <script src="{{asset('login/vendor/bootstrap/js/popper.js')}}"></script>
  <script src="{{asset('login/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
  <script src="{{asset('login/vendor/select2/select2.min.js')}}"></script>
<!--===============================================================================================-->
  <script src="{{asset('login/vendor/daterangepicker/moment.min.js')}}"></script>
  <script src="{{asset('login/vendor/daterangepicker/daterangepicker.js')}}"></script>
<!--===============================================================================================-->
  <script src="{{asset('login/vendor/countdowntime/countdowntime.js')}}"></script>
<!--===============================================================================================-->
  <script src="{{asset('login/js/main.js')}}"></script>

</body>
</html>

@endsection