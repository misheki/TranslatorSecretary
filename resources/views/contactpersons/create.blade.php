@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Contact Persons</h2><br/>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Add New Contact Person</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('contactpersons.index', $client_id) }}"> Back</a>
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

    {!! Form::open(['route'=>'contactpersons.store']) !!}
    @csrf
    @include('inc.contactpersonform')
    {!! Form::hidden('client_id', $client_id) !!}
    <div class="form-group">
        <button class="btn btn-success">Save New Contact Person</button>
    </div>
    {!! Form::close() !!}

    </div>
</div>
@endsection
