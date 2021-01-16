@extends('layouts.app')
@section('content')
	<div class="" id="brand_img" style="min-height: 100vh;">
		<div style="padding: 7rem;">
			<div class="row">
				<div class="col-md-2 col-sm-2"></div>
				<div class="col-md-9 col-sm-9">
					<div class="row">
						<div class="col-sm-6 col-md-6">
							<h2 style="color: black; font-size: 3rem; font-weight: bold;">
								Head Office
							</h2>
							<p style="color: black; font-size: 1.5rem;">
								House No-706, Bailjuri, Turag, Dhaka-1230,Bangladesh.
							</p>
							<p style="color: black; font-size: 1.5rem;">
								info@deshifreshtea.com.bd
							</p>
							<p style="color: black; font-size: 1.5rem;">
								(+880) - 02 - 4895 4791
							</p>
							<p style="color: black; font-size: 1.5rem;">
								(+880) - 1918 390 119 
							</p>
						</div>
						<div class="col-sm-6 col-md-6">
							<form class="form contactPage" action="" method="">
								@csrf
								<label class="form-label font-weight-bold" style="font-size: 1.5rem;">Your Name</label>
								<input type="text" name="name" class="form-control">
								<br><br>
								<label class="form-label font-weight-bold" style="font-size: 1.5rem;">Your Email</label>
								<input type="email" name="email" class="form-control">
								<br><br>
								<label class="form-label font-weight-bold" style="font-size: 1.5rem;">Message</label>
								<input type="text" name="message" class="form-control">
								<br><br>
								<button class="btn font-weight-bold" type="submit" style="background-color: #2C9606; padding: 3px; color: white;">Message</button>
							</form>
						</div>
					</div>
				</div>
				<div class="col-md-1 col-sm-1"></div>
			</div>
		</div>
	</div>
@endsection