@extends('layout')
@section('content')
<!doctype html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="{{asset('t_pro/css/style.css')}}">
	<link rel="stylesheet" href="{{asset('t_pro/css/slick.css')}}">
	<title>Author</title>
</head>
<body>



	<!-- About me -->
	<section class="fh5co-about-me">
		<?php foreach($all_teacher_info as $v_teachers) { ?>
		<div class="about-me-inner site-container">
			<article class="portfolio-wrapper">
				<div class="portfolio__img">
					<img src="{{URL::to($v_teachers->image)}}" class="about-me__profile" alt="about me profile picture">
				</div>
				<div class="portfolio__bottom">
					<div class="portfolio__name">
						<!-- <span>J</span> -->
						<h2 class="universal-h2">{{$v_teachers->teacher_name}}</h2>
					</div>
					<p>
               Phone : {{$v_teachers->phone_number}} <br>
               Email : {{$v_teachers->email}}
              </p>
				</div>
			</article>

			<?php 
				$id=$v_teachers->teacher_id;
				$all_details=DB::table('tbl_project')
					->join('tbl_teacher','tbl_project.teacher_id','=','tbl_teacher.teacher_id')
					->select('tbl_project.*','tbl_teacher.*')
					->where('tbl_project.teacher_id',$id)
					->get();

			?>

			<div class="about-me__text">
				<div class="about-me-slider">
					<div class="about-me-single-slide">
						<h2 class="universal-h2 universal-h2-bckg">Projects</h2>
						<!-- <p><span>H</span> e has work appearing or forthcoming in over a dozen venues, including Buzzy Mag, The Spirit of Poe, and the British Fantasy Society journal Dark Horizons. He is also CEO of a company, specializing in custom book publishing and social media marketing services, have created a community for authors to learn and connect.He has work appearing or forthcoming in over a dozen venues, including Buzzy Mag, The Spirit of Poe, and have created a community for authors to learn and connect.</p> -->
						<!-- <h4>Author</h4>
						<p class="p-white">See me</p> -->

<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #;
}
</style>
</head>
<body>


<table>
  <tr>
    <th>Project name</th>
    <th>Student</th>
    <th>Student</th>
  </tr>
  <?php foreach ($all_details as $v_details) { ?>

  <tr>
    <td><a href="{{URL::to('/project_details/'.$v_details->project_id)}}">{{$v_details->Project_name}}</a></td>
    <td>{{$v_details->member1_name}}</td>
    <td>{{$v_details->member2_name}}</td>
  </tr>

<?php } ?>
  
</table>

</body>
</html>

					</div>
					
				</div>
			</div>
		</div>
		<div class="about-me-bckg"></div>
		<?php } ?>
	</section>
	<!-- About me end -->

	<!-- Scripts -->
	<script src="{{asset('t_pro/js/jquery.min.js')}}"></script>
	<script src="{{asset('t_pro/js/slick.min.js')}}"></script>
	<script src="{{asset('t_pro/js/main.js')}}"></script>

</body>
</html>
@endsection
