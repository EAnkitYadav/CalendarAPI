@extends('layouts.app')

@section('content')

{{-- <div class="container">
    <div class="text-center">
        Edit Records
    </div>

        @include('calendar.form')
        <button type="submit" class="btn btn-primary">Update Data</button>
        <button type="submit" class="btn btn-primary">Cancel</button>

    </div>
</div>
</div>
@endsection --}}

<div class="container">
    <div class="card-uper">
        <div class="card-header">
            Edit Project Records
        </div>

        <div class="card-body">

            {!! Form::open([
                'route'=>['calendar.update','method'=>'post']
            ]) !!}

            @method('PATCH')
            @include('calendar.form')

            <button type="submit" class="btn btn-primary">Update Data</button>
            <button type="submit" class="btn btn-primary">Cancel</button>

            {!! Form::close() !!}
        </div>
    </div>
    </div>
    @endsection
