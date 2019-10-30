@extends('layouts/app')


@section('content')
    <a href="/customers" class="btn btn-default"><em>Go back</em></a>
    <div class="card">
    <div class="card-header"><h4><strong>Edit {{$customer->firstname}} {{$customer->lastname}}</strong></h4></div>
        <div class="container">
        {!! Form::open(['action' => ['CustomersController@update', $customer->id], 'method' => 'POST']) !!}
            <div class="form-group">
                {{Form::label('firstname', 'First name')}}
                {{Form::text('firstname', $customer->firstname, ['class' => 'form-control'])}}
            </div>
            <div class="form-group">
                {{Form::label('lastname', 'Last name')}}
                {{Form::text('lastname', $customer->lastname, ['class' => 'form-control'])}}    
            </div>
            <div class="form-group">
                {{Form::label('adress', 'Adress')}}
                {{Form::text('adress', $customer->adress, ['class' => 'form-control'])}}    
            </div>
            <div class="form-group">
                {{Form::label('zipcode', 'Zipcode')}}
                {{Form::text('zipcode', $customer->zipcode, ['class' => 'form-control'])}}    
            </div>
            <div class="form-group">
                {{Form::label('city', 'City')}}
                {{Form::text('city', $customer->city, ['class' => 'form-control'])}}    
            </div>
            <div class="form-group">
                {{Form::label('country', 'Country')}}
                {{Form::text('country', $customer->country, ['class' => 'form-control', 'maxlength'=>'2'])}}    
            </div>
            <div class="form-group">
                {{Form::label('phone', 'Phone')}}
                {{Form::text('phone', $customer->phone, ['class' => 'form-control'])}}    
            </div>
            <div class="form-group">
                {{Form::label('email', 'Email')}}
                {{Form::text('email', $customer->email, ['class' => 'form-control'])}}    
            </div>
            <div class="form-group">
                {{Form::label('internalnotes', 'Internal Notes')}}
                {{Form::textarea('internalnotes', $customer->internalNotes, ['class' => 'form-control'])}}    
            </div>
            {{Form::hidden('_method', 'PUT')}}
            {{Form::submit('Save changes',['class' => 'btn btn-primary'])}}
        {!! Form::close() !!}
        </div>
    </div>
    
@endsection