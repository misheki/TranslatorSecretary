@extends('layouts.app')

@section('content')
<a href="{{ route('clients.index') }}"><span class="glyphicon glyphicon-arrow-left" style="font-size: 20px"></span> Back to Client List</a> 
<div class="container">
    <h2>Client Information</h2><br/>

    <table class="table table-bordered">
        <tr>
            <th>Code</th>
            <td>{{ $client->code }}</td>
        </tr>
        <tr>
            <th>Name</th>
            <td>{{ $client->name }}</td>
        </tr>
        <tr>
            <th>Address</th> 
            <td>{{ $client->address }}</td>
        </tr>
        <tr>
            <th>Country</th>
            <td>{{ $client->country }}</td>
        </tr>
        <tr>
            <th>Email</th>
            <td>{{ $client->email }}</td>
        </tr>
        <tr>
            <th>Website</th>
            <td>{{ $client->website }}</td>
        </tr>
        <tr>
            <th>Date Added</th>
            <td>{{ $client->created_at }}</td>
        </tr>
        <tr>
            <th>Last Updated</th>
            <td>{{ $client->updated_at }}</td>
        </tr>
    </table>
    
    <form action="{{ route('clients.destroy', $client->id) }}" method="POST">
        <a class="btn btn-primary" href="{{ route('clients.edit', $client->id) }}">Edit</a> 
        @csrf    
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Delete</button>
        <a class="btn btn-success" href="{{ route('contactpersons.index', $client->id) }}">Manage Contact Persons</a> 
    </form>
    
</div>
@endsection
