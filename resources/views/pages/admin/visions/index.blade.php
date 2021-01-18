@extends('layouts.app')
@section('content')
	<div class="row">
		<div class="col-md-2 col-sm-2"></div>
		<div class="col-md-8 col-sm-8">
			<a href="/vision/create" class="float-right" style="text-decoration: none;">
				<button class="btn btn-success">Add Vision Point</button>
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
					<?php foreach($visions as $vision): ?>
						<tr>
							<td><?=$i;?></td>
							<td>{{ $vision['point'] }}</td>
							<td>
								<a href="/vision/{{$vision->id}}/edit" class="btn btn-sm float-left"><i class="far fa-edit"></i></a>
                                <form action="/vision/{{$vision->id}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-sm"><i class="far fa-trash-alt"></i></button>
                                </form>
							</td>
						</tr>
					<?php $i++; ?>
					<?php endforeach;?>
				</tbody>
			</table>
		</div>
		<div class="col-md-2 col-sm-2"></div>
	</div>
@endsection