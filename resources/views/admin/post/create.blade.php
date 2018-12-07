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
{{-- @if(count($errors> 0))
	<ul class="list-group">
		@foreach($errors->all() as $error)
		<li class="list-group-item-danger">$error</li>
		@endforeach
	</ul>
@endif --}}

<div class="card">
	<div class="card-header">
		create a new post
	</div>

	<div class="card-block">
	<form action="{{route('storepost')}}" method="post" enctype="multipart/form-data" >
			@csrf
	<div class="form-group">
 		<label for="title">Title</label>
		<input type="text" name="title" class="form-control">
	</div>

	<div class="form-group">
		<label for="content">Content</label>
		<textarea name="content" id="content" rows="5" class="form-control" ></textarea>
	</div>

	<div class="form-group">
		<label for="featuredimg">Content</label>
		<input type="file" name="featuredimg" class="form-control">
	</div>
	<div class="form-group text-center">
		<button class="btn btn-danger" type="submit">Submit</button>
	</div>
	</form>
	</div>
</div>
@endsection