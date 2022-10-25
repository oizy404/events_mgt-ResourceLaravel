@extends('layout.master')

@section('title')
    Add Event
@stop

@section('content')
    <div class="container">
        <h4 class="offset-md-1 mt-5">Add Event</h4>
        <div class="col-md-6 offset-md-3 mt-5" style="background-color: white;">
            <form action="{{route('events.store')}}" id="eventform" method="post">
                @csrf
                @method('post')
                <div class="mb-3">
                    <label for="eventname" class="form-label"><b>Event Name</b></label>
                    <input type="text" class="form-control" name="eventname">
                </div>
                <div class="mb-3">
                    <label for="eventdate"><b>Date</b></label>
                    <input type="date" class="form-control mt-2" id="eventdate" name="eventdate">
                </div>
                <div class="mb-3">
                    <label for="eventvenue" class="form-label"><b>Event Venue</b></label>
                    <input type="text" class="form-control" name="eventvenue">
                </div>
                <div class="mb-3">
                    <label for="eventincharge" class="form-label"><b>In Charge</b></label>
                    <input type="text" class="form-control" name="eventincharge">
                </div><br>
                <button type="Add" class="btn" id="btn-create"><b>Create</b></button>
                <a href="{{route('events.index')}}" class="btn" id="btn-cancel"><b>Cancel</b></a>
            </form>
        </div>
    </div>

@stop
