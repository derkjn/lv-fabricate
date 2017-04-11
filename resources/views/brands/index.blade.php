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
        @foreach($brands as $brand)
            <tr>
                <td>{{ $brand->id }}</td>
                <td>{{ $brand->name }}</td>
                <td>{{ $brand->email }}</td>
                <td><a href="{{ url('/admin/brands/' . $brand->id) }}"><i class="fa fa-cog"></i></a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection