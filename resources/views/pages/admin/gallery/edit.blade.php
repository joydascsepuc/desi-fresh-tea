@extends('layouts.app')
@section('content')
	<br><br><br><br>
	<div class="row">
		<div class="col-md-4 col-sm-4"></div>
		<div class="col-md-4 col-sm-4">
			<form class="form" method="post" action="/gallerya/{{ $gallery['id'] }}" enctype="multipart/form-data">
				@csrf
				@method('PUT')
				<label class="label">Image</label>
				<input type="file" class="form-control" name="image_name">
				<br><br>
				<button type="submit" class="btn btn-primary btn-block">Update Image</button>
			</form>
		</div>
		<div class="col-md-4 col-sm-4"></div>
	</div>
@endsection