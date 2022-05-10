@extends('layouts.app')
@section('content')
<div class="container">
<div class="row">
	<div class="my-3">
		<ul class="list-group">
			<li class="list-group-item">Name: {{ $user->name }}</li>
			<li class="list-group-item">Email: {{ $user->email }}</li>
            <li class="list-group-item">User_Type: {{ $user->user_type }}</li>

		</ul>
	</div>
	<div class="mt-3">

    <form action="{{ route('users.edit',  $user->id)}}" method="GET">
        @csrf
        <button class="btn btn-primary" type="submit">Edit</button>

      <a href="{{ route('users.index') }}" class="btn btn-warning">Back</a>
    </form>
</div>

@endsection
