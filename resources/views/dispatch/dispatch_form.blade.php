@extends('layouts.admin')
@section('render')
    <div class="container pt-5">
        <div class="jumbotron">

            <form action="/save-dispatch" method="post">
                @csrf
                <section class="w-100">
                    <div class="row py-1 no-gutters">
                        <div class="col-4">Reg No.</div>
                        <div class="col-8 input-group-sm">
                            <input type="text" name="reg_no" required class="form-control" value="{{$data->reg_no}}">
                        </div>
                    </div>
                    <div class="row py-1 no-gutters">
                        <div class="col-4">To Whom Receive</div>
                        <div class="col-8 input-group-sm">
                            <select name="to_whom_receive" required class="form-control">
                                @foreach($getOfficeMembers as $member)
                                    <option value="{{$member->name}}" @if($member->id ==$data->user_id) selected @endif>{{$member->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row py-1 no-gutters">
                        <div class="col-4">Date Of Letter</div>
                        <div class="col-8 input-group-sm">
                            <input type="date" name="date_of_letter" required class="form-control" value="{{$data->date_of_letter}}">
                        </div>
                    </div>
                    <div class="row py-1 no-gutters">
                        <div class="col-4">Number Of Letters</div>
                        <div class="col-8 input-group-sm">
                            <input type="number" name="no_of_letter" required class="form-control" value="{{$data->no_of_letter}}">
                        </div>
                    </div>
                    <div class="row py-1 no-gutters">
                        <div class="col-4">Subject</div>
                        <div class="col-8 input-group-sm">
                            <textarea name="subject" id="" cols="30" rows="10" required class="form-control">
                                {{$data->subject}}

                            </textarea>
                        </div>
                    </div>
                    <div class="row py-1 no-gutters">
                        <div class="col-4">Remark</div>
                        <div class="col-8 input-group-sm">
                            <select name="remarks" class="form-control" required>

                                <option value="{{$data->remarks}}">{{$data->remarks}}</option>
                            </select>
                        </div>
                    </div>
                    <div class="row py-1 no-gutters ">
                        <div class="col-4">Office</div>
                        <div class="col-8 input-group-sm">
                            <select name="office_id" class="form-control" required>
                                @foreach($offices as $office)
                                    <option value="{{$office->id}}"  @if($office->id == $data->office_id) selected @endif>{{$office->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                </section>
                <div class="row">
                    <div class="mx-auto">
                        <span class="mx-5">
                            <button class="btn btn-primary btn-sm" type="submit"> Save Dispatch Details</button>
                        </span>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection
<script>
    var today = new Date();
    var dd = String(today.getDate()).padStart(2, '0');
    var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
    var yyyy = today.getFullYear();


    todayDate = mm + '/' + dd + '/' + yyyy;
    document.getElementById('date').setAttribute('value', todayDate);
</script>

