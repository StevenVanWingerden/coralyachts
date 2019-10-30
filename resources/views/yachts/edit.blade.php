@extends('layouts/app')


@section('content')
    <a href="/yachts" class="btn btn-default"><em>Go back</em></a>
    <div class="card">
    <div class="card-header"><h4><strong>Edit {{$yacht->name}}</strong></h4></div>
        <div class="container">
            {!! Form::open(['action' => ['YachtsController@update', $yacht->id], 'method' => 'POST']) !!}
            <div class="form-group">
                {{Form::label('name', 'Name')}}
                {{Form::text('name', $yacht->name, ['class' => 'form-control'])}}
            </div>
            <div class="form-group">
                <label for="yachttype-list">Type</label><br>
                <select name="yachttype-list">
                    @foreach ($yachttypes as $yachttype)
                        <option name="yachttype{{$yachttype->id}}" value="{{$yachttype->id}}">{{$yachttype->name}}</option>
                    @endforeach
                </select>        
            </div>
            <div class="form-group">
                <label for="port-list">Port</label><br>
                <select name="port-list">
                    @foreach ($ports as $port)
                        <option name="port{{$port->id}}" value="{{$port->id}}">{{$port->name}}</option>
                    @endforeach
                </select>        
            </div>

            <div class="form-group">
                {{Form::label('status', 'Status')}}<br>
                {{Form::select('status',['Available' => 'Available', 'Unavailable' => 'Unavailable'])}}    
            </div>
            <div class="form-group">
                {{Form::label('code', 'Code')}}
                {{Form::text('code', $yacht->code, ['class' => 'form-control'])}}    
            </div>
            {{Form::hidden('_method', 'PUT')}}
            {{Form::submit('Save changes',['class' => 'btn btn-primary'])}}
            {!! Form::close() !!}
        </div>
    </div>
    
@endsection