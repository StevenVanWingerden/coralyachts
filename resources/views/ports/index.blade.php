@extends('layouts/app')

@section('content')
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h4>Ports ({{ $portsAmount }})</h4>
                    </div>
    
                    <div class="panel-body">
                        @if (count($ports) > 0)
                        <table class="table">
                        @foreach ($ports as $port)
                            <tr>
                                <td><a href="/ports/{{$port->id}}">{{ $port->name }}</a></td>
                                <td>
                                    <a href="/ports/{{$port->id}}/edit" class="btn btn-primary">Edit</a>
                                </td>
                                <td>
                                    <span class="table-remove">
                                        {!!Form::open(['action' =>['PortsController@destroy', $port->id], 'method' => 'POST'])!!}
                                            {{Form::hidden('_method', 'DELETE')}}
                                            {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                                        {!!Form::close()!!}
                                    </span>
                                </td>                                
                            </tr>
                        @endforeach
                        @if ($portsAmount>4)
                        <tr>
                            <td>{{$ports->links()}}</td>
                        </tr>                        
                        @endif
                        <tr>
                            <td>
                                <a href="ports/create" class="btn btn-primary">Add new port</a>
                            </td>
                        </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    @else
        <p>No ports found</p>
        
    @endif
    
@endsection