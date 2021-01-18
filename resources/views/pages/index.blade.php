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

	{{-- Brand Page --}}
	<div class="" id="brand_img" style="min-height: 70vh;">
		<div class="text-center">
			<br><br>
			<h2 style="color: black; font-size: 3.5rem; font-weight: bold;">Brand</h2>
			<img src="/storage/website_images/brand_logo.png" style="height: 500px; width: 500px;">
		</div>
	</div>

	{{-- Ceo Message Page --}}
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

	{{-- Corporate SR Page --}}
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

	{{-- Faq Page --}}
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

	{{-- Gallery Page --}}
	<div style="padding: 15px;">
		<br><br><br>
		<h2 style="font-size: 4rem; color: black;" class="text-center font-weight-bold">Our Gallery</h2>
		<p style="font-size: 2rem; color: black;" class="text-center">WE HAVE CAPTURED OUR ‘TEA STORY’</p>
		<br><br><br>
		<?php 
			$parts = array_chunk($images, 3);
		?>
		<?php foreach($parts as $part): ?>
			<div class="row">
				<?php foreach($part as $image):?>
				<div class="col-md-4 col-sm-4">
					<img src="/storage/gallery/{{ $image['image_name'] }}" class="img-fluid galleryImage">
				</div>
				<?php endforeach;?>
			</div>
			<br>
		<?php endforeach; ?>	
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

	{{-- Products Page --}}
	<div class="" id="about_img" style="min-height: 110vh;">
		<div style="padding: 5rem;">
			<div class="row">
				<div class="col-md-1 col-sm-1"></div>
				<div class="col-md-8 col-sm-8">
					<h2 class="text-center" style="color: black; font-size: 3.5rem; font-weight: bold;">Our Product</h2><br><br>
					<?php 
						$parts = array_chunk($products, 2);
					?>
					<?php foreach($parts as $part):?>
					<div class="row">
						<?php foreach($part as $product):?>
						<div class="col-sm-6 col-md-6">
							<h5 style="font-weight: bold; color: black; font-size: 1.5rem;">{{ $product['product_name'] }}</h5>
							<p style="color: black; font-size: 17px;">
								{{ $product['description'] }}
							</p>
						</div>
						<?php endforeach;?>
					</div>
					<br>
					<?php endforeach;?>
				</div>
				<div class="col-md-3 col-sm-1"></div>
			</div>
		</div>
	</div>

@endsection