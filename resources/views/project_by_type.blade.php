@extends('layout')
@section('content')
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from bootstrapmaster.com/live/metro/table.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 08 Jan 2018 16:58:09 GMT -->
<head>
	
	
	
	<!-- start: CSS -->
	<link id="bootstrap-style" href="{{asset('allproject/css/bootstrap.min.css')}}" rel="stylesheet">
	<link href="{{asset('allproject/css/bootstrap-responsive.min.css')}}" rel="stylesheet">
	<link id="base-style" href="{{asset('allproject/css/style.css')}}" rel="stylesheet">
	<link id="base-style-responsive" href="{{asset('allproject/css/style-responsive.css')}}" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&amp;subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>
	<!-- end: CSS -->
	

	<!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<link id="ie-style" href="css/ie.css" rel="stylesheet">
	<![endif]-->
	
	<!--[if IE 9]>
		<link id="ie9style" href="css/ie9.css" rel="stylesheet">
	<![endif]-->
		
	<!-- start: Favicon -->
	<link rel="shortcut icon" href="{{asset('allproject/img/favicon.ico')}}">
	<!-- end: Favicon -->
	
		
		
		
</head>

<body>
	
		<div class="container-fluid-full">
		<div class="row-fluid">
				
			
			
			<!-- Start Banner Area -->
	<section class="banner-area relative">
		<div class="container">
			<div class="row d-flex align-items-center justify-content-center">
				<div class="about-content col-lg-12">
					<h1 class="text-white">
						Projects
					</h1>
					<p></p>
					<div class="link-nav">
						<span class="box">
							<a href="index.html">Home </a>
							<i class="lnr lnr-arrow-right"></i>
							<a href="courses.html">Projects</a>
						</span>
					</div>
				</div>
			</div>
		</div>
		<div class="rocket-img">
			<img src="img/rocket.png" alt="">
		</div>
	</section>
	<!-- End Banner Area -->
			
			<!-- start: Content -->
			<div id="content" class="span10">
			

			<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header" data-original-title>
						
					</div>
					<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
								  <th>Project name</th>
								  <th>Member 1</th>
								  <th>Member 2</th>
								  <th>Teacher</th>
								  <th>Course</th>
								  <th>Session</th>
							  </tr>
						  </thead>   
						  <tbody>

						  <?php foreach ($project_by_type as $v_project_by_type) { ?>
							<tr>
								<td><a href="{{URL::to('/project_details/'.$v_project_by_type->project_id)}}">{{$v_project_by_type->Project_name}}</a></td>
								<td class="center">{{$v_project_by_type->member1_name}}</td>
								<td class="center">{{$v_project_by_type->member2_name}}</td>
								<td class="center">
									<span class="label label-success">{{$v_project_by_type->teacher_name}}</span>
								</td>
								<td class="center">{{$v_project_by_type->course_name}}</td>
								<td class="center">{{$v_project_by_type->session}}</td>
								<!-- <td class="center">
									<a class="btn btn-success" href="#">
										<i class="halflings-icon white zoom-in"></i>  
									</a>
									<a class="btn btn-info" href="#">
										<i class="halflings-icon white edit"></i>  
									</a>
									<a class="btn btn-danger" href="#">
										<i class="halflings-icon white trash"></i> 
									</a>
								</td> -->
							</tr>
						<?php } ?>
						  </tbody>
					  </table>            
					</div>
				</div><!--/span-->
			
			</div><!--/row-->

			
			
			</div><!--/row-->
			
			

	</div><!--/.fluid-container-->
	
			<!-- end: Content -->
		</div><!--/#content.span10-->
		</div><!--/fluid-row-->
		
	<div class="modal hide fade" id="myModal">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">×</button>
			<h3>Settings</h3>
		</div>
		<div class="modal-body">
			<p>Here settings can be configured...</p>
		</div>
		<div class="modal-footer">
			<a href="#" class="btn" data-dismiss="modal">Close</a>
			<a href="#" class="btn btn-primary">Save changes</a>
		</div>
	</div>
	
	<div class="clearfix"></div>
	
	<footer>

		

	</footer>
	
	<!-- start: JavaScript-->

		<script src="{{asset('allproject/js/jquery-1.9.1.min.js')}}"></script>
	<script src="{{asset('allproject/js/jquery-migrate-1.0.0.min.js')}}"></script>
	
		<script src="{{asset('allproject/js/jquery-ui-1.10.0.custom.min.js')}}"></script>
	
		<script src="{{asset('allproject/js/jquery.ui.touch-punch.js')}}"></script>
	
		<script src="{{asset('allproject/js/modernizr.js')}}"></script>
	
		<script src="{{asset('allproject/js/bootstrap.min.js')}}"></script>
	
		<script src="{{asset('allproject/js/jquery.cookie.js')}}"></script>
	
		<script src="{{asset('allproject/js/fullcalendar.min.js')}}"></script>
	
		<script src="{{asset('allproject/js/jquery.dataTables.min.js')}}"></script>

		<script src="{{asset('allproject/js/excanvas.js')}}"></script>
	<script src="{{asset('allproject/js/jquery.flot.js')}}"></script>
	<script src="{{asset('allproject/js/jquery.flot.pie.js')}}"></script>
	<script src="{{asset('allproject/js/jquery.flot.stack.js')}}"></script>
	<script src="{{asset('allproject/js/jquery.flot.resize.min.js')}}"></script>
	
		<script src="{{asset('allproject/js/jquery.chosen.min.js')}}"></script>
	
		<script src="{{asset('allproject/js/jquery.uniform.min.js')}}"></script>
		
		<script src="{{asset('allproject/js/jquery.cleditor.min.js')}}"></script>
	
		<script src="{{asset('allproject/js/jquery.noty.js')}}"></script>
	
		<script src="{{asset('allproject/js/jquery.elfinder.min.js')}}"></script>
	
		<script src="{{asset('allproject/js/jquery.raty.min.js')}}"></script>
	
		<script src="{{asset('allproject/js/jquery.iphone.toggle.js')}}"></script>
	
		<script src="{{asset('allproject/js/jquery.uploadify-3.1.min.js')}}"></script>
	
		<script src="{{asset('allproject/js/jquery.gritter.min.js')}}"></script>
	
		<script src="{{asset('allproject/js/jquery.imagesloaded.js')}}"></script>
	
		<script src="{{asset('allproject/js/jquery.masonry.min.js')}}"></script>
	
		<script src="{{asset('allproject/js/jquery.knob.modified.js')}}"></script>
	
		<script src="{{asset('allproject/js/jquery.sparkline.min.js')}}"></script>
	
		<script src="{{asset('allproject/js/counter.js')}}"></script>
	
		<script src="{{asset('allproject/js/retina.js')}}"></script>

		<script src="{{asset('allproject/js/custom.js')}}"></script>
	<!-- end: JavaScript-->
	
</body>

<!-- Mirrored from bootstrapmaster.com/live/metro/table.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 08 Jan 2018 16:58:10 GMT -->
</html>
@endsection
