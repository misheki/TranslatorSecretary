<div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
    <label for="name">Name:</label>
    {!! Form::text('name', (isset($client->name) ? $client->name : old('name')) , ['class'=>'form-control', 'placeholder'=>'Name']) !!}
    <span class="text-danger">{{ $errors->first('name') }}</span>
</div>

<div class="form-group {{ $errors->has('code') ? 'has-error' : '' }}">
    {!! Form::label('Code:') !!}
    {!! Form::text('code', (isset($client->code) ? $client->code : old('code')) , ['class'=>'form-control', 'placeholder'=>'Client Code']) !!}
    <span class="text-danger">{{ $errors->first('code') }}</span>
</div>

<div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
    {!! Form::label('Email:') !!}
    {!! Form::text('email', (isset($client->email) ? $client->email : old('email')), ['class'=>'form-control', 'placeholder'=>'Billing Email']) !!}
    <span class="text-danger">{{ $errors->first('email') }}</span>
</div>

<div class="form-group {{ $errors->has('address') ? 'has-error' : '' }}">
    {!! Form::label('Address:') !!}
    {!! Form::text('address', (isset($client->address) ? $client->address : old('address')), ['class'=>'form-control', 'placeholder'=>'Address']) !!}
    <span class="text-danger">{{ $errors->first('address') }}</span>
</div>

<div class="form-group {{ $errors->has('country') ? 'has-error' : '' }}">
    {!! Form::label('Country:') !!}
    {!! Form::text('country', 'Malaysia', ['class'=>'form-control', 'placeholder'=>'Malaysia']) !!}
    <span class="text-danger">{{ $errors->first('country') }}</span>
</div>

<div class="form-group {{ $errors->has('website') ? 'has-error' : '' }}">
    {!! Form::label('Website:') !!}
    {!! Form::text('website', (isset($client->website) ? $client->website : old('website')), ['class'=>'form-control', 'placeholder'=>'Website']) !!}
    <span class="text-danger">{{ $errors->first('website') }}</span>
</div>