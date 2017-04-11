@extends('index')
@section('main')
    @if(count($errors) > 0)
        <div class="alert alert-danger login-error">
            @foreach($errors->all() as $error)
                <li> {{ $error }}</li>
            @endforeach
        </div>
    @elseif(Session::get("message"))
        <div class="alert alert-success">
            {{ Session::get("message") }}
        </div>
    @endif

    {{ Form::open([
    'method' => 'post',
    ]) }}

    <div class="form-group">
        {{ Form::label("name", "Name") }}
        {{ Form::text("name", $carver->name, ['class' => "form-control"]) }}
    </div>
    <div class="form-group">
        {{ Form::label("type", "Type") }}
        {{ Form::text("type", $carver->type, ['class' => "form-control"]) }}
    </div>
    <div class="form-group">
        {{ Form::label("resolution", "Resolution") }}
        {{ Form::text("resolution", $carver->resolution, ['class' => "form-control"]) }}
    </div>
    <div class="form-group">
        {{ Form::label("materials", "Materials") }}
        {{ Form::text("materials", $carver->materials, ['class' => "form-control"]) }}
    </div>
    <div class="form-group">
        {{ Form::label("health_safety", "Health & Safety") }}
        {{ Form::text("health_safety", $carver->health_safety, ['class' => "form-control"]) }}
    </div>
    <div class="form-group">
        {{ Form::label("hi_res", "Hi res") }}
        {{ Form::text("hi_res", $carver->hi_res, ['class' => "form-control"]) }}
    </div>
    <div class="form-group">
        {{ Form::label("low_res", "Low res") }}
        {{ Form::text("low_res", $carver->low_res, ['class' => "form-control"]) }}
    </div>
    <div class="form-group" id="app">
        <prices :stores="{{ $stores }}"></prices>
    </div>
    <div class="form-group text-center">
        {{ link_to("admin/carvers", "Go Back", ['class' => 'btn btn-warning']) }}
        {{ Form::submit("Save", ['class' => "btn btn-primary"]) }}
    </div>
    {{ Form::close() }}
@endsection