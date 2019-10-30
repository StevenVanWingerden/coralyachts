@extends('layouts/app')


@section('content')
    <h1>Create Yacht type</h1>
    {!! Form::open(['action' => 'YachtTypesController@store', 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('name', 'Name')}}
            {{Form::text('name', '', ['class' => 'form-control'])}}

        </div>
        <div class="form-group">
            {{Form::label('type', 'Type')}}<br>
            {!! Form::select('type',['Cruiser' => 'Cruiser', 'Motor' => 'Motor']) !!}    
        </div>
        <div class="form-group">
            {{Form::label('length', 'Length')}}
            {{Form::text('length', '', ['class' => 'form-control'])}}    
        </div>
        <div class="form-group">
            {{Form::label('depth', 'Depth')}}
            {{Form::text('depth', '', ['class' => 'form-control'])}}    
        </div>
        <div class="form-group">
            {{Form::label('engine', 'Engine')}}
            {{Form::text('engine', '', ['class' => 'form-control'])}}    
        </div>
        <div class="form-group">
            {{Form::label('sail', 'Sail')}}
            {{Form::text('sail', '', ['class' => 'form-control'])}}    
        </div>
        <div class="form-group">
            {{Form::label('1pcabins', 'How many 1 person cabins')}}
            {{Form::text('1pcabins', '', ['class' => 'form-control'])}}    
        </div>
        <div class="form-group">
            {{Form::label('2pcabins', 'How many 2 person cabins')}}
            {{Form::text('2pcabins', '', ['class' => 'form-control'])}}    
        </div>
        <div class="form-group">
            {{Form::label('beds', 'How many beds')}}
            {{Form::text('beds', '', ['class' => 'form-control'])}}
        </div>
        <div class="form-group">
            {{Form::label('toilets', 'How many toilets')}}
            {{Form::text('toilets', '', ['class' => 'form-control'])}}
        </div>
        <div class="form-group">
            {{Form::label('showers', 'How many showers')}}
            {{Form::text('showers', '', ['class' => 'form-control'])}}
           
        </div>
        <div class="form-group">
            {{Form::label('gear', 'Gear')}}
            {{Form::textarea('gear', '', ['class' => 'form-control'])}}
            
        </div>
        <div class="form-group">
            {{Form::label('text', 'text')}}
            {{Form::textarea('text', '', ['class' => 'form-control'])}}      
        </div>
        {{Form::submit('Create Yacht type',['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}
    
@endsection