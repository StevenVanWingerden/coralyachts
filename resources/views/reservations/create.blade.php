@extends('layouts/app')


@section('content')
    <h1>Create Reservation</h1>
    {!! Form::open(['action' => 'ReservationsController@store', 'method' => 'POST']) !!}
        <div class="form-group">
            <label for="customer-list">Customer</label><br>
            <select name="customer-list">
                @foreach ($customers as $customer)
                    <option name="customer{{$customer->id}}" value="{{$customer->id}}">{{$customer->firstname}} {{$customer->lastname}}</option>
                @endforeach
            </select>        
        </div>
        <div class="form-group">
            <label for="yacht-list">Yacht</label><br>
            <select name="yacht-list">
                @foreach ($yachts as $yacht)
                    <option name="yacht{{$yacht->id}}" value="{{$yacht->id}}">{{$yacht->name}}</option>
                @endforeach
            </select>        
        </div>

        <div class="form-group">
            {{Form::label('status', 'Status')}}<br>
            {{Form::select('status',['Reserved' => 'Reserved', 'Active' => 'Active', 'Completed' => 'Completed'])}}    
        </div>
        <div class="form-group">
            {{Form::label('code', 'Code')}}
            {{Form::text('code', '', ['class' => 'form-control'])}}    
        </div>

        {{Form::submit('Create Reservation',['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}
    
@endsection