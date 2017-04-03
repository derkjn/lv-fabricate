<?php
/*
|--------------------------------------------------------------------------
| Standard view
|--------------------------------------------------------------------------
|
| Here is our proposed standard view. It defines all the required sections
| defined in the base layout.
| Make sure you review this and edit as per your requirements
|
*/
use Carbon\Carbon;

?>
@extends('layouts.base')

@section('bodyClass', 'admin admin-login black-bg')
@section("main")
    <div class="container loginscreen animated flipInX middle-box text-center">
        <img src="{{ asset("images/logo.png") }}" alt="logo" class="img-responsive logo">
        {!! Form::open([ 'url' => "login", 'method' => "post", 'class' => 'm-t']) !!}
        <div class="form-group">
            {!! Form::text('email', old("email"), ['placeholder' => "Email Address", "class" => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::password('password', ['placeholder' => 'Password', "class" => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('LOG IN', ['class' => 'btn btn-primary block full-width m-b' ]) !!}
        </div>

        {!! Form::close() !!}
        <p class="m-t text-center">
            <small>&copy; {{ Carbon::now()->format("Y") }} <a href="https://fabricate.studio" target="_blank">Fabricate
                    Studio</a></small>
        </p>
    </div>
    @if($errors->count() > 0) :
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="alert alert-danger">
                    @foreach($errors->all() as $error)
                        <p>{{ $error }}</p>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    @endif

@endsection