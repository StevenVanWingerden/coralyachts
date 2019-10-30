@extends('layouts/app')


@section('content')
    <h1>Create Port</h1>
    {!! Form::open(['action' => 'PortsController@store', 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('name', 'Name')}}
            {{Form::text('name', '', ['class' => 'form-control'])}}

        </div>
        <div class="form-group">
            {{Form::label('city', 'City')}}
            {{Form::text('city', '', ['class' => 'form-control'])}}    
        </div>
        <div class="form-group">
            {{Form::label('country', 'Country')}}
            {{Form::text('country', '', ['class' => 'form-control', 'maxlength'=>'2'])}}    
        </div>
        <div class="form-group">
            {{Form::label('contactperson', 'Contactperson')}}
            {{Form::text('contactperson', '', ['class' => 'form-control'])}}    
        </div>
        <div class="form-group">
            {{Form::label('contactphone', 'Contactphone')}}
            {{Form::text('contactphone', '', ['class' => 'form-control'])}}    
        </div>
        <div class="form-group">
            {{Form::label('contactemail', 'Contactemail')}}
            {{Form::text('contactemail', '', ['class' => 'form-control'])}}    
        </div>
        <div class="form-group">
            {{Form::label('facilities', 'Facilities')}}
            {{Form::textarea('facilities', '', ['class' => 'form-control'])}}    
        </div>
        <div class="form-group">
            {{Form::label('directions', 'Directions')}}
            {{Form::textarea('directions', '', ['class' => 'form-control'])}}    
        </div>
        <div class="form-group">
            {{Form::label('parking', 'Parking')}}
            {{Form::textarea('parking', '', ['class' => 'form-control'])}}    
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
        {{Form::submit('submit',['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}
    
@endsection