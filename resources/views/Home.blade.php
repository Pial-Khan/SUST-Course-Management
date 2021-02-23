@extends('layout')
@section('content')
@include('header')

<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
  <!-- Start About Area -->
  <!-- <section class="about-area section-gap">
    <div class="container">
      <div class="row align-items-center justify-content-center">
        <div class="col-lg-5 col-md-6 about-left">
          <img class="img-fluid" src="{{asset('frontend/img/about.jpg')}}" alt="">
        </div>
        <div class="offset-lg-1 col-lg-6 offset-md-0 col-md-12 about-right">
          <h1>
            Over 2500 Courses <br> from 5 Platform
          </h1>
          <div class="wow fadeIn" data-wow-duration="1s">
            <p>
              There is a moment in the life of any aspiring astronomer that it is time to buy that first telescope. It’s exciting to think
              about setting up your own viewing station. In the life of any aspiring astronomer that it is time to buy that first
              telescope. It’s exciting to think about setting up your own viewing station.
            </p>
          </div>
          <a href="courses.html" class="primary-btn">Explore Courses</a>
        </div>
      </div>
    </div>
  </section> -->
  <!-- End About Area -->
  <?php $type_id=Session::get('type_id'); ?>

  <!-- Start Courses Area -->
  <section class="courses-area section-gap">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-5 about-right">
          <h1>
            Project Types <br> 
          </h1>
          <div class="wow fadeIn" data-wow-duration="1s">
            <p>
             <!--  There is a moment in the life of any aspiring astronomer that it is time to buy that first telescope. It’s exciting to think
              about setting up your own viewing station. In the life of any aspiring astronomer that it is time to buy that first
              telescope. It’s exciting to think about setting up your own viewing station. -->
            </p>
          </div>
<!--           <a href="courses.html" class="primary-btn white">Explore Courses</a>
 -->        </div>
        <div class="offset-lg-1 col-lg-6">
          <div class="courses-right">
            <div class="row">

          <?php 
          $all_type=DB::table('tbl_type')
                    ->where('publication_status',1)
                    ->get();
          $count=0;
          foreach ($all_type as $v_type) { ?>
            <?php if ($count%2==0) { ?>
              
              <div class="col-lg-6 col-md-6 col-sm-12">
                <ul class="courses-list">
                  <li>
                    <a class="wow fadeInLeft" href="{{URL::to('/project_by_type/'.$v_type->type_id)}}" data-wow-duration="1s" data-wow-delay=".1s">
                      <i class="fa fa-book"></i> {{$v_type->type_name}}
                    </a>
                  </li>
                </ul>
              </div>

            <?php $count++; }else{ ?>
              <div class="col-lg-6 col-md-6 col-sm-12">
                <ul class="courses-list">
                  <li>
                    <a class="wow fadeInRight" href="{{URL::to('/project_by_type/'.$v_type->type_id)}}" data-wow-duration="1s" data-wow-delay="1.3s">
                      <i class="fa fa-book"></i> {{$v_type->type_name}}
                    </a>
                  </li>
                </ul>
              </div>
            <?php $count++; } ?>
            <?php } ?>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Courses Area -->


  <!--Start Feature Area -->
  <section class="feature-area">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <div class="section-title text-center">
            <h1>All Courses</h1>
            <p>
              Computer Science & Engineering
            </p>
          </div>
        </div>
      </div>
      <div class="feature-inner row"> 
      <?php
      $all_course=DB::table('tbl_course')
                    ->where('publication_status',1)
                    ->get();
     foreach ($all_course as $v_course) { ?>
      
      <div class="col-lg-4 col-md-6" >
        <a href="{{URL::to('/project_by_course/'.$v_course->course_id)}}">
          <div class="feature-item" >
            <i class='far fa-file-code' style='font-size:36px'></i>
            <h4>{{$v_course->course_name}}</h4>
            <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay=".1s">
              <p>
                {{$v_course->course_description}}
              </p>
            </div> 
          </div>   
        </div>
      </a>
        <?php } ?>
      </div>
    

    </div>
  </section>
  <!-- End Feature Area -->


  <!-- Start Faculty Area -->
  <section class="faculty-area section-gap">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <div class="section-title text-center">
            <h1>Faculty Members</h1>
            <!-- 
             -->
          </div>
        </div>
      </div>

      <?php 
      $all_teachers_info=DB::table('tbl_teacher')
                        ->where('publication_status',1)
                        ->get();
      ?>

      <div class="row justify-content-center d-flex align-items-center">
        <?php foreach ($all_teachers_info as $v_teacher) { ?>
        <div class="col-lg-3 col-md-6 col-sm-12 single-faculty">
          <a href="{{URL::to('/teacher/'.$v_teacher->teacher_id)}}">
          <div class="thumb d-flex justify-content-center">
            <img class="img-fluid" src="{{$v_teacher->image}}" alt="">
          </div>
          <div class="meta-text text-center">
            <h4>{{$v_teacher->teacher_name}}</h4>
            <p class="designation">{{$v_teacher->designation}}</p>
            <div class="info wow fadeIn" data-wow-duration="1s" data-wow-delay=".1s">
              <p>
               Phone : {{$v_teacher->phone_number}} <br>
               Email : {{$v_teacher->email}}
              </p>
            </div>
            <div class="align-items-center justify-content-center d-flex">
              <a href="#"><i class="fa fa-facebook"></i></a>
              <a href="#"><i class="fa fa-twitter"></i></a>
              <a href="#"><i class="fa fa-linkedin"></i></a>
            </div>
          </div>
         </a>
        </div>
      <?php } ?>
      </div>
    </div>
  </section>
  <!-- End Faculty Area -->


  <!-- Start Testimonials Area -->
  <!-- <section class="testimonials-area section-gap">
    <div class="container">
      <div class="testi-slider owl-carousel" data-slider-id="1">
        <div class="item">
          <div class="testi-item">
            <img src="img/quote.png" alt="">
            <h4>Fanny Spencer</h4>
            <ul class="list">
              <li><a href="#"><i class="fa fa-star"></i></a></li>
              <li><a href="#"><i class="fa fa-star"></i></a></li>
              <li><a href="#"><i class="fa fa-star"></i></a></li>
              <li><a href="#"><i class="fa fa-star"></i></a></li>
              <li><a href="#"><i class="fa fa-star"></i></a></li>
            </ul>
            <div class="wow fadeIn" data-wow-duration="1s">
              <p>
                As conscious traveling Paup ers we must always be oncerned about our dear Mother Earth. If you think about it, you travel
                across her face <br> and She is the host to your journey.
              </p>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="testi-item">
            <img src="img/quote.png" alt="">
            <h4>Fanny Spencer</h4>
            <ul class="list">
              <li><a href="#"><i class="fa fa-star"></i></a></li>
              <li><a href="#"><i class="fa fa-star"></i></a></li>
              <li><a href="#"><i class="fa fa-star"></i></a></li>
              <li><a href="#"><i class="fa fa-star"></i></a></li>
              <li><a href="#"><i class="fa fa-star"></i></a></li>
            </ul>
            <div class="wow fadeIn" data-wow-duration="1s">
              <p>
                As conscious traveling Paup ers we must always be oncerned about our dear Mother Earth. If you think about it, you travel
                across her face <br> and She is the host to your journey.
              </p>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="testi-item">
            <img src="img/quote.png" alt="">
            <h4>Fanny Spencer</h4>
            <ul class="list">
              <li><a href="#"><i class="fa fa-star"></i></a></li>
              <li><a href="#"><i class="fa fa-star"></i></a></li>
              <li><a href="#"><i class="fa fa-star"></i></a></li>
              <li><a href="#"><i class="fa fa-star"></i></a></li>
              <li><a href="#"><i class="fa fa-star"></i></a></li>
            </ul>
            <div class="wow fadeIn" data-wow-duration="1s">
              <p>
                As conscious traveling Paup ers we must always be oncerned about our dear Mother Earth. If you think about it, you travel
                across her face <br> and She is the host to your journey.
              </p>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="testi-item">
            <img src="img/quote.png" alt="">
            <h4>Fanny Spencer</h4>
            <ul class="list">
              <li><a href="#"><i class="fa fa-star"></i></a></li>
              <li><a href="#"><i class="fa fa-star"></i></a></li>
              <li><a href="#"><i class="fa fa-star"></i></a></li>
              <li><a href="#"><i class="fa fa-star"></i></a></li>
              <li><a href="#"><i class="fa fa-star"></i></a></li>
            </ul>
            <div class="wow fadeIn" data-wow-duration="1s">
              <p>
                As conscious traveling Paup ers we must always be oncerned about our dear Mother Earth. If you think about it, you travel
                across her face <br> and She is the host to your journey.
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="owl-thumbs d-flex justify-content-center" data-slider-id="1">
        <div class="owl-thumb-item">
          <div>
            <img class="img-fluid" src="img/testimonial/t1.jpg" alt="">
          </div>
          <div class="overlay overlay-grad"></div>
        </div>
        <div class="owl-thumb-item">
          <div>
            <img class="img-fluid" src="img/testimonial/t2.jpg" alt="">
          </div>
          <div class="overlay overlay-grad"></div>
        </div>
        <div class="owl-thumb-item">
          <div>
            <img class="img-fluid" src="img/testimonial/t3.jpg" alt="">
          </div>
          <div class="overlay overlay-grad"></div>
        </div>
        <div class="owl-thumb-item">
          <div>
            <img class="img-fluid" src="img/testimonial/t4.jpg" alt="">
          </div>
          <div class="overlay overlay-grad"></div>
        </div>
      </div>
    </div>
  </section> -->
  <!-- End Testimonials Area -->
@endsection