@extends('layouts.admin')
@section('render')
    <style>
        html, body {
            font-size: small !important;
            font-family: BlinkMacSystemFont;
        }
    </style>
    <div class="container-fluid pt-5">
        <div class="jumbotron pt-2">
            <div class="row">
                <div class="ml-auto">
                    <a href="/admin/assign-privilege-form" class="btn btn-outline-dark  mx-5"><span class="mx-5">Assign Role</span></a>
                </div>
            </div>
        </div>
    </div>
@endsection