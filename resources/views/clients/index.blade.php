@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Clients</h2><br/>

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('clients.create') }}"> Create New Product</a>
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
            <th>Website</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($clients as $client)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $client->name }}</td>
            <td>{{ $client->code }}</td>
            <td>
                <form action="{{ route('clients.destroy',$client->id) }}" method="POST">


                    <a class="btn btn-info" href="{{ route('clients.show',$client->id) }}">Show</a>

 
                    <a class="btn btn-primary" href="{{ route('clients.edit',$client->id) }}">Edit</a>


                    @csrf
                    @method('DELETE')

   
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>


    {!! $clients->links() !!}
    </div>
</div>
@endsection
