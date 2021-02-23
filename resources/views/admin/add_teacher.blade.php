<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="index.html">Home</a>
					<i class="icon-angle-right"></i> 
				</li>
				<li>
					<i class="icon-edit"></i>
					<a href="#">Add Teacher</a>
				</li>
			</ul>
			
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon edit"></i><span class="break"></span>Add Teacher</h2>	
					</div>
					<p class="alert-success" >
						<?php
						$message=Session::get('message');
					
						if ($message) {
							echo $message;
							Session::put('message',NULL);
						}

						?>

					</p>
					<div class="box-content">
						<form class="form-horizontal" action="{{url('/save-teacher')}}" method="post" enctype="multipart/form-data">
						{{ csrf_field() }} 
						  <fieldset>
							
							<div class="control-group">
							  <label class="control-label" for="date01">Teacher Name</label>
							  <div class="controls">
								<input type="text" class="input-xlarge" name="teacher_name" required="" >
							  </div>
							</div>
							<div class="control-group">
								<label class="control-label" for="selectError3">Designation</label>
								<div class="controls">
								  <select id="selectError3" name="designation">
								  	<option>Lecturer</option>
								  	<option>Assistant professor</option>
								  	<option>Associate professor</option>
								  	<option>Professor</option>					
								  </select>
								</div>
							  </div>

							  <div class="control-group">
							  <label class="control-label" for="date01">Phone number</label>
							  <div class="controls">
								<input type="text" class="input-xlarge" name="phone_number" required="" >
							  </div>
							</div>
							  
          
							<div class="control-group hidden-phone">
							  <label class="control-label" for="textarea2">Email</label>
							  <div class="controls">
								<textarea class="cleditor" name="email" rows="3" required=""></textarea>
							  </div>
							</div>

							<div class="control-group">
							  <label class="control-label" for="fileInput">Image</label>
							  <div class="controls">
								<input class="input-file uniform_on" name="image" id="fileInput" type="file">
							  </div>
							</div>

							<div class="control-group hidden-phone">
							  <label class="control-label" for="textarea2">Publication status</label>
							  <div class="controls">
								<input type="checkbox" name="publication_status" value="1">
							  </div>
							</div>


							<div class="form-actions">
							  <button type="submit" class="btn btn-primary">Add Product</button>
							  <button type="reset" class="btn">Cancel</button>
							</div>
						  </fieldset>
						</form>   

					</div>
				</div><!--/span-->

			</div><!--/row-->