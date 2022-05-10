@extends('layouts.app')

@section('content')
<div class='container'>
<div class="row">
	<div class="my-3">
		<ul class="list-group">
			<li class="list-group-item">Name: </li>
            <li class="list-group-item">Description:</li>
		</ul>
	</div>
</div>

<div class="mt-3">
    <a href="{{ route('calendar.index') }}" class="btn btn-primary">Back</a>
</div>
</div>
@endsection
