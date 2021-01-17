@extends('layouts.app')
@section('content')
	<div class="" id="about_img" style="min-height: 110vh;">
		<div class="row" style="padding-top: 5rem;">
			<div class="col-md-1 col-sm-1"></div>
			<div class="col-md-7 col-sm-7">
				<h2 style="color: black; font-weight: bold; font-size: 3.2rem;">Corporate Social Responsibility</h2><br>
				<p style="color: black; font-size: 22px; font-weight: bold;">
					{{ $content['corporate_social_responsibility'] }}
				</p>
			</div>
			<div class="col-md-4 col-sm-4"></div>
		</div>
	</div>
@endsection