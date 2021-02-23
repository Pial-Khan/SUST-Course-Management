<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
  <!-- Mobile Specific Meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Favicon-->
  <link rel="shortcut icon" href="{{asset('frontend/img/fav.png')}}">
  <!-- Author Meta -->
  <meta name="author" content="codepixer">
  <!-- Meta Description -->
  <meta name="description" content="">
  <!-- Meta Keyword -->
  <meta name="keywords" content="">
  <!-- meta character set -->
  <meta charset="UTF-8">
  <!-- Site Title -->
  <title>Project Management</title>

  <!--
      Google Font
      ============================================= -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,500,600" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500i" rel="stylesheet">

  <!--
      CSS
      ============================================= -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/themify-icons/0.1.2/css/themify-icons.css">

  <link rel="stylesheet" href="{{asset('frontend/css/linearicons.css')}}">
  <link rel="stylesheet" href="{{asset('frontend/css/font-awesome.min.css')}}">
  <link rel="stylesheet" href="{{asset('frontend/css/bootstrap.css')}}">
  <link rel="stylesheet" href="{{asset('frontend/css/magnific-popup.css')}}">
  <link rel="stylesheet" href="{{asset('frontend/css/nice-select.css')}}">
  <link rel="stylesheet" href="{{asset('frontend/css/animate.min.css')}}">
  <link rel="stylesheet" href="{{asset('frontend/css/owl.carousel.css')}}">
  <link rel="stylesheet" href="{{asset('frontend/css/main.css')}}">
</head>

<body>

  <!-- Start Header Area -->
  <header id="header">
    <div class="container">
      <div class="row align-items-center justify-content-between d-flex">
        <div id="logo">
          <a href="{{URL::to('/')}}"><img src="{{asset('frontend/img/logo.png')}}" alt="" title="" /></a>
        </div>
        <?php $user_id=Session::get('user_id'); ?>
        <nav id="nav-menu-container">
          <ul class="nav-menu">
            <li class="menu-active"><a href="{{URL::to('/')}}">Home</a></li>
            <li><a href="about.html">About</a></li>
            <li><a href="{{URL::to('/courses')}}">Courses</a></li>
            <li class="menu-has-children"><a href="{{URL::to('/add_project')}}">Add project</a>
              
            </li>
            
               <?php if($user_id!=NULL) { ?>
                <li class="menu-has-children"><a href="">{{Session::get('name')}}</a>
                  <!-- <ul>
                    <li><a href="{{URL::to('/logout')}}">Logout</a></li>
                  </ul> -->
                </li>

                <?php }else{ ?>
                    <li><a href="{{URL::to('/user_login')}}">Login</a></li>
                 <?php } ?>
                 <?php if ($user_id!=NULL) { ?>
                    <li><a href="{{URL::to('/logout')}}">Logout</a></li>
                  <?php }else{ ?>
                         <li><a href="{{URL::to('/sign_up')}}">Sign Up</a></li> 
                  <?php } ?>
          </ul>
        </nav><!-- #nav-menu-container -->
      </div>
    </div>
  </header>
  <!-- End Header Area -->


   @yield('content')


  
  <!-- ####################### Start Scroll to Top Area ####################### -->
  <div id="back-top">
    <a title="Go to Top" href="#"></a>
  </div>
  <!-- ####################### End Scroll to Top Area ####################### -->

  <script src="{{asset('frontend/js/vendor/jquery-2.2.4.min.js')}}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
   crossorigin="anonymous"></script>
  <script src="{{asset('frontend/js/vendor/bootstrap.min.js')}}"></script>
  <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
  <script src="{{asset('frontend/js/easing.min.js')}}"></script>
  <script src="{{asset('frontend/js/hoverIntent.js')}}"></script>
  <script src="{{asset('frontend/js/superfish.min.js')}}"></script>
  <script src="{{asset('frontend/js/jquery.ajaxchimp.min.js')}}"></script>
  <script src="{{asset('frontend/js/jquery.magnific-popup.min.js')}}"></script>
  <script src="{{asset('frontend/js/owl.carousel.min.js')}}"></script>
  <script src="{{asset('frontend/js/owl-carousel-thumb.min.js')}}"></script>
  <script src="{{asset('frontend/js/jquery.sticky.js')}}"></script>
  <script src="{{asset('frontend/js/jquery.nice-select.min.js')}}"></script>
  <script src="{{asset('frontend/js/parallax.min.js')}}"></script>
  <script src="{{asset('frontend/js/waypoints.min.js')}}"></script>
  <script src="{{asset('frontend/js/wow.min.js')}}"></script>
  <script src="{{asset('frontend/js/jquery.counterup.min.js')}}"></script>
  <script src="{{asset('frontend/js/mail-script.js')}}"></script>
  <script src="{{asset('frontend/js/main.js')}}"></script>
  <script src="{{asset('t_pro/js/jquery.min.js')}}"></script>
  <script src="{{asset('t_pro/js/slick.min.js')}}"></script>
  <script src="{{asset('t_pro/js/main.js')}}"></script>
</body>

</html>