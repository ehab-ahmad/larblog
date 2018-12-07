@extends('layouts.app')
@section('content')

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


<div class="card">
	<div class="card-header">
		create a new Category
	</div>

	<div class="card-block">
	<form action="{{route('store.category')}}" method="post">
			@csrf
	<div class="form-group">
 		<label for="name">Name</label>
		<input type="text" name="name" class="form-control">
	</div>

	

	
	<div class="form-group text-center">
		<button class="btn btn-danger" type="submit">Submit</button>
	</div>
	</form>
	</div>
</div>
@endsection