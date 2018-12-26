@extends('layouts.app')
@section('content')
<div class="card">
	<div class="card-body">
<table class="table table-inverse">
	<thead>
		<tr>
			<th>All Catigories</th>
			<th> edit</th>
			<th> delete</th>
		</tr>
	</thead>
	<tbody>
		@foreach($cat as $cate)
		<tr>
			<td>{{$cate->name}}</td>
			<td><a class="btn btn-primary" href="{{route('category.edit',['id'=>$cate->id])}}" role="button">Edit</a></td>

			<td><a class="btn btn-danger" href="{{route('category.delete',['id'=>$cate->id])}}" role="button">Delete</a></td>

			
			

		</tr>
		@endforeach
	</tbody>
</table>
</div></div>
@endsection