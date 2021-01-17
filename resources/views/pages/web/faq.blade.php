@extends('layouts.app')
@section('content')
	<img src="/storage/website_images/faq.png" style="height: 350px; width: 100%;">

	<?php foreach($faqs as $faq): ?>
		{{-- Question Part --}}
		<div class="row" style="background-color: #37B34A; margin-right: 0px; margin-left: 0px; padding: 30px;">
			<div class="col-md-1 col-sm-1"></div>
			<div class="col-md-10 col-sm-10">
				<div class="row">
					<div class="col-sm-2 col-md-2">
						<img src="/storage/website_images/v.png" style="height: 50px; width: 30%;">
					</div>
					<div class="col-sm-10 col-md-10">
						<h2 style="color: white; font-weight: bold; font-size: 1.9rem;">{{ $faq['question'] }}</h2>
					</div>
				</div>
			</div>
			<div class="col-md-1 col-sm-1"></div>
		</div>
		{{-- Answer Part --}}
		<div class="row">
			<div class="col-md-1 col-sm-1"></div>
			<div class="col-md-10 col-sm-10">
				<p class="" style="padding: 15px; font-size: 1.3rem;">{{ $faq['answer'] }}</p>
			</div>
			<div class="col-md-1 col-sm-1"></div>
		</div>
	<?php endforeach; ?>
@endsection