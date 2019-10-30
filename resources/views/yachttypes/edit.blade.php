@extends('layouts/app')


@section('content')
    <a href="/yachttypes" class="btn btn-default"><em>Go back</em></a>
    <div class="card">
    <div class="card-header"><h4><strong>Edit {{$yachttype->name}}</strong></h4></div>
        <div class="container">
            {!! Form::open(['action' => ['YachtTypesController@update', $yachttype->id], 'method' => 'POST']) !!}
            <div class="form-group">
                    {{Form::label('name', 'Name')}}
                    {{Form::text('name', $yachttype->name, ['class' => 'form-control'])}}

                </div>
                <div class="form-group">
                    {{Form::label('type', 'Type')}}<br>
                    {!! Form::select('type',['Cruiser' => 'Cruiser', 'Motor' => 'Motor'], $yachttype->type) !!}    
                </div>
                <div class="form-group">
                    {{Form::label('length', 'Length')}}
                    {{Form::text('length', $yachttype->length, ['class' => 'form-control'])}}    
                </div>
                <div class="form-group">
                    {{Form::label('depth', 'Depth')}}
                    {{Form::text('depth', $yachttype->depth, ['class' => 'form-control'])}}    
                </div>
                <div class="form-group">
                    {{Form::label('engine', 'Engine')}}
                    {{Form::text('engine', $yachttype->engine, ['class' => 'form-control'])}}    
                </div>
                <div class="form-group">
                    {{Form::label('sail', 'Sail')}}
                    {{Form::text('sail', $yachttype->sail, ['class' => 'form-control'])}}    
                </div>
                <div class="form-group">
                    {{Form::label('1pcabins', 'How many 1 person cabins')}}
                    {{Form::text('1pcabins', $yachttype->cabins1p, ['class' => 'form-control'])}}    
                </div>
                <div class="form-group">
                    {{Form::label('2pcabins', 'How many 2 person cabins')}}
                    {{Form::text('2pcabins', $yachttype->cabins2p, ['class' => 'form-control'])}}    
                </div>
                <div class="form-group">
                    {{Form::label('beds', 'How many beds')}}
                    {{Form::text('beds', $yachttype->beds, ['class' => 'form-control'])}}
                </div>
                <div class="form-group">
                    {{Form::label('toilets', 'How many toilets')}}
                    {{Form::text('toilets', $yachttype->toilets, ['class' => 'form-control'])}}
                </div>
                <div class="form-group">
                    {{Form::label('showers', 'How many showers')}}
                    {{Form::text('showers', $yachttype->showers, ['class' => 'form-control'])}}
                
                </div>
                <div class="form-group">
                    {{Form::label('gear', 'Gear')}}
                    {{Form::textarea('gear', $yachttype->gear, ['class' => 'form-control'])}}
                    
                </div>
                <div class="form-group">
                    {{Form::label('text', 'text')}}
                    {{Form::textarea('text', $yachttype->text, ['class' => 'form-control'])}}      
                </div>
                {{Form::hidden('_method', 'PUT')}}
                {{Form::submit('Save changes',['class' => 'btn btn-primary'])}}
            {!! Form::close() !!}
        </div>
    </div>
    
@endsection