@extends('layouts/app')

@section('content')
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h4>Customers ({{ $customersAmount }})</h4>
                    </div>
    
                    <div class="panel-body">
                        @if (count($customers) > 0)
                        <table class="table">
                        @foreach ($customers as $customer)
                            <tr>
                                <td><a href="/customers/{{$customer->id}}">{{ $customer->firstname }} {{$customer->lastname}}</a></td>
                                <td>
                                    <a href="/customers/{{$customer->id}}/edit" class="btn btn-primary">Edit</a>
                                </td>
                                <td>
                                    <span class="table-remove">
                                        {!!Form::open(['action' =>['CustomersController@destroy', $customer->id], 'method' => 'POST'])!!}
                                            {{Form::hidden('_method', 'DELETE')}}
                                            {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                                        {!!Form::close()!!}
                                    </span>
                                </td>                                
                            </tr>
                        @endforeach
                        @if ($customersAmount>4)
                        <tr>
                            <td>{{$customers->links()}}</td>
                        </tr>                        
                        @endif
                        <tr>
                            <td>
                                <a href="customers/create" class="btn btn-primary">Add new customer</a>
                            </td>
                        </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    @else
        <p>No customers found</p>
        <tr>
            <td>
                <a href="customers/create" class="btn btn-primary">Add new customer</a>
            </td>
        </tr>
        
    @endif
    
@endsection