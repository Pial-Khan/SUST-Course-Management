@extends('admin.admin_layout')
@section('admin_contents')

<ul class="breadcrumb">
				
			</ul>

			<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon user"></i><span class="break"></span>Courses</h2>
					</div>
					<!-- <p class="alert-success" >
						<?php
						$message=Session::get('message');
					
						if ($message) {
							echo $message;
							Session::put('message',NULL);
						}

						?>

					</p> -->
					<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
								  <th>Course ID</th>
								  <th>Course Name</th>
								  <th>Course description</th>
								  <th>Status</th>
								  <th>Actions</th>
							  </tr>
						  </thead> 
						  <?php
						  	$all_course_info=DB::table('tbl_course')
						  						->get();
						  	?>

						  @foreach($all_course_info as $v_course)  
						  <tbody>
							<tr>
								<td>{{$v_course->course_id}}</td>
								<td class="center">{{$v_course->course_name}}</td>
								<td class="center">{{$v_course->course_description}}</td>
								<td class="center">

								@if($v_course->publication_status==1)
									<span class="label label-success">Active</span>

								@else
									<span class="label label-danger">Unactive</span>

								@endif

								</td>
								<td class="center">
									@if($v_course->publication_status==1)
									<a class="btn btn-danger" href="{{URL::to('/unactive-course/'.$v_course->course_id)}}" method="post">
										<i class="halflings-icon white thumbs-down"></i>  
									</a>
									@else($v_course->publication_status==0)
									<a class="btn btn-success" href="{{URL::to('/active-course/'.$v_course->course_id)}}">
										<i class="halflings-icon white thumbs-up"></i>  
									</a>
									@endif
									<a class="btn btn-info" href="#">
										<i class="halflings-icon white edit"></i>  
									</a>
									<a class="btn btn-danger" href="{{URL::to('/delete-course/'.$v_course->course_id)}}" id="delete">
										<i class="halflings-icon white trash"></i> 
									</a>
								</td>
							</tr>
						  </tbody>
						  @endforeach
					  </table>            
					</div>
				</div><!--/span-->
			
			</div><!--/row-->

@endsection