@extends('layouts.app')

@section('content')

<div class="container">

    <div class="text-center">
    <h2>Create Calendar</h2>
      </div>


        @include('calendar.form')

        <div class="col-md-8 offset-md-2">

            {!! Form::submit('Save', ['class'=>'btn btn-primary']) !!}
            <td><a href="{{ route('calendar.index')}}" class="btn btn-primary">Cancel</a></td>

    {!!Form::close()!!}
        </div>
</div>
@endsection
