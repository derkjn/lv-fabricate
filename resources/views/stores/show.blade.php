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
        {{ Form::text("name", $store->name, ['class' => "form-control"]) }}
    </div>
    <div class="form-group">
        {{ Form::label("url", "Website") }}
        {{ Form::text("url", $store->website, ['class' => "form-control"]) }}
    </div>
    <div class="form-group">
        {{ Form::label("address", "Address") }}
        {{ Form::text("address", $store->address, ['class' => "form-control"]) }}
    </div>
    <div class="form-group">
        {{ Form::label("city", "City") }}
        {{ Form::text("city", $store->city, ['class' => "form-control"]) }}
    </div>
    <div class="form-group">
        {{ Form::label("state", "State") }}
        {{ Form::text("state", $store->state, ['class' => "form-control"]) }}
    </div>
    <div class="form-group">
        {{ Form::label("country", "Country") }}
        {{ Form::text("country", $store->country, ['class' => "form-control"]) }}
    </div>
    <div class="form-group">
        {{ Form::label("email", "Email") }}
        {{ Form::text("email", $store->email, ['class' => "form-control"]) }}
    </div>
    <div class="form-group">
        {{ Form::label("skype", "Skype") }}
        {{ Form::text("skype", $store->skype, ['class' => "form-control"]) }}
    </div>
    <div class="form-group">
        {{ Form::label("facebook", "Facebook") }}
        {{ Form::text("facebook", $store->facebook, ['class' => "form-control"]) }}
    </div>
    <div class="form-group">
        {{ Form::label("instagram", "Instagram") }}
        {{ Form::text("instagram", $store->instagram, ['class' => "form-control"]) }}
    </div>
    <div class="form-group">
        {{ Form::label("pinterest", "Pinterest") }}
        {{ Form::text("pinterest", $store->pinterest, ['class' => "form-control"]) }}
    </div>
    <div class="form-group">
        {{ Form::label("linkedin", "Linkedin") }}
        {{ Form::text("linkedin", $store->linkedin, ['class' => "form-control"]) }}
    </div>
    <div class="form-group">
        {{ Form::label("notes", "Notes") }}
        {{ Form::text("notes", $store->notes, ['class' => "form-control"]) }}
    </div>
    <div class="form-group">
        {{ Form::label("hi_res", "Hi res") }}
        {{ Form::text("hi_res", $store->hi_res, ['class' => "form-control"]) }}
    </div>
    <div class="form-group">
        {{ Form::label("low_res", "Low res") }}
        {{ Form::text("low_res", $store->low_res, ['class' => "form-control"]) }}
    </div>
    <div class="form-group text-center">
        {{ link_to("admin/stores", "Go Back", ['class' => 'btn btn-warning']) }}
        {{ Form::submit("Save", ['class' => "btn btn-primary"]) }}
    </div>
    {{ Form::close() }}
@endsection