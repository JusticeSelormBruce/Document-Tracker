@extends('layouts.admin')
@section('render')
    <style>
        html, body {
            font-size: small !important;
            font-family: BlinkMacSystemFont;
        }

        .design {
            height: 30vh;
            border: 1px solid green;
        }
    </style>
    <div class="container-fluid pt-5">
        <div class="jumbotron">
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
        </div>
        <div class="row">
            <div class="mx-auto w-50">
                <form action="/admin/get-user-roles" method="post">
                    <div class="input-group-sm py-3">
                        @if($me ==null)
                            <select name="user_id" required class="form-control" onchange="this.form.submit()">
                                <option value="">Select User to Assign Roles To</option>
                                @foreach($users as $user)
                                    <option value="{{$user->id}}"
                                    > {{$user->name}} <span
                                            class="mx-2"></span>({{$user->email}})</span>
                                    </option>
                                @endforeach
                            </select>
                        @else
                            <select name="user_id" required class="form-control" onchange="this.form.submit()">
                                @foreach($users as $user)
                                    <option value="{{$user->id}}"
                                            @if($me == $user->id) selected @endif> {{$user->name}} <span
                                            class="mx-2"></span>({{$user->email}})</span>
                                    </option>
                                @endforeach
                            </select>
                        @endif

                    </div>
                    @csrf
                </form>
            </div>
            @if($data == null)
                <form action="/admin/assign-privilege" method="post">
                    <div class="row">
                        <div class="mx-auto w-50">
                            <div class="design input-group-sm py-2">

                                <div class="row py-2">
                                    @foreach($privileges as $list)
                                        <div class="col-4 input-group-sm ">
                                            <input type="checkbox" name="role_id[]" value="{{$list->id}}"
                                                   class="mx-3 py-2">
                                            <span>{{$list->name}}</span>
                                        </div>
                                    @endforeach

                                </div>

                            </div>
                            <div class="row py-3">
                                <div class="mx-auto">
                                    <button class="btn btn-outline-dark btn-sm" type="submit"><span
                                            class="mx-5">Submit</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    @csrf
                </form>
                @else
                <form action="/admin/assign-privilege" method="post">
                    <div class="row">
                        <div class="mx-auto w-50">
                            <div class="design input-group-sm py-2">

                                <div class="row py-2">
                                    @foreach($privileges as $list)
                                        <div class="col-4 input-group-sm ">
                                            <input type="checkbox" name="role_id[]" value="{{$list->id}}"
                                                   class="mx-3 py-2" @foreach($userRoles as $roles) @if($list->id ==$roles) checked @endif @endforeach> <span>{{$list->name}}</span>
                                        </div>
                                    @endforeach

                                </div>

                            </div>
                            <div class="row py-3">
                                <div class="mx-auto">
                                    <button class="btn btn-outline-dark btn-sm" type="submit"><span class="mx-5">Submit</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    @csrf
                </form>
            @endif
        </div>
    </div>
@endsection
