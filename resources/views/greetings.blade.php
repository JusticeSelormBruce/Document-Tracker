@extends('layouts.landingpage')
@section('content')
    <style>
        a {
            text-decoration: none !important;
        }
    </style>

    <div class="form-group">
        <div class="row justify-content-center">
            <div class="row">
                <div class="h4 text-light ">Welcome</div>
                <br>
                <span class="mx-4  h4 text-capitalize">({{Auth::user()->name}})</span>
            </div>
        </div>
        <div class="row justify-content-center pt-5">

            <a href="/dashboard" class="text-light"><span class="h1">Navigate to Dashboard</span></a>

        </div>
    </div>



@endsection
