@extends('layouts.app')
@section('content')
	<div class="row">
		<div class="col-md-2 col-sm-2"></div>
		<div class="col-md-8 col-sm-8">
			<a href="/mission/create" class="float-right" style="text-decoration: none;">
				<button class="btn btn-success">Add Mission Point</button>
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
					<?php foreach($missions as $mission): ?>
						<tr>
							<td><?=$i;?></td>
							<td>{{ $mission['point'] }}</td>
							<td>
								<a href="/mission/{{$mission->id}}/edit" class="btn btn-sm float-left"><i class="far fa-edit"></i></a>
                                <form action="/mission/{{$mission->id}}" method="post">
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