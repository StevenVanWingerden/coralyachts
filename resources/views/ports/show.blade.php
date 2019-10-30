@extends('layouts/app')


@section('content')
    <a href="/ports" class="btn btn-default"><em>Go back</em></a>
    <div class="card">
        <div class="card-header"><h4><strong>{{$port->name}}</strong></h4></div>
            <table class="table">
                <tr>
                    <td>City:</td>
                    <td>{{$port->city}}</td>
                </tr>
                <tr>
                    <td>Country:</td>
                    <td>{{$port->country}}</td>
                </tr>
                <tr>
                    <td>Contactperson:</td>
                    <td>{{$port->contactperson}}</td>
                </tr>
                <tr>
                    <td>Contactphone:</td>
                    <td>{{$port->contactphone}}</td>
                </tr>
                <tr>
                    <td>Contactemail:</td>
                    <td>{{$port->contactemail}}</td>
                </tr>
                <tr>
                    <td>Facilities:</td>
                    <td>{{$port->facilities}}</td>
                </tr>
                <tr>
                    <td>Directions:</td>
                    <td>{{$port->directions}}</td>
                </tr>
                <tr>
                    <td>Parking:</td>
                    <td>{{$port->parking}}</td>
                </tr>
                <tr>
                    <td>Catering:</td>
                    <td>{{$port->catering}}</td>
                </tr>
                <tr>
                    <td>Skipper:</td>
                    <td>{{$port->skipper}}</td>
                </tr>
                <tr>
                    <td>Flottielje:</td>
                    <td>{{$port->flottielje}}</td>
                </tr>
                <tr>
                    <td>Groceries:</td>
                    <td>{{$port->groceries}}</td>
                </tr>
                <tr>
                    <td>Transfer:</td>
                    <td>{{$port->transfer}}</td>
                </tr>
            </table>
    </div>

@endsection