@extends('layouts.app')
@section('content')
	<div class="row">
		<div class="col-sm-2 col-md-2"></div>
		<div class="col-sm-8 col-md-8">
			<form class="form" action="/website/{{$data->id}}" method="post">
				@csrf
				@method('PUT')
				<label class="form-label">About Company</label>
				<textarea name="about_company" class="form-control">{{ $data['about_company'] }}</textarea>
				<label class="form-label">CEO's Message</label>
				<textarea name="ceo_message" class="form-control">{{ $data['ceo_message'] }}</textarea>
				<label class="form-label">Corporate Social Responsibility</label>
				<textarea cols="3" name="csr" class="form-control">{{ $data['corporate_social_responsibility'] }}</textarea>
				<br>
				<button type="submit" class="btn btn-primary">Update Content(s)</button>
			</form>
		</div>
		<div class="col-sm-2 col-md-2"></div>
	</div>
@endsection