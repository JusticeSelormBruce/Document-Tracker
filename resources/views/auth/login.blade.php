@extends('layouts.landingpage')

@section('content')
 <style>
     img{
         width: 6vw!important;
     }

     .card{
        background-color: #5a6268!important;
        border: none!important;
     }
 </style>
    <div class="container mt-5 text-dark ">

      <div class="row pt-5 text-light">
          <div class="mx-auto  w-75">
            <div class="card h-100">
           <div class="mx-auto">
            <div class="card-title h3">Koforidua Technical University</div>
            <div  class="pt-2 mx-5">
            <div class="ml-5"><img src="{{asset('icons/logo-round.png')}}" alt=""></div>
            </div>
           </div>
           <div class="row justify-content-center pb-5">
            <div class="col-md-8">
                <div class="">
                    <div class="row py-3">
                        <div class="col-4"></div>
                        <div class="col-8">

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
                                    <button type="submit" class="btn btn-outline-dark ml-5 border-0">
                                        <span class="mx-5"> <span class="mx-5 mr-5 text-light"> {{ __('Login') }}</span></span>
                                    </button>


                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-footer">
        <div class="row">
            <hr>
            <span class=" nx-2">Automated File and Tracking Systems</span> <br>

            <hr>
        </div>
        </div>
     </div>
    </div>
    </div>



@endsection
