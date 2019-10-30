@extends('layouts/app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h4>Dashboard</h4></div>

                <div class="panel-body">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">
                            Element
                        </th>
                        <th scope="col">
                            Amount
                        </th>
                    </tr>
                    </thead>
                    <tr>
                        <td>
                            Ports
                        </td>
                        <td>
                            {{$ports->count()}}
                        </td>
                        <td>
                            <a href="/ports">View all</a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                             Yachttypes
                        </td>
                        <td>
                             {{$yachttypes->count()}}
                         </td>
                        <td>
                            <a href="/yachttypes">View all</a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Yachts
                        </td>
                        <td>
                            {{$yachts->count()}}
                        </td>
                        <td>
                            <a href="/yachts">View all</a>
                        </td>
                    </tr>
                </table>
                    
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
