@extends('layouts.landingpage')

@section('content')
    <style>
        .card {
            height: 50vh !important;
        }
    </style>
    <div class="container mt-5">
        <div class="row justify-content-center py-5">
            <div class="col-md-8">
                <div class="">
                    <div class="row py-3">
                        <div class="col-4"></div>
                        <div class="col-8">
                            <span class="h3 text-light">Automated File and Tracking Systems</span> <br>
{{--                            <span class="h3 text-light ml-5 pt-4">Koforidua Technical University</span>--}}
                        </div>
                    </div>
                    <div class="row py-3">
                        <div class="mx-auto">
                            <div class=" h2">{{ __('Login') }}</div>
                        </div>
                    </div>
                    <div class="">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="email"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Username') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="text"
                                           class="form-control @error('email') is-invalid @enderror" name="email"
                                           value="{{ old('email') }}" required autofocus>

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password"
                                           class="form-control @error('password') is-invalid @enderror" name="password"
                                           required autocomplete="current-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="form-group row mb-0">
                                <div class="mx-auto">
                                    <button type="submit" class="btn btn-outline-dark ">
                                        <span class="mx-2">  {{ __('Login') }}</span>
                                    </button>


                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
