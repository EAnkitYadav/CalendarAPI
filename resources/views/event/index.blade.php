<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
@extends('layouts.app')
@section('content')
<div class="container" style="font-family:sans-serif">
    <div class="container">
    <a href="{{ route('event.create') }}" class="blade-link" ><i class="fa fa-plus-square-o"></i> Add new Event</a><br><br>
</div>
    <div class="row justify-content-center">
        <div class="card" style="border: none">
                <div >
                   <center><b style="font-size: 20px">Your Events</b></center>
                </div>

                <style>
                    #events {
                      font-family: Arial, Helvetica, sans-serif;
                      border-collapse: collapse;
                      width: 100%;
                    }

                    #events td, #events th {
                      border: 1px solid #ddd;
                      padding: 8px;
                    }

                    #events tr:nth-child(even){background-color: #f2f2f2;}

                    #events tr:hover {background-color: #ddd;}

                    #events th {
                      padding-top: 12px;
                      padding-bottom: 12px;
                      text-align: left;
                      background-color: #04AA6D;
                      color: white;
                    }
                    body {
                           background-color: lightblue;
                         }
                    </style>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    {{-- <table class="table" style="font-size: 15px ; border:none"> --}}
                        <table id="events">
                        <tr>
                            <th>Event Name</th>
                            <th>Description</th>
                            <th>Start</th>
                            <th>End</th>
                        </tr>
                    <tbody>
                        @foreach ($events as $event)
                            <tr>
                                <td><a href="{{ route('event.show', $event->id) }}">{{ $event->title }}</a></td>
                                {{-- <td style="white-space: nowrap">{{ $event->dob }}</td> --}}
                                <td>{{ $event->description }}</td>
                                <td>{{ $event->event_start }}</td>
                                {{-- <td>{{ $event->address }}</td>     --}}
                                <td>{{ $event->event_end }}</td>
                    {{-- <a href="/auth/redirect/calendar">Your Calendar List</a> --}}
                        @endforeach
		        </tbody>
                </div>
            </div>
    </div>
</div>
{{-- <center>
<iframe src="https://calendar.google.com/calendar/embed?height=600&wkst=1&bgcolor=%23ffffff&ctz=Asia%2FKolkata&showTitle=0&showDate=1&showPrint=0&showTabs=0&showTz=0&src=YW51cmFnc2luZ2gyMjMyNEBnbWFpbC5jb20&color=%23039BE5" style="border-width:0" width="800" height="600" frameborder="0" scrolling="no"></iframe>
</center> --}}

@endsection
