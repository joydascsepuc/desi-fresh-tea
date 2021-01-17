@extends('layouts.app')
@section('content')
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