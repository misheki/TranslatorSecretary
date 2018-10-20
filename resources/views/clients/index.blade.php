@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Clients</h2><br/>

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('clients.create') }}"><span class="glyphicon glyphicon-plus" style="font-size: 20px"></span> Add New Client</a>
            </div>
        </div>
    </div>

    <div class="row"><br><br><br> </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif


    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Code</th>
            <th>Email</th>
            <th width="380px">Actions</th>
        </tr>
        @foreach ($clients as $client)
        <tr>
            <td>{{ ++$i }}</td>
            <td><a href="{{ route('clients.show', $client->id) }}">{{ $client->name }}</a></td>
            <td>{{ $client->code }}</td>
            <td>{{ $client->email }}</td>
            <td>               
                <form action="{{ route('clients.destroy', $client->id) }}" method="POST">
                    @csrf    
                    @method('DELETE')
                    <a class="btn btn-primary" href="{{ route('clients.edit', $client->id) }}">Edit</a>  
                    <button type="submit" class="btn btn-danger">Delete</button>
                    <a class="btn btn-success" href="{{ route('contactpersons.index', $client->id) }}">Manage Contact Persons</a>
                </form>
                 
            </td>
        </tr>
        @endforeach
    </table>


    {!! $clients->links() !!}
    </div>
</div>
@endsection
