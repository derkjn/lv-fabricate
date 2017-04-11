@extends('index')
@section('main')
    <table class="table table-striped table-bordered table-hover">
        <thead>
        <td>#</td>
        <td>Name</td>
        <td>Email</td>
        <td>Actions</td>
        </thead>
        <tbody>
        @foreach($carvers as $carver)
            <tr>
                <td>{{ $carver->id }}</td>
                <td>{{ $carver->name }}</td>
                <td>{{ $carver->email }}</td>
                <td><a href="{{ url('/admin/carvers/' . $carver->id) }}"><i class="fa fa-cog"></i></a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection