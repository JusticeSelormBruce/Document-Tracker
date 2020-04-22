@extends('layouts.admin')
@section('render')
    <div class="container-fluid pt-5">

        <span>Track File</span>
        <div class="jumbotron py-3">

            <table id="table_id">
                <thead>
                <tr>
                    <th>Reg No.</th>
                    <th>To Whom Receive</th>
                    <th>Date of Letter</th>
                    <th>Number of Letters</th>
                    <th>Subject</th>
                    <th>Remark</th>
                    <th>Office</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @foreach($result as $list)
                    <tr  style="background-color: #3c4858!important;" class="text-light">

                        <td>{{$list->reg_no}}</td>
                        <td>{{$list->to_whom_receive}}</td>
                        <td>{{$list->date_of_letter}}</td>
                        <td>{{$list->no_of_letter}}</td>
                        <td>@include('dispatch.subject')</td>
                        <td class="text-success">{{$list->remarks}}</td>
                        <td>
                            @foreach($offices  as  $office)
                                @if($office->id == $list->office_id)
                                    {{$office->name}}
                                @endif
                            @endforeach
                        </td>
                        <td><a href="{{route('track',['reg_no'=>$list->reg_no])}}">Track File</a></td>
                    </tr>

                @endforeach
                </tbody>
            </table>

        </div>
    </div>
@endsection
