@extends('layouts/app')

@section('content')
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                    <h4>Yachttypes ({{ $yachttypesAmount }})</h4>
                    </div>
    
                    <div class="panel-body">
                        @if (count($yachttypes) > 0)
                        <table class="table">
                        @foreach ($yachttypes as $yachttype)
                            <tr>
                                <td><a href="/yachttypes/{{$yachttype->id}}">{{ $yachttype->name }}</a></td>
                                <td>
                                    <a href="/yachttypes/{{$yachttype->id}}/edit" class="btn btn-primary">Edit</a>
                                </td>
                                <td>
                                    <span class="table-remove">
                                        {!!Form::open(['action' =>['YachtTypesController@destroy', $yachttype->id], 'method' => 'POST'])!!}
                                            {{Form::hidden('_method', 'DELETE')}}
                                            {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                                        {!!Form::close()!!}
                                    </span>
                                </td>                                
                            </tr>
                        @endforeach
                        @if ($yachttypesAmount>4)
                        <tr>
                            <td>{{$yachttypes->links()}}</td>
                        </tr>
                        @endif
                        <tr>
                            <td>
                                <a href="yachttypes/create" class="btn btn-primary">Add new yachttype</a>
                            </td>
                        </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    @else
        <p>No yachttypes found</p>
        
    @endif
    
@endsection