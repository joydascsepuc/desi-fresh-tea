@extends('layouts.app')
@section('content')
	<div class="row">
		<div class="col-md-2 col-sm-2"></div>
		<div class="col-md-8 col-sm-8">
			<br><br><br><br>
			<form class="form" action="/product/{{ $product['id'] }}" method="post">
                @csrf
                @method('PUT')
                <label class="form-label">Product Name</label>
                <input type="text" name="product_name" value="{{ $product['product_name'] }}" class="form-control">
                <br>
                <label class="form-label">Description</label>
                <textarea class="form-control" name="description" style="min-height: 150px;">{{ $product['description'] }}</textarea>
                <br>
                <div class="row">
                	<div class="col-md-4 com-sm-4"></div>
                	<div class="col-md-4 com-sm-4">
                		<button class="btn btn-primary btn-block">Update Product</button>
                	</div>
                	<div class="col-md-4 com-sm-4"></div>
                </div>
            </form>
		</div>
		<div class="col-md-2 col-sm-2"></div>
	</div>
@endsection