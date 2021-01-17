@extends('layouts.app')
@section('content')
	<div class="" id="about_img" style="min-height: 150vh;">

		<div class="row" style="padding-top: 8rem;">
			<div class="col-md-1 col-sm-1"></div>
			<div class="col-md-7 col-sm-7">
				<h5 class="text-uppercase" style="color: green; font-size: 2.5rem;">ABOUT COMPANY</h5>
				<h2 class="text-uppercase" style="color: black; font-size: 3.5rem;">Deshi Fresh Tea</h2>
				<br>
				<p style="color: black; font-size: 1.5rem; font-style: italic;">
					{{ $content['about_company'] }}
				</p>
			</div>
			<div class="col-md-3 col-sm-3"></div>
		</div>
	</div>
@endsection