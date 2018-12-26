@extends('layouts.app')
@section('content')

@include('admin.includes.errors')


<div class="card">
	<div class="card-header">
		Update <strong>{{$ed->name}} </strong> Category
	</div>

	<div class="card-block">
	<form action="{{route('category.update',['id'=>$ed->id])}}" method="post">
			@csrf
	<div class="form-group">
 		<label for="name">Name</label>
		<input type="text" name="nameinput" class="form-control" value="{{$ed->name}}">
	</div>

	

	
	<div class="form-group text-center">
		<button class="btn btn-danger" type="submit">Update</button>
	</div>
	</form>
	</div>
</div>
@endsection