@include('layout2')

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Add project</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="author" content="colorlib.com">

		<!-- MATERIAL DESIGN ICONIC FONT -->
		<link rel="stylesheet" href="{{asset('form/fonts/material-design-iconic-font/css/material-design-iconic-font.css')}}">

		<!-- DATE-PICKER -->
		<link rel="stylesheet" href="{{asset('form/vendor/date-picker/css/datepicker.min.css')}}">

		<!-- STYLE CSS -->
		<link rel="stylesheet" href="{{asset('form/css/style.css')}}">
	</head>
	<body>
		<div class="wrapper">
			<div class="image-holder">
				<img src="images/form-wizard.png" alt="">
			</div>

            <form action="{{url('/save-project')}}" method="post" enctype="multipart/form-data" style="margin-top: 300px">

            	{{ csrf_field() }} 
            	<div class="form-header">
            		
            		<h3></h3>
            	</div>
            	<div id="wizard">
            		<!-- SECTION 1 -->
	                <h4></h4>
	                <section>
	                	<div class="form-row">
	                    	<label for="">
	                    		Member 1:
	                    	</label>
	                    	<div class="form-holder">
	                    		<input type="text" class="form-control" name="member1_name">
	                    	</div>
	                    </div>
	                    <div class="form-row">
	                    	<label for="">
	                    		Member 1 reg:
	                    	</label>
	                    	<div class="form-holder">
	                    		<input type="text" class="form-control" name="member1_reg">
	                    	</div>
	                    </div>
	                    <div class="form-row">
	                    	<label for="">
	                    		Member 2:
	                    	</label>
	                    	<div class="form-holder">
	                    		<input type="text" class="form-control" name="member2_name">
	                    	</div>
	                    </div>
	                    <div class="form-row">
	                    	<label for="">
	                    		Member 2 reg:
	                    	</label>
	                    	<div class="form-holder">
	                    		<input type="text" class="form-control" name="member2_reg">
	                    	</div>
	                    </div>
	                 
	        
	                  		
	             		
	                </section>
	                
					<!-- SECTION 2 -->
	                <h4></h4>
	                <section>
	                	<div class="form-row" style="margin-bottom: 26px;">
	                    	<label for="">
	                    		Session
	                    	</label>
	                	<div class="form-holder">
	                    		<select name="session_id" id="" class="form-control">
	                    			<option value="canvas" class="option">Select session</option>
	                    		<?php
	                    	 	$all_session=DB::table('tbl_session')
                                                    ->where('publication_status',1)
                                                    ->get();
                                foreach($all_session as $v_session){?>
									<option value="{{$v_session->session_id}}">{{$v_session->session}}</option>
									<?php } ?>
								</select>
								<i class="zmdi zmdi-caret-down"></i>
	                    	</div>
	                    </div>	
	                    <div class="form-row">
	                    	<label for="">
	                    		Course
	                    	</label>
	                    	<div class="form-holder">
	                    		<select name="course_id" id="" class="form-control">
									<option value="canvas" class="option">Select Course</option>
									<?php
	                    	 	$all_course=DB::table('tbl_course')
                                                    ->where('publication_status',1)
                                                    ->get();
                                foreach($all_course as $v_course){?>
									<option value="{{$v_course->course_id}}">{{$v_course->course_name}}</option>
									<?php } ?>
									<option value="svg" class="option">Svg</option>
								</select>
								<i class="zmdi zmdi-caret-down"></i>
	                    	</div>
	                    </div>	

	                	<div class="form-row">
	                    	<label for="">
	                    		Project Type
	                    	</label>
	                    	<div class="form-holder">
	                    		<select name="type_id" id="" class="form-control">
									<option value="canvas" class="option">Select Type</option>
									<?php
	                    	 	$all_type=DB::table('tbl_type')
                                                    ->where('publication_status',1)
                                                    ->get();
                                foreach($all_type as $v_type){?>
									<option value="{{$v_type->type_id}}">{{$v_type->type_name}}</option>
									<?php } ?>
								</select>
								<i class="zmdi zmdi-caret-down"></i>
	                    	</div>
	                    </div>	

	                    <div class="form-row">
	                    	<label for="">
	                    		Teacher
	                    	</label>
	                    	<div class="form-holder">
	                    		<select name="teacher_id" id="" class="form-control">
									<option value="canvas" class="option">Select Teacher</option>
									<?php
	                    	 	$all_teacher=DB::table('tbl_teacher')
                                                    ->where('publication_status',1)
                                                    ->get();
                                foreach($all_teacher as $v_teacher){?>
									<option value="{{$v_teacher->teacher_id}}">{{$v_teacher->teacher_name}}</option>
									<?php } ?>
									
								</select>
								<i class="zmdi zmdi-caret-down"></i>
	                    	</div>
	                    </div>	

	                   <!--  <div class="form-row">
	                    	<label for="">
	                    		Date of Birth:
	                    	</label>
	                    	<div class="form-holder">
	                    		<input type="text" class="form-control datepicker-here" data-language='en' data-date-format="dd - mm - yyyy" id="dp1">
	                    	</div>
	                    </div> -->	
	                    	
	                    <!-- <div class="form-row" style="margin-bottom: 50px;">
	                    	<label for="">
	                    		Gender:
	                    	</label>
	                    	<div class="form-holder">
	                    		<div class="checkbox-circle">
									<label class="male">
										<input type="radio" name="gender" value="male" checked> Male<br>
										<span class="checkmark"></span>
									</label>
									<label class="female">
										<input type="radio" name="gender" value="female"> Female<br>
										<span class="checkmark"></span>
									</label>
									<label>
										<input type="radio" name="gender" value="transgender">Transgender<br>
										<span class="checkmark"></span>
									</label>
								</div>
	                    	</div>
	                    </div>		 -->
	                </section>

	                <!-- SECTION 3 -->
	                <h4></h4>
	                <section>

	                	 <div class="form-row">
	                    	<label for="">
	                    		Project Name:
	                    	</label>
	                    	<div class="form-holder">
	                    		<input type="text" class="form-control" name="project_name" required="">
	                    	</div>
	                    </div>


	                    <!-- <div class="form-row" style="margin-bottom: 3.4vh">
	                    	<label for="textarea2">
	                    		Project description:
	                    	</label>
	                    	<div class="form-holder">
	                    		<input type="text" class="form-control" name="project_description">


	                    	</div>
	                    </div> -->
	                    <div class="control-group hidden-phone">
							  <label class="control-label" for="textarea2">Project Description</label>
							  <div class="controls">
								<textarea class="cleditor" name="project_description" rows="5" cols="50" required=""></textarea>
								 <script>
                        CKEDITOR.replace( 'project_description' );
                </script>
							  </div>
							</div>


	                    <div class="form-row">
	                    	<label for="fileInput">
	                    		Project Image:
	                    	</label>
	                    	<div class="form-holder">
	                    		<input class="input-file uniform_on" name="project_image" id="fileInput" type="file">
	                    	</div>
	                    </div>	
	                    <div class="form-row">
	                    	<label for="">
	                    		Github link:
	                    	</label>
	                    	<div class="form-holder">
	                    		<input type="text" class="form-control" placeholder="" name="Github_link">
	                    	</div>
	                    </div>	
                     		
                     		<div class="form-actions">
							  <button type="submit" class="btn btn-primary">Add Project</button>
							  <button type="reset" class="btn">Cancel</button>
							</div>
	                  
	                </section>

            	</div>
            </form>
		</div>

		<script src="{{asset('form/js/jquery-3.3.1.min.js')}}"></script>
		
		<!-- JQUERY STEP -->
		<script src="{{asset('form/js/jquery.steps.js')}}"></script>

		<!-- DATE-PICKER -->
		<script src="{{asset('form/vendor/date-picker/js/datepicker.js')}}"></script>
		<script src="{{asset('form/vendor/date-picker/js/datepicker.en.js')}}"></script>

		<script src="{{asset('form/js/main.js')}}"></script>
		<script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>

<!-- Template created and distributed by Colorlib -->
</body>
</html>
