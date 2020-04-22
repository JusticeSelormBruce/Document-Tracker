<table id="table_id" style="font-size: small!important; ">
    <thead>
    <tr>
        <th>Reg No.</th>
        <th>To Whom Receive</th>
        <th>Date of Letter</th>
        <th>Number of Letters</th>
        <th>Subject</th>
        <th>Remark</th>
        <th>Office</th>
    </tr>
    </thead>
    <tbody>
    @foreach($incoming as $list)
        <tr>

            <td>{{$list->reg_no}}</td>
       
            <td>{{$list->to_whom_receive}}</td>
         
            <td>{{$list->date_of_letter}}</td>
         
            <td>{{$list->no_of_letter}}</td>
           
            <td>@include('incoming.subject')</td>
          
            <td class="text-success">{{$list->remarks}}</td>
          
            <td>
                @foreach($offices  as  $office)
                    @if($office->id == $list->office_id)
                        {{$office->name}}
                    @endif
                @endforeach
            </td>
        </tr>

    @endforeach
    <hr>
    </tbody>
</table>
