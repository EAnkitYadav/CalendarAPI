@extends('layouts.app')
@section('content')

<div class="container">
{!! Form::open(['route' => array('users.update', $user->id) ,'method'=> 'post'  ] ) !!}
@method('PATCH')
 @csrf
  @include('user.form')


        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Update</button>


		<a href="{{ route('users.index') }}" class="btn btn-warning">Back</a>
	</div>

    {!! Form::close() !!}
</div>
@endsection


