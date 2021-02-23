 <!-- Start Banner Area -->
  <section class="home-banner-area relative">
    <div class="container">
      <div class="row fullscreen d-flex align-items-center justify-content-center">
        <div class="banner-content col-lg-8 col-md-12">
          <h1 class="wow fadeIn" data-wow-duration="4s"></h1>
          <!-- <p class="text-white">
            In the history of modern astronomy, there is probably no one greater leap forward than the building and launch of the space
            telescope.
          </p> -->

          <!-- <div class="input-wrap">
            <form action="" class="form-box d-flex justify-content-between">
              <input type="text" placeholder="Search Courses" class="form-control" name="username">
              <button type="submit" class="btn search-btn">Search</button>
            </form>
          </div> -->
          <h4 class="text-white">Session</h4>

          <div class="courses pt-20">
            <?php 
              $i=0;
              $all_session=DB::table('tbl_session')
                          ->where('publication_status',1)
                          ->get();

            foreach ($all_session as  $v_session) { ?>
              <?php $i=$i+0.3; ?>
              <a href="{{URL::to('/project_by_session/'.$v_session->session_id)}}" data-wow-duration="3s" data-wow-delay="$i s" class="primary-btn transparent mr-10 mb-10 wow fadeInDown">{{$v_session->session}}</a> 
               
           <?php  } ?>
            
          </div>
        </div>
      </div>
    </div>
    
  </section>
  <!-- End Banner Area -->