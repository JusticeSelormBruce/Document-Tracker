@extends('layouts.admin')
@section('render')
    <div class="container pt-5 mx-5">
        <div class="jumbotron">

            <form action="/save-dispatch" method="post">
                @csrf
                <section class="w-100">
                    <div class="row py-1 no-gutters">
                        <div class="col-2">Reg No.</div>
                        <div class="col-8 input-group-sm">
                            <input type="text" name="reg_no" required class="form-control">
                        </div>
                    </div>
                    <div class="row py-1 no-gutters">
                        <div class="col-2">To Whom Receive</div>
                        <div class="col-8 input-group-sm">
                            <select name="to_whom_receive" required class="form-control">
                                <option value="">Select User</option>
                                @foreach($getOfficeMembers as $member)
                                    <option value="{{$member->name}}">{{$member->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row py-1 no-gutters">
                        <div class="col-2">Date Of Letter</div>
                        <div class="col-8 input-group-sm">
                            <input type="date" name="date_of_letter" required class="form-control">
                        </div>
                    </div>
                    <div class="row py-1 no-gutters">
                        <div class="col-2">Number Of Letters</div>
                        <div class="col-8 input-group-sm">
                            <input type="number" name="no_of_letter" required class="form-control">
                        </div>
                    </div>
                    <div class="row py-1 no-gutters">
                        <div class="col-2">Subject</div>
                        <div class="col-8 input-group-sm">
                            <textarea name="subject" id="" cols="30" rows="10" required class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="row py-1 no-gutters">
                        <div class="col-2">Attachemnt</div>
                        <div class="col-8">  <select name="attachment" class="form-control" >
                            <option value="">Select Attachment Status</option>
                            <option value="No">No</option>
                            <option value="Yes">Yes</option>
                        </select></div>
                       
                    </div>
                    <div class="row py-1 no-gutters">
                        <div class="col-2">No of Attachments</div>
                        <div class="col-8 input-group-sm">
                            <input name="no_attachment"   class="form-control" type="number">
                        </div>
                    </div>
                    <div class="row py-1 no-gutters">
                        <div class="col-2">Remark</div>
                        <div class="col-8 input-group-sm">
                            <select name="remarks" class="form-control" required>
                                <option value="">Select Remarks</option>
                                <option value="Direct">Direct</option>
                                <option value="Copied">Copied</option>
                                <option value="Refered">Refered</option>
                                <option value="Distribution">Distribution</option>
                            </select>
                        </div>
                    </div>
                    <div class="row py-1 no-gutters ">
                        <div class="col-2">Office</div>
                        <div class="col-8 input-group-sm">
                            <select name="office_id" class="form-control" required>
                                <option value="">Select Office</option>
                                @foreach($offices as $office)
                                    <option value="{{$office->id}}">{{$office->name}}</option>
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


    <script>
        var today = new Date();
        var dd = String(today.getDate()).padStart(2, '0');
        var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
        var yyyy = today.getFullYear();


        todayDate = mm + '/' + dd + '/' + yyyy;
        document.getElementById('date').setAttribute('value', todayDate);
    </script>

@endsection
