@extends('layouts.app')

@section('content')
	<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('adduser') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                                      
                        <div class="form-group{{ $errors->has('parentid') ? ' has-error' : '' }}">
                            <label for="parentid" class="col-md-4 control-label">PARENT ID</label>
                         
                            <div class="col-md-6">
                                <input id="parentid" type="text" class="form-control" name="parentid" value="{{$user}}" readonly="readonly" required autofocus>

                                 @if ($errors->has('parentid'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('parentid') }}</strong>
                                    </span>
                                @endif

                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('headid') ? ' has-error' : '' }}">
                            <label for="headid" class="col-md-4 control-label">HEAD ID</label>

                            <div class="col-md-6">
                                <input id="headid" type="text" class="form-control" name="headid" value="{{$user1}}" readonly="readonly" required autofocus>

                                 @if ($errors->has('headid'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('headid') }}</strong>
                                    </span>
                                @endif

                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('balance') ? ' has-error' : '' }}">
                            <label for="balance" class="col-md-4 control-label">FEE</label>

                            <div class="col-md-6">
                                <input id="balance" type="text" class="form-control" name="balance" value="{{ old('balance') }}" placeholder="RM" required autofocus>

                                 @if ($errors->has('balance'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('balance') }}</strong>
                                    </span>
                                @endif

                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                       
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


