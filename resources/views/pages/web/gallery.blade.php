@extends('layouts.app')
@section('content')
	<div style="padding: 15px;">
		<br><br><br>
		<h2 style="font-size: 4rem; color: black;" class="text-center font-weight-bold">Our Gallery</h2>
		<p style="font-size: 2rem; color: black;" class="text-center">WE HAVE CAPTURED OUR ‘TEA STORY’</p>
		<br><br><br>

		<?php 

			$datalimit = 3;
    		$parts = array_chunk($images, $datalimit, true);

		?>

		<?php foreach($parts as $part): ?>
			<div class="row">
				<?php foreach($part as $image):?>
				<div class="col-md-4 col-sm-4">
					<img src="/storage/website_images/{{ $image['image_name'] }}" class="img-fluid galleryImage">
				</div>
				<?php endforeach;?>
			</div>
		<?php endforeach; ?>	
		
	</div>
	
@endsection