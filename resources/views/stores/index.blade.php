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
        @foreach($stores as $store)
            <tr>
                <td>{{ $store->id }}</td>
                <td>{{ $store->name }}</td>
                <td>{{ $store->email }}</td>
                <td><a href="{{ url('/admin/stores/' . $store->id) }}"><i class="fa fa-cog"></i></a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection