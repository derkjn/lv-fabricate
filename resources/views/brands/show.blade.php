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
    'method' => 'post'
    ]) }}

    <div class="form-group">
        {{ Form::label("name", "Name") }}
        {{ Form::text("name", $brand->name, ['class' => "form-control"]) }}
    </div>
    <div class="form-group">
        {{ Form::label("url", "Website") }}
        {{ Form::text("url", $brand->website, ['class' => "form-control"]) }}
    </div>
    <div class="form-group">
        {{ Form::label("address", "Address") }}
        {{ Form::text("address", $brand->address, ['class' => "form-control"]) }}
    </div>
    <div class="form-group">
        {{ Form::label("city", "City") }}
        {{ Form::text("city", $brand->city, ['class' => "form-control"]) }}
    </div>
    <div class="form-group">
        {{ Form::label("state", "State") }}
        {{ Form::text("state", $brand->state, ['class' => "form-control"]) }}
    </div>
    <div class="form-group">
        {{ Form::label("country", "Country") }}
        {{ Form::text("country", $brand->country, ['class' => "form-control"]) }}
    </div>
    <div class="form-group">
        {{ Form::label("email", "Email") }}
        {{ Form::text("email", $brand->email, ['class' => "form-control"]) }}
    </div>
    <div class="form-group">
        {{ Form::label("skype", "Skype") }}
        {{ Form::text("skype", $brand->skype, ['class' => "form-control"]) }}
    </div>
    <div class="form-group">
        {{ Form::label("facebook", "Facebook") }}
        {{ Form::text("facebook", $brand->facebook, ['class' => "form-control"]) }}
    </div>
    <div class="form-group">
        {{ Form::label("instagram", "Instagram") }}
        {{ Form::text("instagram", $brand->instagram, ['class' => "form-control"]) }}
    </div>
    <div class="form-group">
        {{ Form::label("pinterest", "Pinterest") }}
        {{ Form::text("pinterest", $brand->pinterest, ['class' => "form-control"]) }}
    </div>
    <div class="form-group">
        {{ Form::label("linkedin", "Linkedin") }}
        {{ Form::text("linkedin", $brand->linkedin, ['class' => "form-control"]) }}
    </div>
    <div class="form-group">
        {{ Form::label("notes", "Notes") }}
        {{ Form::text("notes", $brand->notes, ['class' => "form-control"]) }}
    </div>
    <div class="form-group">
        {{ Form::label("hi_res", "Hi res") }}
        {{ Form::text("hi_res", $brand->hi_res, ['class' => "form-control"]) }}
    </div>
    <div class="form-group">
        {{ Form::label("low_res", "Low res") }}
        {{ Form::text("low_res", $brand->low_res, ['class' => "form-control"]) }}
    </div>
    <div class="form-group text-center">
        {{ link_to("admin/stores", "Go Back", ['class' => 'btn btn-warning']) }}
        {{ Form::submit("Save", ['class' => "btn btn-primary"]) }}
    </div>
    {{ Form::close() }}
@endsection