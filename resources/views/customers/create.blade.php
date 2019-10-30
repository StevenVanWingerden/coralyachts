@extends('layouts/app')


@section('content')
    <a href="/customers" class="btn btn-default"><em>Go back</em></a>
    <div class="card">
    <h1><strong>Create Customer</strong></h1>
        <div class="container">
        {!! Form::open(['action' => 'CustomersController@store', 'method' => 'POST']) !!}
            <div class="form-group">
                {{Form::label('firstname', 'First name')}}
                {{Form::text('firstname', '', ['class' => 'form-control'])}}
            </div>
            <div class="form-group">
                {{Form::label('lastname', 'Last name')}}
                {{Form::text('lastname', '', ['class' => 'form-control'])}}    
            </div>
            <div class="form-group">
                {{Form::label('adress', 'Adress')}}
                {{Form::text('adress', '', ['class' => 'form-control'])}}    
            </div>
            <div class="form-group">
                {{Form::label('zipcode', 'Zipcode')}}
                {{Form::text('zipcode', '', ['class' => 'form-control'])}}    
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
                {{Form::label('phone', 'Phone')}}
                {{Form::text('phone', '', ['class' => 'form-control'])}}    
            </div>
            <div class="form-group">
                {{Form::label('email', 'Email')}}
                {{Form::text('email', '', ['class' => 'form-control'])}}    
            </div>
            <div class="form-group">
                {{Form::label('internalnotes', 'Internal Notes')}}
                {{Form::textarea('internalnotes', '', ['class' => 'form-control'])}}    
            </div>
            {{Form::submit('Submit',['class' => 'btn btn-primary'])}}
        {!! Form::close() !!}
        </div>
    </div>
    
@endsection