@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Clients</h2><br/>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Add New Client</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('clients.index') }}"> Back</a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {!! Form::open(['route'=>'clients.store']) !!}
    @csrf

    <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
        {!! Form::label('Name:') !!}
        {!! Form::text('name', old('name'), ['class'=>'form-control', 'placeholder'=>'Client Name']) !!}
        <span class="text-danger">{{ $errors->first('name') }}</span>
    </div>

    <div class="form-group {{ $errors->has('code') ? 'has-error' : '' }}">
        {!! Form::label('Code:') !!}
        {!! Form::text('code', old('code'), ['class'=>'form-control', 'placeholder'=>'Client Code']) !!}
        <span class="text-danger">{{ $errors->first('code') }}</span>
    </div>

    <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
        {!! Form::label('Email:') !!}
        {!! Form::text('email', old('email'), ['class'=>'form-control', 'placeholder'=>'Billing Email']) !!}
        <span class="text-danger">{{ $errors->first('email') }}</span>
    </div>

    <div class="form-group {{ $errors->has('address') ? 'has-error' : '' }}">
        {!! Form::label('Address:') !!}
        {!! Form::text('address', old('address'), ['class'=>'form-control', 'placeholder'=>'Address']) !!}
        <span class="text-danger">{{ $errors->first('address') }}</span>
    </div>

    <div class="form-group {{ $errors->has('country') ? 'has-error' : '' }}">
        {!! Form::label('Country:') !!}
        {!! Form::text('country', 'Malaysia', ['class'=>'form-control', 'placeholder'=>'Malaysia']) !!}
        <span class="text-danger">{{ $errors->first('country') }}</span>
    </div>

    <div class="form-group {{ $errors->has('website') ? 'has-error' : '' }}">
        {!! Form::label('Website:') !!}
        {!! Form::text('website', old('website'), ['class'=>'form-control', 'readonly'=>'true']) !!}
        <span class="text-danger">{{ $errors->first('website') }}</span>
    </div>

    <div class="form-group">
        <button class="btn btn-success">Save New Client</button>
    </div>


    {!! Form::close() !!}

    </div>
</div>
@endsection
