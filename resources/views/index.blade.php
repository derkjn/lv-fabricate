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

?>
@extends('layouts.base')

@section('bodyClass', 'admin home')
@section("main")
    <nav class="navbar-default navbar-static-side">
        @include("templates.navbar")
    </nav>
    <div id="page-wrapper" class="gray-bg dashbard-1">
        <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i>
                </a>
            </div>
            <ul class="nav navbar-top-links navbar-right">
                <li>
                    <a href="{{ url("admin/logout") }}">
                        <i class="fa fa-sign-out"></i> Log out
                    </a>
                </li>
            </ul>

        </nav>
        <div class="wrapper wrapper-content  animated fadeIn">
            <div class="row">
                <div class="col-xs-12">
                    <transition name="slide-fade" mode="out-in">
                        <router-view></router-view>
                    </transition>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <div class="footer">
            @yield("footer")
            &copy; {{ date("Y") }} - Fabricate Studio
        </div>
        <!-- /.Footer -->

    </div>
@endsection