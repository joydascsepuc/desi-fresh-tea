@extends('layouts.app')
@section('content')
	{{-- About Page --}}
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

	{{-- History Page --}}
	<div class="" id="history_img" style="min-height: 110vh;">
		<div style="padding: 5rem;">
			<h2 style="color: black; font-size: 3.2rem; font-weight: bold;">OUR HISTORY WITH TEA</h2>
			<ul style="font-size: 1.4rem; font-style: italic;">
				<?php foreach($points as $point):?>
					<li>{{ $point['point'] }}</li>
				<?php endforeach; ?>
			</ul>
		</div>
	</div>

	{{-- Mission & Vision Page --}}
	<div class="" id="mission_img" style="min-height: 145vh;">
		<div style="padding: 7rem;">
			<h2 style="color: white; font-size: 3.5rem; font-weight: bold;">OUR VISON</h2>
			<ul class="missionVision">
				<?php foreach($visions as $vision): ?>
					<li>{{ $vision['point'] }}</li>
				<?php endforeach; ?>
			</ul>
			<br><br><br><br><br><br>
			<h2 style="color: white; font-size: 3.5rem; font-weight: bold;">OUR MISSION</h2>
			<ul class="missionVision">
				<?php foreach($missions as $mission): ?>
					<li>{{ $mission['point'] }}</li>
				<?php endforeach; ?>
			</ul>
		</div>
	</div>

@endsection