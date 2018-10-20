<div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
    <label for="name">Name:</label>
    {!! Form::text('name', (isset($contactperson->name) ? $contactperson->name : old('name')) , ['class'=>'form-control', 'placeholder'=>'Name']) !!}
    <span class="text-danger">{{ $errors->first('name') }}</span>
</div>

<div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
    {!! Form::label('Email:') !!}
    {!! Form::text('email', (isset($contactperson->email) ? $contactperson->email : old('email')), ['class'=>'form-control', 'placeholder'=>'Billing Email']) !!}
    <span class="text-danger">{{ $errors->first('email') }}</span>
</div>

<div class="form-group {{ $errors->has('address') ? 'has-error' : '' }}">
    {!! Form::label('Address:') !!}
    {!! Form::text('address', (isset($contactperson->address) ? $contactperson->address : old('address')), ['class'=>'form-control', 'placeholder'=>'Address']) !!}
    <span class="text-danger">{{ $errors->first('address') }}</span>
</div>

<div class="form-group {{ $errors->has('phone') ? 'has-error' : '' }}">
    {!! Form::label('Phone:') !!}
    {!! Form::text('phone', (isset($contactperson->phone) ? $contactperson->phone : old('phone')) , ['class'=>'form-control', 'placeholder'=>'Phone Number']) !!}
    <span class="text-danger">{{ $errors->first('phone') }}</span>
</div>

<div class="form-group {{ $errors->has('mobile') ? 'has-error' : '' }}">
    {!! Form::label('Mobile:') !!}
    {!! Form::text('mobile', (isset($contactperson->mobile) ? $contactperson->mobile : old('mobile')) , ['class'=>'form-control', 'placeholder'=>'Mobile Number']) !!}
    <span class="text-danger">{{ $errors->first('mobile') }}</span>
</div>

<div class="form-group {{ $errors->has('fax') ? 'has-error' : '' }}">
    {!! Form::label('Fax:') !!}
    {!! Form::text('fax', (isset($contactperson->fax) ? $contactperson->fax : old('fax')) , ['class'=>'form-control', 'placeholder'=>'Fax Number']) !!}
    <span class="text-danger">{{ $errors->first('fax') }}</span>
</div>

<div class="form-group {{ $errors->has('skypeid') ? 'has-error' : '' }}">
    {!! Form::label('Skype Id:') !!}
    {!! Form::text('skypeid', (isset($contactperson->skypeid) ? $contactperson->skypeid : old('skypeid')) , ['class'=>'form-control', 'placeholder'=>'Skype Id']) !!}
    <span class="text-danger">{{ $errors->first('skypeid') }}</span>
</div>

