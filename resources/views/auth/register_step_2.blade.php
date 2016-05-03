@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register Step 2</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                        {!! csrf_field() !!}

                        <div class="form-group{{ $errors->has('country') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Country</label>
                                    
                            <div class="col-md-6">
                                <select name="country" class="form-control">
                                    <option value="Pakistan">Pakistan</option>
                                    <option value="China">China</option>
                                    <option value="USA">USA</option>
                                </select>

<!--                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('fname') }}</strong>
                                    </span>
                                @endif-->
                            </div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('postal_code') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Postal Code</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="postal_code" value="{{ old('postal_code') }}">

                                @if ($errors->has('postal_code'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('postal_code') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Title</label>

                            <div class="col-md-6">
                                <input type="email" class="form-control" name="title" value="{{ old('title') }}">

                                @if ($errors->has('title'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('company') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Company</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="company">

                                @if ($errors->has('company'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('company') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('currently') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">I am currently:</label>

                            <div class="col-md-2 radio">
                                <input class="radio_box" type="radio" name="job_type" value="0" id="job_type" onclick="employed_options()" checked> Employed
                                
<!--                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif-->
                            </div>
                            <div class="col-md-2 radio">
                                <input class="radio_box" type="radio" name="job_type" value="1" id="job_type" onclick="job_seeker_options()"> Job Seeker
                            </div>
                            <div class="col-md-2 radio">
                                <input class="radio_box" type="radio" name="job_type" value="2" id="job_type" onclick="student_options()"> Student
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('self_emp') ? ' has-error' : '' }}">
                            <div class="col-md-4"></div>
                            <div class="col-md-6 radio">
                                <input class="check_box" type="checkbox" name="self_employee" value="1">I am self-employed
                            </div>
                            
                        </div>
                        <div class="form-group{{ $errors->has('self_emp') ? ' has-error' : '' }}">
                            <div class="col-md-4"></div>
                            <div class="col-md-6 radio">
                                <input class="check_box" type="checkbox" name="self_employee" value="1">I am self-employed
                            </div>
                            
                        </div>    
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i>Register
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
