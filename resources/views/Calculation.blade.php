@extends('layouts.app')

@section('content')
<div class="container">
 <div class="row">
        <div class="col-md-8 col-md-offset-2">
        	<div class="panel panel-default">

        		 {!!Form::open(['action' => 'HomeController@store','method' => 'POST'])!!}
                    	{{Form::bsText('fee' , '',['placeholder' => 'FEE'])}}
                   
                        {{Form::bsSubmit('submit')}}
                 {!! Form::close() !!}
        	</div>
    	</div>
  </div>
</div>
@endsection


