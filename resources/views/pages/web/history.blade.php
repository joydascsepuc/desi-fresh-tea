@extends('layouts.app')
@section('content')
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
@endsection