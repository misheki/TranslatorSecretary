@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Contact Persons</h2><br/>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Contact Person</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('contactpersons.index') }}"> Back</a>
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

    {{ Form::model($contactperson, ['route' => ['contactpersons.update', $contactperson->id], 'method' => 'patch']) }}
    @csrf
    @include('inc.contactpersonform')
    <div class="form-group">
        <button class="btn btn-success">Save Contact Person</button>
    </div>
    {!! Form::close() !!}

    </div>
</div>
@endsection
