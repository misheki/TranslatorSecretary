@extends('layouts.app')

@section('content')
<div class="container">
    <h2>{{ $client->name }} - Contact Persons</h2><br/>

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('contactpersons.create', $client->id) }}"> Add New Contact Person</a>
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
            <th>Email</th>
            <th>Email</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($contactpersons as $contactperson)
        <tr>
            <td>{{ ++$i }}</td>
            <td><a href="{{ route('contactpersons.show', $contactperson->id) }}">{{ $contactperson->name }}</a></td>
            <td>{{ $contactperson->email }}</td>
            <td>{{ $contactperson->mobile }}</td>
            <td>
                <!-- <a class="btn btn-primary" href="{{ route('contactpersons.edit', $contactperson->id) }}">Edit</a>  
                <form action="{{ route('contactpersons.destroy', $contactperson->id) }}" method="POST">
                    @csrf    
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form> -->
            </td>
        </tr>
        @endforeach
    </table>


    {!! $contactpersons->links() !!}
    </div>
</div>
@endsection
