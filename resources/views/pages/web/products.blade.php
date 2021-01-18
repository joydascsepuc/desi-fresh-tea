@extends('layouts.app')
@section('content')
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