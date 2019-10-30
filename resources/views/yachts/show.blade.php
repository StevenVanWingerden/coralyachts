@extends('layouts/app')


@section('content')
    <a href="/yachts" class="btn btn-default"><em>Go back</em></a>
    <div class="card">
        <div class="card-header"><h4><strong>{{$yacht->name}}</strong></h4></div>
        <table class="table">
            <tr>
                <td>Yacht type</td>
                <td>{{$yacht->yacht_type_id}}</td>
            </tr>
            <tr>
                <td>Port:</td>
                <td>{{$yacht->port_id}}</td>
            </tr>
            <tr>
                <td>Status:</td>
                <td>{{$yacht->status}}</td>
            </tr>
            <tr>
                <td>Code:</td>
                <td>{{$yacht->code}}</td>
            </tr>
        </table>
    </div>

@endsection