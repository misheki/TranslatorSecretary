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
                                {{ Form::text('name', old('name'), ['class' => 'form-control', 'id' => 'name', 'required', 'autofocus']) }}

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                {{ Form::email('email', old('email'), ['class' => 'form-control', 'id' => 'email', 'required']) }}

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
                                {{ Form::password('password', ['class' => 'form-control', 'id' => 'password', 'required']) }}

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirmation" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                {{ Form::password('password_confirmation', ['class' => 'form-control', 'id' => 'password_confirmation', 'required']) }}
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                            <label for="address" class="col-md-4 control-label">Address</label>

                            <div class="col-md-6">
                                {{ Form::text('address', old('address'), ['class' => 'form-control', 'id' => 'address', 'placeholder' => 'Unit # Street Name and Number']) }}

                                @if ($errors->has('address'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('state') ? ' has-error' : '' }}">
                            <label for="state" class="col-md-4 control-label">State</label>

                            <div class="col-md-6">
                                {{ Form::select('state', [ 
                                    'Johor' => 'JH',
                                    'Kedah' => 'KH',
                                    'Kelantan' => 'KN',
                                    'Kuala Lumpur' => 'KL',
                                    'Labuan' => 'LA',
                                    'Melaka' => 'ME',
                                    'Negeri Sembilan' => 'NS',
                                    'Pahang' => 'PH',
                                    'Perak' => 'PK',
                                    'Perlis'  => 'PL',
                                    'Penang' => 'PG',
                                    'Putrajaya' => 'PJ',
                                    'Sabah' => 'SA',
                                    'Sarawak' => 'SK',
                                    'Selangor' => 'SL',
                                    'Terengganu' => 'TE',
                                  ], null, ['placeholder' => 'Select...']) }}

                                @if ($errors->has('address'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('contactnum') ? ' has-error' : '' }}">
                            <label for="zipcode" class="col-md-4 control-label">Post Code</label>

                            <div class="col-md-6">
                                {{ Form::number('zipcode', old('zipcode'), ['class' => 'form-control', 'id' => 'zipcode']) }}

                                @if ($errors->has('zipcode'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('zipcode') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('contactnum') ? ' has-error' : '' }}">
                            <label for="contactnum" class="col-md-4 control-label">Contact No.</label>

                            <div class="col-md-6">
                                {{ Form::number('contactnum', old('contactnum'), ['class' => 'form-control', 'id' => 'contactnum']) }}

                                @if ($errors->has('contactnum'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('contactnum') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('sex') ? ' has-error' : '' }}">
                            <label for="sex" class="col-md-4 control-label">Sex</label>

                            <div class="col-md-6">
                                {{ Form::radio('sex', 'male') }} Male<br>
                                {{ Form::radio('sex', 'female') }} Female

                                @if ($errors->has('sex'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('sex') }}</strong>
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
