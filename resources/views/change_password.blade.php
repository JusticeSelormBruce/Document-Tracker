@extends('layouts.admin')
@section('render')

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
            <form action="/change-password" method="post">
                <div class="w-75">
                    <div class="form-group row">
                        <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                        <div class="col-md-8">
                            <input id="password" type="password"
                                   class="form-control @error('password') is-invalid @enderror" name="password" required
                                   autocomplete="new-password">

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="password-confirm"
                               class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                        <div class="col-md-8">
                            <input id="password-confirm" type="password" class="form-control"
                                   name="password_confirmation" required autocomplete="new-password">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="mx-auto">
                        <button class="btn btn-outline-dark btn-sm"><span class="mx-5">Change Password</span></button>
                    </div>
                </div>
                @csrf
            </form>


        </div>
    </div>
@endsection
