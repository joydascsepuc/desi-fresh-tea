@extends('layouts.app')
@section('content')
	<div class="row">
		<div class="col-md-2 col-sm-2"></div>
		<div class="col-md-8 col-sm-8">
			<br><br><br><br>
			<form class="form" action="/historya/{{ $history['id'] }}" method="post">
                @csrf
                @method('PUT')
                <label class="form-label">Point</label>
                <textarea class="form-control" name="point" style="min-height: 150px;">{{ $history['point'] }}</textarea>
                <br>
                <div class="row">
                	<div class="col-md-4 com-sm-4"></div>
                	<div class="col-md-4 com-sm-4">
                		<button class="btn btn-primary btn-block">Update History Point</button>
                	</div>
                	<div class="col-md-4 com-sm-4"></div>
                </div>
            </form>
		</div>
		<div class="col-md-2 col-sm-2"></div>
	</div>
@endsection