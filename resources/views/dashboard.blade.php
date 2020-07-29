@extends('layouts.admin')
@section('render')

    <style>
        h1{
            font-size: 50pt!important;
        }
        a{
            text-decoration: none;
        }
    </style>
    <div class="container py-5">
        <div class="row  mt-5" ></div>
        <div class="row">

            <div class="card w-100 h-50 bg-primary">
                <div class="card-header"></div>
                <div class="card-body" style="background-color: #3c4858">
                    <div class=" row py-2">
                        <div class="mx-auto">
                            <div class="lead text-light">
                                Total Incoming Memo's
                            </div>
                            <div class="row justify-content-center py-1">
                                <h1 class="h3">{{$incomingCount}}</h1>
                            </div>
                            <div class="row justify-content-center">
                                <div class="py-1">
                                    <a href="/incoming-index">View</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            
        </div>
        </div>
        <div class="row">

                <div class="card w-100 h-50 " style="background-color: yellow">
                    <div class="card-header"></div>
                    <div class="card-body" style="background-color: #3c4858">
                        <div class=" row py-2">
                            <div class="mx-auto">
                                <div class="lead text-light">
                                    Total  Memo's Dispatched
                                </div>
                                <div class="row justify-content-center py-1">
                                    <h1 class="h3">{{$countDispatch}}</h1>
                                </div>
                                <div class="row justify-content-center">
                                    <div class="py-1">
                                        <a href="/dispatch-index">View</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

            </div>
        </div>
    </div>
@endsection
