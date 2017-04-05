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
        {{ Form::text("name", null, ['class' => "form-control"]) }}
    </div>
    <div class="form-group">
        {{ Form::label("url", "Website") }}
        {{ Form::text("url", null, ['class' => "form-control"]) }}
    </div>
    <div class="form-group">
        {{ Form::label("address", "Address") }}
        {{ Form::text("address", null, ['class' => "form-control"]) }}
    </div>
    <div class="form-group">
        {{ Form::label("city", "City") }}
        {{ Form::text("city", null, ['class' => "form-control"]) }}
    </div>
    <div class="form-group">
        {{ Form::label("state", "State") }}
        {{ Form::text("state", null, ['class' => "form-control"]) }}
    </div>
    <div class="form-group">
        {{ Form::label("country", "Country") }}
        {{ Form::text("country", null, ['class' => "form-control"]) }}
    </div>
    <div class="form-group">
        {{ Form::label("email", "Email") }}
        {{ Form::text("email", null, ['class' => "form-control"]) }}
    </div>
    <div class="form-group">
        {{ Form::label("skype", "Skype") }}
        {{ Form::text("skype", null, ['class' => "form-control"]) }}
    </div>
    <div class="form-group">
        {{ Form::label("facebook", "Facebook") }}
        {{ Form::text("facebook", null, ['class' => "form-control"]) }}
    </div>
    <div class="form-group">
        {{ Form::label("instagram", "Instagram") }}
        {{ Form::text("instagram", null, ['class' => "form-control"]) }}
    </div>
    <div class="form-group">
        {{ Form::label("pinterest", "Pinterest") }}
        {{ Form::text("pinterest", null, ['class' => "form-control"]) }}
    </div>
    <div class="form-group">
        {{ Form::label("linkedin", "Linkedin") }}
        {{ Form::text("linkedin", null, ['class' => "form-control"]) }}
    </div>
    <div class="form-group">
        {{ Form::label("notes", "Notes") }}
        {{ Form::text("notes", null, ['class' => "form-control"]) }}
    </div>
    <div class="form-group">
        {{ Form::label("hi_res", "Hi res") }}
        {{ Form::text("hi_res", null, ['class' => "form-control"]) }}
    </div>
    <div class="form-group">
        {{ Form::label("low_res", "Low res") }}
        {{ Form::text("low_res", null, ['class' => "form-control"]) }}
    </div>
    <div class="form-group text-center">
        {{ link_to("admin/users", "Go Back", ['class' => 'btn btn-warning']) }}
        {{ Form::submit("Save", ['class' => "btn btn-primary"]) }}
    </div>
    {{ Form::close() }}
@endsection