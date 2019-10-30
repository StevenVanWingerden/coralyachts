@extends('layouts/app')


@section('content')
    <a href="/customers" class="btn btn-default"><em>Go back</em></a>
    <div class="card">
        <div class="card-header"><h4><strong>{{$customer->firstname}} {{$customer->lastname}}</strong></h4></div>
        <table class="table">
            <tr>
                <td>First name:</td>
                <td>{{$customer->firstname}}</td>
            </tr>
            <tr>
                <td>Last name:</td>
                <td>{{$customer->lastname}}</td>
            </tr>
            <tr>
                <td>Adress:</td>
                <td>{{$customer->adress}}</td>
            </tr>
            <tr>
                <td>Zipcode:</td>
                <td>{{$customer->zipcode}}</td>
            </tr>
            <tr>
                <td>City:</td>
                <td>{{$customer->city}}</td>
            </tr>
            <tr>
                <td>Country:</td>
                <td>{{$customer->country}}</td>
            </tr>
            <tr>
                <td>Phone:</td>
                <td>{{$customer->phone}}</td>
            </tr>
            <tr>
                <td>Email:</td>
                <td>{{$customer->email}}</td>
            </tr>
            <tr>
                <td>Internal Notes:</td>
                <td>{{$customer->internalNotes}}</td>
            </tr>
        </table>
    </div>

@endsection