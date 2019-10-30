@extends('layouts/app')


@section('content')
    <h1>Create Yacht</h1>
    {!! Form::open(['action' => 'YachtsController@store', 'method' => 'POST', 'id'=>'yacht-form-create']) !!}
        <div class="form-group">
            {{Form::label('name', 'Name')}}
            {{Form::text('name', '', ['class' => 'form-control'])}}

        </div>
        <div class="form-group">
            <label for="yachttype-list">Type</label><br>
            <select name="yachttype-list" form="yacht-form-create">
                @foreach ($yachttypes as $yachttype)
                    <option name="yachttype{{$yachttype->id}}" value="{{$yachttype->id}}">{{$yachttype->name}}</option>
                @endforeach
            </select>        
        </div>
        <div class="form-group">
            <label for="port-list">Port</label><br>
            <select name="port-list" form="yacht-form-create">
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
            {{Form::text('code', '', ['class' => 'form-control'])}}    
        </div>

        {{-- @foreach ($statuses as $status)
            <p>{{$status}}</p>
        @endforeach

        @foreach ($yachttypenames as $yachttypename)
            <p>{{$yachttypename}}</p>
        @endforeach --}}
        {{Form::submit('Create Yacht',['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}
    
@endsection