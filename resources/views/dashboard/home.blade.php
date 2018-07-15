@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Upcoming</h2><br/>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <div>
        <h3>This Week</h3>
        Due dates, invoices etc that are due will show here 
        <br><br><br><br><br><br>
        <h3>Next Week</h3>
    </div>
</div>
@endsection
