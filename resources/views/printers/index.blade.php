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
        @foreach($printers as $printer)
            <tr>
                <td>{{ $printer->id }}</td>
                <td>{{ $printer->name }}</td>
                <td>{{ $printer->email }}</td>
                <td><a href="{{ url('/admin/printers/' . $printer->id) }}"><i class="fa fa-cog"></i></a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection