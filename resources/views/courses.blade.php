@extends('layout')
@section('content')
@include('header')
<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>

	<!--Start Feature Area -->
	<section class="feature-area">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-8">
					<div class="section-title text-center">
						<h1>Courses</h1>
						<p>
							<!-- If you are looking at blank cassettes on the web, you may be very confused at the difference in price. You may see some for
							as low as $.17 each. -->
						</p>
					</div>
				</div>
			</div>
			<?php
			$all_course_info=DB::table('tbl_course')
							->where('publication_status',1)
							->get();
			?>
			<div class="feature-inner row">
				<?php foreach($all_course_info as $v_course){ ?>
				<div class="col-lg-4 col-md-6">
					<a href="{{URL::to('/project_by_course/'.$v_course->course_id)}}">
					<div class="feature-item">
						<i class="far fa-file-code" style='font-size:36px'></i>
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


	

	<!-- ####################### Start Scroll to Top Area ####################### -->
	<div id="back-top">
		<a title="Go to Top" href="#"></a>
	</div>
	<!-- ####################### End Scroll to Top Area ####################### -->

	@endsection