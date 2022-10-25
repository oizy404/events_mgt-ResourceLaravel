@extends('layout.master')

@section('title')
    Specific Event
@stop

@section('content')
    <div class="container">
        <div class="eventname offset-md-1 mt-4">
            <h3>{{$event->event_name}}</h3><hr>
        </div>
        <div class="eventinfo col-md-6 offset-md-3" style="background-color: white;">
            <h4><b>Event Details</b></h4><br><br>
            <div class="details">
                <h5><b>Schedule: </b>{{$event->event_date}}</h5><hr>
                <h5><b>Venue: </b>{{$event->event_venue}}</h5><hr>
                <h5><b>In Charge: </b>{{$event->event_incharge}}</h5><hr><br>
                
                <a href="{{route('events.index')}}"><button type="submit" class="btn-back">Back</button></a>
            </div>
        </div>
    </div>
@stop
