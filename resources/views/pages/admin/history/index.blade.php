@extends('layouts.app')
@section('content')
	<div class="row">
		<div class="col-md-2 col-sm-2"></div>
		<div class="col-md-8 col-sm-8">
			<a href="/historya/create" class="float-right" style="text-decoration: none;">
				<button class="btn btn-success">Add History Point</button>
			</a>
			<br><br>
			<table class="table">
				<thead>
					<tr>
						<th>Serial</th>
						<th>Points</th>
					</tr>
				</thead>
				<tbody>
					<?php $i=1; ?>
					<?php foreach($histories as $history): ?>
						<tr>
							<td><?=$i;?></td>
							<td>{{ $history['point'] }}</td>
							<td>
								<a href="/historya/{{$history->id}}/edit" class="btn btn-sm float-left"><i class="far fa-edit"></i></a>
                                <form action="/historya/{{$history->id}}" method="post">
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