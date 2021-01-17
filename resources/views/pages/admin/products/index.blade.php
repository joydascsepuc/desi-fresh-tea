@extends('layouts.app')
@section('content')
	<div class="row">
		<div class="col-md-2 col-sm-2"></div>
		<div class="col-md-8 col-sm-8">
			<a href="/product/create" class="float-right" style="text-decoration: none;">
				<button class="btn btn-success">Add Product</button>
			</a>
			<br><br>
			<table class="table">
				<thead>
					<tr>
						<th>Product Name</th>
						<th>Description</th>
						<th>Actions</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach($products as $product): ?>
						<tr>
							<td>{{ $product['product_name'] }}</td>
							<td>{{ $product['description'] }}</td>
							<td>
								<a href="/product/{{$product->id}}/edit" class="btn btn-sm float-left"><i class="far fa-edit"></i></a>
                                <form action="/product/{{$product->id}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-sm"><i class="far fa-trash-alt"></i></button>
                                </form>
							</td>
						</tr>
					<?php endforeach;?>
				</tbody>
			</table>
		</div>
		<div class="col-md-2 col-sm-2"></div>
	</div>
@endsection