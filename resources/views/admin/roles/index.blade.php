@extends('layouts.admin')
@section('render')
    <style>
        html,body{
            font-size: small!important;
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
                    <form action="/admin/add-role" method="post">
                        @csrf
                        @include('admin.roles.form')

                    </form>

                </div>

                <table id="table_id">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Role</th>
                        <th>action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($roles as $role)
                        <tr>
                            <td>{{$role->id}}</td>
                            <td>{{$role->role}}</td>
                            <td>@include('admin.roles.edit')</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>
@endsection