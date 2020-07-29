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
            <div class="row">
                <div class="ml-auto mx-5">
                    @include('admin.user_account.form')
                </div>
            </div>
            <div class="row pt-3">
                @if(session()->has('msg'))
                    <div class="alert alert-success alert-dismissible fade show w-100" role="alert">
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
            </div>



                <table id="table_id">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Email</th>
                        {{-- <th>More Details</th> --}}
                        {{-- <th>actions</th> --}}
                    </tr>
                    </thead>
                    <tbody >
                    @foreach($users as $user)
                        <tr>
                            <td>{{$user->id}}</td>
                            <td>{{$user->name}}</td>
                            <td><a href="mailto:{{$user->email}}">{{$user->email}}</a></td>
                            {{-- <td>@include('admin.user_account.more')</td> --}}
                            {{-- <td>
                                <div class="row">
                                    @include('admin.user_account.edit') <span class="mx-2"></span> @include('admin.user_account.delete')
                                </div>
                            </td> --}}
                        </tr>
                    @endforeach
                    </tbody>
                </table>

            </div>

    </div>

@endsection
