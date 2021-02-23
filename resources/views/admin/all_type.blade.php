@extends('admin.admin_layout')
@section('admin_contents')

<ul class="breadcrumb">
				
			</ul>

			<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon user"></i><span class="break"></span>Types</h2>
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
								  <th>Type ID</th>
								  <th>Type Name</th>
								  <th>Status</th>
								  <th>Actions</th>
							  </tr>
						  </thead> 
						  <?php
						  	$all_type_info=DB::table('tbl_type')
						  						->get();
						  	?>

						  @foreach($all_type_info as $v_type)  
						  <tbody>
							<tr>
								<td>{{$v_type->type_id}}</td>
								<td class="center">{{$v_type->type_name}}</td>
								<td class="center">{{$v_type->type_description}}</td>
								<td class="center">

								@if($v_type->publication_status==1)
									<span class="label label-success">Active</span>

								@else
									<span class="label label-danger">Unactive</span>

								@endif

								</td>
								<td class="center">
									@if($v_type->publication_status==1)
									<a class="btn btn-danger" href="{{URL::to('/unactive-type/'.$v_type->type_id)}}" method="post">
										<i class="halflings-icon white thumbs-down"></i>  
									</a>
									@else($v_type->publication_status==0)
									<a class="btn btn-success" href="{{URL::to('/active-type/'.$v_type->type_id)}}">
										<i class="halflings-icon white thumbs-up"></i>  
									</a>
									@endif
									<a class="btn btn-info" href="#">
										<i class="halflings-icon white edit"></i>  
									</a>
									<a class="btn btn-danger" href="{{URL::to('/delete-type/'.$v_type->type_id)}}" id="delete">
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