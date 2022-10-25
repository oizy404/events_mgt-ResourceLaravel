@extends('layout.master')

@section('title')
    Event Management System
@stop

@section('content')

    <div class="home-container">
        <h4 class="mt-4">Events Management System</h4><hr>
        <a href="{{route('events.create')}}" class="btn mt-4" id="btn-add"><i class="fa fa-plus-square"></i> Add Event</a>
        <br><br>

        @foreach ($events as $event)
            <div class="row mt-3">
                <div class="col-md-4 round">
                    <div class="card" id="eventcard">
                        <div class="card-body">
                            <form action="{{route('events.destroy', $event->id)}}" method="post">
                                @csrf 
                                @method('delete')
                                <button class="btn-delete" type="submit"onclick="return confirm(' Are you sure you want to delete this event?')">
                                    <i class="fa fa-trash"></i>
                                </button><br><br>
                            </form>
                            <h5>{{$event->event_name}}</h5><hr><br>
                            <a href="{{route('events.show', $event->id)}}"><button id="btn-view"><i class="fa fa-eye"></i> View</button></a>
                            <a href="{{route('events.edit', $event->id)}}"><button id="btn-edit"><i class="fa fa-edit"></i> Edit</button></a>
                        </div>
                    </div>
                    <br>
                </div>
            </div>
        @endforeach

    </div>

@stop
