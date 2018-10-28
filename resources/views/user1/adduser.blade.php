@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">ADD USER</div>
                	<div class="content">
                        <form method="POST" action="{{route('adduser.store')}}">
                            {{ csrf_field() }}

                            <div class="flash-message" role="alert">
                                @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                                    @if(Session::has('alert-' . $msg))

                                    <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
                                    @endif
                                @endforeach
                            </div>

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Purpose</label>
                                        <textarea id="sr_purpose" rows="5" class="form-control border-input" placeholder="Here can be your description" name="sr_purpose" value="{{ old('sr_purpose') }}" ></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Status</label>
                                        <input id="sr_status" class="form-control border-input" placeholder="Approve" name="sr_status" value="New" readonly >
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>GL Code</label>
                                        <input id="GLCode" class="form-control border-input" placeholder="ABC123" name="GLCode" value="{{ old('GLCode') }}" required>
                                    </div>
                                </div>
                                
                            </div>
                            
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Created By</label>
                                        <input id="sr_created_by" class="form-control border-input" name="sr_created_by" value="{{Auth::user()->first_name}} {{Auth::user()->last_name}}" readonly>
                                    </div>
                                </div>
                                
                                <!-- <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Created At</label>
                                        <input id="sr_created_at" type="date" class="form-control border-input" placeholder="Date" name="sr_created_at" value="{{ old('sr_created_at') }}"  disabled>
                                    </div>
                                </div> -->
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Approved By</label>
                                        <input id="approved_by" class="form-control border-input" name="approved_by" value="-"  readonly>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        
                                        <label>Approved At</label>
                                        <input id="approved_at" type="date" class="form-control border-input" placeholder="Date" name="approved_at" value="-"  readonly>
                                    </div>
                                </div>

                            </div>

                            <!-- insert user id -->
                             <input id="user_id" name="user_id" type="hidden" value="{{Auth::user()->id}}">


                            
                            <div class="text-center">
                                <button type="submit" class="btn btn-success btn-fill btn-wd">Submit</button>
                                <button type="reset" class="btn btn-primary btn-fill btn-wd">Reset</button>
                            </div>
                            <div class="clearfix"></div>
                        </form>
                    </div>


              
        	</div>
    	</div>
	</div>
</div>
@endsection


