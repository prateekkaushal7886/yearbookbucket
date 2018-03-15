@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
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
                        <div class="form-group{{ $errors->has('hor') ? ' has-error' : '' }}">
                            <label for="hor" class="col-md-4 control-label">HOR</label>

                            <div class="col-md-6">
                                <input id="hor" type="text" class="form-control" name="hor" value="{{ old('hor') }}" required autofocus>

                                @if ($errors->has('hor'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('hor') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                            <label for="phone" class="col-md-4 control-label">Phone</label>

                            <div class="col-md-6">
                                <input id="phone" type="text" class="form-control" name="phone" value="{{ old('phone') }}" required autofocus>

                                @if ($errors->has('phone'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('phone') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div><div class="form-group{{ $errors->has('dob') ? ' has-error' : '' }}">
                            <label for="dob" class="col-md-4 control-label">DOB(DD-MM-YYYY)</label>

                            <div class="col-md-6">
                                <input id="dob" type="text" class="form-control" name="dob" value="{{ old('dob') }}" required autofocus>

                                @if ($errors->has('dob'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('dob') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('department') ? ' has-error' : '' }}">
                            <label for="department" class="col-md-4 control-label">Department</label>

                            <div class="col-md-6">
                                <input id="department" type="text" class="form-control" name="department" value="{{ old('department') }}" required autofocus>

                                @if ($errors->has('department'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('department') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="rollno" class="col-md-4 control-label">Roll No</label>

                            <div class="col-md-6">
                                <input id="rollno" type="text" class="form-control" name="rollno" value="{{ old('rollno') }}" required autofocus>

                                @if ($errors->has('rollno'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('rollno') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('course') ? ' has-error' : '' }}">
                            <label for="course" class="col-md-4 control-label">Course</label>

                            <div class="col-md-6">
                                <input id="course" type="text" class="form-control" name="course" value="{{ old('course') }}" required autofocus>

                                @if ($errors->has('course'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('course') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('email_insti') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Insti</label>

                            <div class="col-md-6">
                                <input id="email_insti" type="email" class="form-control" name="email_insti" value="{{ old('email_insti') }}" required>

                                @if ($errors->has('email_insti'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email_insti') }}</strong>
                                </span>
                                @endif
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
