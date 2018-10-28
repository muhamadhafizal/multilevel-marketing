@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">

                <div class="panel-heading"> MLM APPLICATION <span class="pull-right">
                    
                        @if($total < 3)
                            <a href="{{action('UserController@index')}}" class="btn btn-sucess btn-xs">Add Down Link</a>
                        @else
                            <a>Limit For 3 User</a>
                        @endif
                   
                        <a href="{{action('HomeController@view')}}" class="btn btn-sucess btn-xs">All User</a>
                        <a href="{{action('AKController@view' )}}" class="btn btn-xs">KHIRAT KEMATIAN</a>
                        <a href="{{action('AKController@relation')}}" class="btn btn-xs">RELATION</a>
                </span></div>

                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tbody>
                                <tr>
                                    <td> USER ID </td>
                                    <td> {{ Auth::user()->id}} </td>
                                </tr>
                                <tr>
                                   <td> NAME </td>
                                   <td> {{ Auth::user()->name }} </td> 
                                </tr>
                                <tr>
                                    <td> EMAIL </td>
                                    <td> {{ Auth::user()->email}} </td>
                                </tr>
                                <tr>
                                    <td> PARENT </td>
                                    <td> {{ Auth::user()->parentid}} </td>
                                </tr>
                                <tr>
                                    <td> HEAD </td>
                                    <td> {{ Auth::user()->headid}} </td>
                                </tr>
                                 <tr>
                                    <td> BONUS </td>
                                    <td> {{ number_format(Auth::user()->profit,2, '.','.') }} </td>
                                </tr>
                            
                            </tbody>
                        </thead>
                    </table>
                
            </div>
        </div>
    </div>
</div>
@endsection


