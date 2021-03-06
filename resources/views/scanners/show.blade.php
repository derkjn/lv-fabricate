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
        {{ Form::text("name", $scanner->name, ['class' => "form-control"]) }}
    </div>
    <div class="form-group">
        {{ Form::label("type", "Type") }}
        {{ Form::text("type", $scanner->type, ['class' => "form-control"]) }}
    </div>
    <div class="form-group">
        {{ Form::label("resolution", "Resolution") }}
        {{ Form::text("resolution", $scanner->resolution, ['class' => "form-control"]) }}
    </div>
    <div class="form-group">
        {{ Form::label("scan_tech", "Scan Tech") }}
        {{ Form::text("scan_tech", $scanner->scan_tech, ['class' => "form-control"]) }}
    </div>
    <div class="form-group">
        {{ Form::label("hd", "HD") }}
        {{ Form::text("hd", $scanner->hd, ['class' => "form-control"]) }}
    </div>
    <div class="form-group">
        {{ Form::label("hi_res", "Hi res") }}
        {{ Form::text("hi_res", $scanner->hi_res, ['class' => "form-control"]) }}
    </div>
    <div class="form-group">
        {{ Form::label("low_res", "Low res") }}
        {{ Form::text("low_res", $scanner->low_res, ['class' => "form-control"]) }}
    </div>
    <div class="form-group" id="app">
        <prices :stores="{{ $stores }}" :prices="{{ $prices }}"></prices>
    </div>
    <div class="form-group text-center">
        {{ link_to("admin/carvers", "Go Back", ['class' => 'btn btn-warning']) }}
        {{ Form::submit("Save", ['class' => "btn btn-primary"]) }}
    </div>
    {{ Form::close() }}
@endsection