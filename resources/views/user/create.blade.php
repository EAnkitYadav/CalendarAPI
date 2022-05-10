@extends('layouts.app')
@section('content')

<div class="container">

        {!! Form::open(['route' => 'users.store']) !!}
        @csrf

        @include('user.form')

        @yield('pass')

        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>


        {!! Form::close() !!}
    </div>
  @endsection
