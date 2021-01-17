@extends('layouts.app')
@section('content')
	<div class="row">
		<div class="col-md-2 col-sm-2"></div>
		<div class="col-md-8 col-sm-8">
			<a href="/faq/create" class="float-right" style="text-decoration: none;">
				<button class="btn btn-success">Add FAQ</button>
			</a>
			<br><br>
			<table class="table">
				<thead>
					<tr>
						<th>Questions</th>
						<th>Answers</th>
						<th>Actions</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach($faqs as $faq): ?>
						<tr>
							<td>{{ $faq['question'] }}</td>
							<td>{{ $faq['answer'] }}</td>
							<td>
								<a href="/faq/{{$faq->id}}/edit" class="btn btn-sm float-left"><i class="far fa-edit"></i></a>
                                <form action="/faq/{{$faq->id}}" method="post">
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