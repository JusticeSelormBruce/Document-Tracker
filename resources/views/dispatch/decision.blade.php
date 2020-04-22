@extends('layouts.admin')
@section('render')
    <div class="container-fluid py-5">
    <div class="row pt-5"></div>

        <div class="jumbotron">
        <div class="row ">
        <div class="ml-auto mx-5">
                <a href="/dispatch-form" class="btn btn-primary btn-sm"> New Dispatch</a>
        </div>
        </div>
            <form action="/check-details" method="post">
                <div class="row">
                    <div class="mx-auto w-50">
                        <h5 class="ml-5">Please Enter Memo's Registration Number ( Existing Records)</h5>
                        <form action="/reset-password" method="post">
                            <div class="input-group-sm py-3">
                                <input type="text" class="form-control" name="reg_no" required>
                                <div class="row pt-2">
                                    <div class="mx-auto">
                                        <button class="btn  btn-outline-dark btn-sm" type="submit"><span class="mx-5">Search for details</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            @csrf
                        </form>
                    </div>

                </div>
            </form>

        </div>
    </div>

@endsection
