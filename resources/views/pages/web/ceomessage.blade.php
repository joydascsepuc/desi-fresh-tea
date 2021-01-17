@extends('layouts.app')
@section('content')
	<div class="" id="about_img" style="min-height: 150vh;">
		<div style="padding-top: 5rem;" class="row">
			<div class="col-md-1 col-sm-1"></div>
			<div class="col-md-11 col-sm-11">
				<img src="/storage/website_images/ceoimage.png" class="" style="width: 250px; height: 250px; border-radius: 50%;">
			</div>
		</div>
		<br><br><br>
		<div class="row">
			<div class="col-sm-1 col-md-1"></div>
			<div class="col-sm-7 col-md-7">
				<h2 style="color: black; font-size: 2.2rem;" class="text-center font-weight-bold">CEO’S MESSAGE</h2>
				<p style="color: black; font-size: 22px; font-style: italic;">Hello<br>
					{{ $content['ceo_message'] }}
				</p>
			</div>
			<div class="col-sm-4 col-md-4"></div>
		</div>
		
	</div>
@endsection