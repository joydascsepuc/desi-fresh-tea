@extends('layouts.app')
@section('content')
	<div class="row">
		<div class="col-md-2 col-sm-2"></div>
		<div class="col-md-8 col-sm-8">
			<br><br><br><br>
			<form class="form" action="/faq" method="post">
                @csrf
                <label class="form-label">Question</label>
                <input type="text" name="question" class="form-control">
                <br>
                <label class="form-label">Answer</label>
                <textarea class="form-control" name="answer" style="min-height: 150px;"></textarea>
                <br>
                <div class="row">
                	<div class="col-md-4 com-sm-4"></div>
                	<div class="col-md-4 com-sm-4">
                		<button class="btn btn-primary btn-block">Add FAQ</button>
                	</div>
                	<div class="col-md-4 com-sm-4"></div>
                </div>
            </form>
		</div>
		<div class="col-md-2 col-sm-2"></div>
	</div>
@endsection