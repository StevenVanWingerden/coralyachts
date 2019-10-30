@extends('layouts/app')

@section('content')
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                    <h4>Yachts ({{ $yachtsAmount }})</h4>
                    </div>
    
                    <div class="panel-body">
                        @if (count($yachts) > 0)
                        <table class="table">
                            <thead>
                                <th>
                                    Name
                                </th>
                                <th>
                                    Status
                                </th>
                            </thead>
                        @foreach ($yachts as $yacht)
                            <tr>
                                <td>
                                    <a href="/yachts/{{$yacht->id}}">{{ $yacht->name }}</a>
                                </td>
                                <td>
                                    {{$yacht->status}}
                                </td>
                                <td>
                                    {!! Form::open(['action' => ['YachtsController@update_rent', $yacht->id], 'method' => 'POST']) !!}
                                        {{Form::hidden('_method', 'PUT')}}
                                        {{Form::submit('Rent',['class' => 'btn btn-primary'])}}
                                    {!! Form::close() !!}
                                </td>
                                <td>
                                    <a href="/yachts/{{$yacht->id}}/edit" class="btn btn-primary">Edit</a>
                                </td>
                                <td>
                                    <span class="table-remove">
                                        {!!Form::open(['action' =>['YachtsController@destroy', $yacht->id], 'method' => 'POST'])!!}
                                            {{Form::hidden('_method', 'DELETE')}}
                                            {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                                        {!!Form::close()!!}
                                    </span>
                                </td>                                
                            </tr>
                        @endforeach
                        @if ($yachtsAmount>4)
                        <tr>
                            <td>{{$yachts->links()}}</td>
                        </tr>
                        @endif
                        <tr>
                            <td>
                                <a href="yachts/create" class="btn btn-primary">Add new yacht</a>
                            </td>
                        </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    @else
        <p>No yachts found</p>
        
    @endif
    
@endsection