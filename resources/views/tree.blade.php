@extends('layouts.app')

@section('content')

 <div id="treePane">
  @if(count($user))
  <ul>
  	<!--dekat sini loop -->
    @foreach($user as $data)
   <li><label class="node">{{$data->id}}</label>
    <ul>
    	<!-- dekat sini loop anak dia -->
      @foreach($user1 as $data1)
      @if($data->id == $data1->parentid)

        <li>{{$data1->name}}</li>
      @endif
     
      @endforeach
    </ul>
  </li>
    @endforeach
  </ul>
  
  @else
  <p> No User Found </p>
  @endif
 </div>

 @endsection


 
