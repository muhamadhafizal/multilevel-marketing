@extends('layouts.app')

@section('content')
<div class="container">

 <div class="row">
        <div class="col-md-8 col-md-offset-2">
        	<div class="panel panel-default">

        @if(count($user3))
                    <table class="table table-striped">
                        <tr>
                            <th>USER ID</th>
                            <th>NAME</th>
                            <th>EMAIL</th>
                            <th>BONUS</th>
                            <th>PARENTID</th>
                            <th>HEADID</th>
                            <th>RELATION</th>
                       

                        </tr>
                        @foreach($user3 as $data)
                            <tr>
                                <td>{{$data->userid}}</td>
                                <td>{{$data->name}}</td>
                                <td>{{$data->email}}</td>
                                <td>{{ number_format($data->profit,2, '.','.') }}</td>
                                <td>{{$data->parentid}}</td>
                                <td>{{$data->headid}}</td>
                                <td><a href="{{action('AKController@show', $data->id)}}" class="btn btn-success btn-xs">Show</a>
                             
                               
                            </tr>
                        @endforeach
                       
                    </table>
        @else
            <p> No User Found </p>

        @endif
        </div>
    </div>
  </div>
</div>
@endsection


