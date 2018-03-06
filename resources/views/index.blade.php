<!DOCTYPE html>
<html>
<head>
    <title>KK TRANSFERS</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
<div class="container">

<nav class="navbar navbar-inverse">
    <div class="navbar-header">
        <a class="navbar-brand" href="{{ URL::to('transfer') }}">Transfer Alert</a>
    </div>
    <ul class="nav navbar-nav">
        <li><a href="{{ URL::to('transfers') }}">View All Transfers</a></li>
        <li><a href="{{ URL::to('transfers/create') }}">Create a Transfer</a>
    </ul>
</nav>

<h1>All the Transfers</h1>

<!-- will be used to show any messages -->
@if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <td>From</td>
            <td>To</td>
            <td>Date</td>
            <td>Return</td>
            <td>Passengers</td>
            <td>Luggage</td>
        </tr>
    </thead>
    <tbody>
    @foreach($transfers as $key => $value)
        <tr>
            <td>{{ $value->id }}</td>
            <td>{{ $value->from }}</td>
            <td>{{ $value->to }}</td>
            <td>{{ $value->date }}</td>
            <td>{{ $value->return }}</td>
            <td>{{ $value->passengers }}</td>
            <td>{{ $value->luggage }}</td>

            <!-- we will also add show, edit, and delete buttons -->
            <td>

                

                <a class="btn btn-small btn-success" href="{{ URL::to('transfers/' . $value->id) }}">Show this Transfer</a>

            
                <a class="btn btn-small btn-info" href="{{ URL::to('transfers/' . $value->id . '/edit') }}">Edit this Transfer</a>

            </td>
        </tr>
    @endforeach
    </tbody>
</table>

</div>
</body>
</html>