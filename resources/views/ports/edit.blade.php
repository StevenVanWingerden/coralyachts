@extends('layouts/app')


@section('content')
    <a href="/ports" class="btn btn-default"><em>Go back</em></a>
    <div class="card">
    <div class="card-header"><h4><strong>Edit {{$port->name}}</strong></h4></div>
        <div class="container">
        {!! Form::open(['action' => ['PortsController@update', $port->id], 'method' => 'POST']) !!}
            <div class="form-group">
                {{Form::label('name', 'Name')}}
                {{Form::text('name', $port->name, ['class' => 'form-control'])}}
            </div>
            <div class="form-group">
                {{Form::label('city', 'City')}}
                {{Form::text('city', $port->city, ['class' => 'form-control'])}}    
            </div>
            <div class="form-group">
                {{Form::label('country', 'Country')}}
                {{Form::text('country', $port->country, ['class' => 'form-control', 'maxlength'=>'2'])}}    
            </div>
            <div class="form-group">
                {{Form::label('contactperson', 'Contactperson')}}
                {{Form::text('contactperson', $port->contactperson, ['class' => 'form-control'])}}    
            </div>
            <div class="form-group">
                {{Form::label('contactphone', 'Contactphone')}}
                {{Form::text('contactphone', $port->contactphone, ['class' => 'form-control'])}}    
            </div>
            <div class="form-group">
                {{Form::label('contactemail', 'Contactemail')}}
                {{Form::text('contactemail', $port->contactemail, ['class' => 'form-control'])}}    
            </div>
            <div class="form-group">
                {{Form::label('facilities', 'Facilities')}}
                {{Form::textarea('facilities', $port->facilities, ['class' => 'form-control'])}}    
            </div>
            <div class="form-group">
                {{Form::label('directions', 'Directions')}}
                {{Form::textarea('directions', $port->directions, ['class' => 'form-control'])}}    
            </div>
            <div class="form-group">
                {{Form::label('parking', 'Parking')}}
                {{Form::textarea('parking', $port->parking, ['class' => 'form-control'])}}    
            </div>
            <div class="form-group">
                {{Form::label('catering', 'Catering')}}<br>
                {{Form::radio('catering', 'Y', ['class' => 'form-control'])}} Yes<br>
                {{Form::radio('catering', 'N', ['class' => 'form-control'])}} No 
            </div>
            <div class="form-group">
                {{Form::label('skipper', 'Skipper')}}<br>
                {{Form::radio('skipper', 'Y', ['class' => 'form-control'])}} Yes<br>
                {{Form::radio('skipper', 'N', ['class' => 'form-control'])}} No 
            </div>
            <div class="form-group">
                {{Form::label('flottielje', 'Flottielje')}}<br>
                {{Form::radio('flottielje', 'Y', ['class' => 'form-control'])}} Yes<br>
                {{Form::radio('flottielje', 'N', ['class' => 'form-control'])}} No 
            </div>
            <div class="form-group">
                {{Form::label('groceries', 'Groceries')}}<br>
                {{Form::radio('groceries', 'Y', ['class' => 'form-control'])}} Yes<br>
                {{Form::radio('groceries', 'N', ['class' => 'form-control'])}} No 
            </div>
            <div class="form-group">
                {{Form::label('transfer', 'Transfer')}}<br>
                {{Form::radio('transfer', 'Y', ['class' => 'form-control'])}} Yes<br>
                {{Form::radio('transfer', 'N', ['class' => 'form-control'])}} No 
            </div>
            {{Form::hidden('_method', 'PUT')}}
            {{Form::submit('Save changes',['class' => 'btn btn-primary'])}}
        {!! Form::close() !!}
        </div>
    </div>
    
@endsection