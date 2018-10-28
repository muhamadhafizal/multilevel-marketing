@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="tree">
          <ul>
            @if(count($parent))
            <li>
                {{$user->name}}
                <ul>
                    @foreach($parent as $data)
                        <li>
                            {{$data->name}}
                             <ul>
                                @if(count($parent1))
                                    @foreach($parent1 as $data)
                                     <li>
                                        {{$data->name}}
                                    </li>
                                    @endforeach
                                @else
                                <p> No User Found</p>
                                @endif
                            </ul>    
                        </li>
                    @endforeach
                </ul>
            </li>
             @else
                <p> No User Found </p>
             @endif
          </ul>
        </div>
    </div>   
   </div>
@endsection



