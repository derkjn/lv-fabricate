@extends('index')
@section('main')
    <table class="table table-striped table-bordered table-hover">
        <thead>
        <td>#</td>
        <td>Product</td>
        <td>Name</td>
        <td>Store</td>
        <td>Price</td>
        </thead>
        <tbody>
        @foreach($prices as $price)
            @php($model = (new $price->model_type)::find($price->model_id))
            <tr>
                <td>{{ $price->id }}</td>
                <td>{{ class_basename($price->model_type) }}</td>
                <td>{{ $model->name }}</td>
                <td>{{ $stores->filter(function($store) use ($price){ return $store->id == $price->store_id; })->first()->name }}</td>
                <td>{{ $price->price }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection