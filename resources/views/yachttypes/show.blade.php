@extends('layouts/app')


@section('content')
    <a href="/yachttypes" class="btn btn-default"><em>Go back</em></a>
    <div class="card">
    <div class="card-header"><h4><strong>{{$yachttype->name}}</strong></h4></div>
    <table class="table">
        <tr>
            <td>Type:</td>
            <td>{{$yachttype->type}}</td>
        </tr>
        <tr>
            <td>Length:</td>
            <td>{{$yachttype->length}}</td>
        </tr>
        <tr>
            <td>Depth:</td>
            <td>{{$yachttype->depth}}</td>
        </tr>
        <tr>
            <td>Engine:</td>
            <td>{{$yachttype->engine}}</td>
        </tr>
        <tr>
            <td>Sail:</td>
            <td>{{$yachttype->sail}}</td>
        </tr>
        <tr>
            <td>1 person cabins:</td>
            <td>{{$yachttype->cabins1p}}</td>
        </tr>
        <tr>
            <td>2 person cabins:</td>
            <td>{{$yachttype->cabins2p}}</td>
        </tr>
        <tr>
            <td>Beds:</td>
            <td>{{$yachttype->beds}}</td>
        </tr>
        <tr>
            <td>Toilets:</td>
            <td>{{$yachttype->toilets}}</td>
        </tr>
        <tr>
            <td>Showers:</td>
            <td>{{$yachttype->showers}}</td>
        </tr>
        <tr>
            <td>Gear:</td>
            <td>{{$yachttype->gear}}</td>
        </tr>
        <tr>
            <td>Text:</td>
            <td>{{$yachttype->text}}</td>
        </tr>
    </table>
    </div>
@endsection