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
        @foreach($scanners as $scanner)
            <tr>
                <td>{{ $scanner->id }}</td>
                <td>{{ $scanner->name }}</td>
                <td>{{ $scanner->email }}</td>
                <td><a href="{{ url('/admin/scanners/' . $scanner->id) }}"><i class="fa fa-cog"></i></a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection