@extends('layouts.admin')
@section('render')
    <style>
        html, body {
            font-size: small !important;
            font-family: BlinkMacSystemFont;
        }
    </style>
    <div class="container-fluid pt-5">
        <div class="jumbotron pt-5">
            <div class="container-fluid">
                @if(session()->has('msg'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <div class="row">
                            <div class="mx-auto w-50">
                                {{session()->get('msg')}}
                            </div>
                        </div>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
                <div class="jumbotron pt-5 pb-0">
                    <form action="/admin/add-department" method="post">
                        @csrf
                        @include('admin.department.form')

                    </form>

                </div>

                <table id="table_id">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th> Long Name</th>
                        <th>Short Name</th>
                        <th>action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($departments as $dept)
                        <tr>
                            <td>{{$dept->id}}</td>
                            <td>{{$dept->long_name}}</td>
                            <td>{{$dept->short_name}}</td>
                            <td>@include('admin.department.edit')</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>
@endsection
