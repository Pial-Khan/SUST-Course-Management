@extends('layout')
@section('content')

<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link rel="shortcut icon" href="img/fav.png">
	<!-- Author Meta -->
	<meta name="author" content="codepixer">
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->
	<title>Blog Details</title>

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

	


	<!-- Start Banner Area -->
	<section class="banner-area relative">
		<div class="container">
			<div class="row d-flex align-items-center justify-content-center">
				<div class="about-content col-lg-12">
					<h1 class="text-white">
						{{$project_details->Project_name}}
					</h1>
					<!-- <p>In the history of modern astronomy, there is probably no one greater leap forward than the building and launch of
						the space telescope.</p> -->
					<div class="link-nav">
						<!-- <span class="box">
							<a href="index.html">Home </a>
							<i class="lnr lnr-arrow-right"></i>
							<a href="blog-home.html">Blog</a>
							<i class="lnr lnr-arrow-right"></i>
							<a href="blog-single.html">Blog Details</a>
						</span> -->
					</div>
				</div>
			</div>
		</div>
		<div class="rocket-img">
			<img src="img/rocket.png" alt="">
		</div>
	</section>
	<!-- End Banner Area -->

	<!-- Start post-content Area -->
	<section class="post-content-area single-post-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 posts-list">
					<div class="single-post row">
						<div class="col-lg-12">
							<div class="feature-img">
								<img class="img-fluid" src="{{URL::to($project_details->Project_image)}}" alt="">
							</div>
						</div>
						<div class="col-lg-3  col-md-3 meta-details">
							<ul class="tags">
								<li><a href="#"></a></li>
								
							</ul>
							<div class="user-details row">
								<p class="user-name col-lg-12 col-md-12 col-6"><a href="#">{{$project_details->member1_name}}</a> <span class="lnr lnr-user"></span></p>
								<p class="user-name col-lg-12 col-md-12 col-6"><a href="#">{{$project_details->member2_name}}</a> <span class="lnr lnr-user"></span></p>
								<p class="date col-lg-12 col-md-12 col-6"><a href="#">{{$project_details->session}}</a> <span class="lnr lnr-calendar-full"></span></p>
								<p class="view col-lg-12 col-md-12 col-6"><a href="#">{{$project_details->course_name}}</a> <span class="lnr lnr-book"></span></p>
								<p class="view col-lg-12 col-md-12 col-6"><a href="#">{{$project_details->type_name}}</a> <span class="lnr lnr-list"></span></p>
								<p class="view col-lg-10 col-md-8 col-4"><a href="{{$project_details->Github_link}}">{{$project_details->Github_link}}</a> <span class="lnr lnr-link"></span></p>
								
								<ul class="social-links col-lg-12 col-md-12 col-6">
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-github"></i></a></li>
									<li><a href="#"><i class="fa fa-behance"></i></a></li>
								</ul>
							</div>
						</div>
						<div class="col-lg-9 col-md-9">
							<h3 class="mt-20 mb-20">{{$project_details->Project_name}}</h3>
							<p class="excert">
								{!!$project_details->Project_description!!}
							</p>
						</div>
						<div class="col-lg-12">
							
							<div class="row mt-30 mb-30">
								<div class="col-6">
									<img class="img-fluid" src="img/blog/post-img1.jpg" alt="">
								</div>
								<div class="col-6">
									<img class="img-fluid" src="img/blog/post-img2.jpg" alt="">
								</div>
								
							</div>
						</div>
					</div>
					<div class="navigation-area">
						<div class="row">
							<div class="col-lg-6 col-md-6 col-12 nav-left flex-row d-flex justify-content-start align-items-center">
								<div class="thumb">
									<a href="#"><img class="img-fluid" src="img/blog/prev.jpg" alt=""></a>
								</div>
								<div class="arrow">
									<a href="#"><span class="lnr text-white lnr-arrow-left"></span></a>
								</div>
								
							</div>
							<div class="col-lg-6 col-md-6 col-12 nav-right flex-row d-flex justify-content-end align-items-center">
								
								<div class="arrow">
									<a href="#"><span class="lnr text-white lnr-arrow-right"></span></a>
								</div>
								<div class="thumb">
									<a href="#"><img class="img-fluid" src="img/blog/next.jpg" alt=""></a>
								</div>
							</div>
						</div>
					</div>
					<div class="comments-area">
						<h4>05 Comments</h4>
						<?php $all_comments=DB::table('tbl_comment')
											->join('tbl_user','tbl_comment.user_id','tbl_user.user_id')
											->select('tbl_comment.*','tbl_user.*')
											->where('project_id',$project_details						->project_id)
											->get(); ?>

						<?php foreach($all_comments as $v_comment) { ?>

						<div class="comment-list">
							<div class="single-comment justify-content-between d-flex">
								<div class="user justify-content-between d-flex">
									<div class="thumb">
										<img src="img/blog/c1.jpg" alt="">
									</div>
									<div class="desc">
										<h5><a href="#">{{$v_comment->name}}</a></h5>
										<p class="date">December 4, 2017 at 3:12 pm </p>
										<p class="comment">
											{{$v_comment->comment}}
										</p>
									</div>
								</div>
								<!-- <div class="reply-btn">
									<a href="" class="btn-reply text-uppercase">reply</a>
								</div> -->
							</div>
						</div>
						<?php } ?>
						
					</div>

					<?php 
					$user_id=Session::get('user_id');
					if($user_id!=null){ ?>

					<div class="comment-form">
						<h4>Leave a Comment</h4>
						<form  action="{{url('/post_comment/'.$project_details->project_id)}}" method="post">
							{{ csrf_field() }} 
							<div class="controls">
								<textarea class="form-control mb-10" rows="5" name="comment" placeholder="Messege"
								 required=""></textarea>
							</div>
							<!-- <a  href="{{URL::to('/post_comment/'.$project_details->project_id)}}" class="primary-btn">Post Comment</a> -->
							<button type="submit" class="btn btn-primary">Post comment</button>
						</form>
					</div>
					<?php } ?>
				</div>
				<div class="col-lg-4 sidebar-widgets">
					<div class="widget-wrap">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
							Teacher
							</h1>
						</div>
						<div class="single-sidebar-widget user-info-widget">
							<!-- <img src="{{URL::to($project_details->image)}}" alt=""> -->
							<a href="#"><h4>{{$project_details->teacher_name}}</h4></a>
							<p>
								{{$project_details->designation}}
							</p>
							<ul class="social-links">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-github"></i></a></li>
								<li><a href="#"><i class="fa fa-behance"></i></a></li>
							</ul>
							<p>
								Boot camps have its supporters andit sdetractors. Some people do not understand why you should have to spend money on boot
								camp when you can get. Boot camps have itssuppor ters andits detractors.
							</p>
						</div>
						
						<div class="single-sidebar-widget ads-widget">
							<a href="#"><img class="img-fluid" src="img/blog/ads-banner.jpg" alt=""></a>
						</div>
						
						
						
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End post-content Area -->

	<!-- Start Footer Area -->
	<footer class="footer-area section-gap">
		<div class="container">
			<div class="row">
				<div class="col-lg-2 col-md-6 single-footer-widget">
					<h4>Top Products</h4>
					<ul>
						<li><a href="#">Managed Website</a></li>
						<li><a href="#">Manage Reputation</a></li>
						<li><a href="#">Power Tools</a></li>
						<li><a href="#">Marketing Service</a></li>
					</ul>
				</div>
				<div class="col-lg-2 col-md-6 single-footer-widget">
					<h4>Quick Links</h4>
					<ul>
						<li><a href="#">Jobs</a></li>
						<li><a href="#">Brand Assets</a></li>
						<li><a href="#">Investor Relations</a></li>
						<li><a href="#">Terms of Service</a></li>
					</ul>
				</div>
				<div class="col-lg-2 col-md-6 single-footer-widget">
					<h4>Features</h4>
					<ul>
						<li><a href="#">Jobs</a></li>
						<li><a href="#">Brand Assets</a></li>
						<li><a href="#">Investor Relations</a></li>
						<li><a href="#">Terms of Service</a></li>
					</ul>
				</div>
				<div class="col-lg-2 col-md-6 single-footer-widget">
					<h4>Resources</h4>
					<ul>
						<li><a href="#">Guides</a></li>
						<li><a href="#">Research</a></li>
						<li><a href="#">Experts</a></li>
						<li><a href="#">Agencies</a></li>
					</ul>
				</div>
				<div class="col-lg-4 col-md-6 single-footer-widget">
					<h4>Newsletter</h4>
					<p>You can trust us. we only send promo offers,</p>
					<div class="form-wrap" id="mc_embed_signup">
						<form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
						 method="get" class="form-inline">
							<input class="form-control" name="EMAIL" placeholder="Your Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Email Address '"
							 required="" type="email">
							<button class="click-btn btn btn-default"><span class="lnr lnr-arrow-right"></span></button>
							<div style="position: absolute; left: -5000px;">
								<input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
							</div>

							<div class="info"></div>
						</form>
					</div>
				</div>
			</div>
			<div class="footer-bottom row align-items-center">
				<p class="footer-text m-0 col-lg-8 col-md-12"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
				<div class="col-lg-4 col-md-12 footer-social">
					<a href="#"><i class="fa fa-facebook"></i></a>
					<a href="#"><i class="fa fa-twitter"></i></a>
					<a href="#"><i class="fa fa-dribbble"></i></a>
					<a href="#"><i class="fa fa-behance"></i></a>
				</div>
			</div>
		</div>
	</footer>
	<!-- End Footer Area -->

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
</body>

</html>

@endsection