@extends('layouts.admin')
@section('render')
    <style>
        body, html {
            font-size: small !important;
        }

        table, thead, tbody, th, tr, td {
            font-size: small !important;
        }

        }
    </style>
    <div class="container-fluid py-5">
        <div class="jumbotron">
            <div class="alert alert-success">
                <span> Tacking File With Reg_no</span><span class="mx-1 text-danger"><u>{{$arg}}</u></span> <span
                    class="mx-1">as:</span>
            </div>
            <div class="row py-3">
                <div class="col-6">
                    <div class="text-success h5">Incoming</div>
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th class="text-info h3">Dispatched By:</th>
                            <th>To:</th>
                            <th>Date & Time</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($file_incoming as $incoming)
                            <tr>
                                <td class="text-capitalize">{{$incoming->user->name}}</td>
                                <td>
                                    @foreach($offices  as  $office)
                                        @if($office->id == $incoming->office_id)
                                            {{$office->name}}
                                        @endif
                                    @endforeach
                                </td>
                                <td>{{$incoming->created_at}}</td>
                            </tr>
                        @endforeach
                        </tbody>

                    </table>

                </div>
                <div class="col-6">
                    <div class="text-success h5">Dispatch</div>
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th class="text-info h3">Incoming By:</th>
                            <th>From:</th>
                            <th>Date & Time</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($file_dispatch as $dispatch)
                            <tr>
                                <td class="text-capitalize">{{$dispatch->user->name}}</td>
                                <td>
                                    @foreach($offices  as  $office)
                                        @if($office->id == $dispatch->office_id)
                                            {{$office->name}}
                                        @endif
                                    @endforeach
                                </td>
                                <td>{{$dispatch->created_at}}</td>
                            </tr>
                        @endforeach
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
