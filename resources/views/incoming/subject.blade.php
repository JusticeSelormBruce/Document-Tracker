<!-- Button trigger modal -->
<a type="button" class=" text-primary  " data-toggle="modal" data-target="#exampleModalLong{{$list->id}}">
    <span class="small text-capitalize">Subject</span>
</a>

<!-- Modal -->
<div class="modal fade" id="exampleModalLong{{$list->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle{{$list->id}}"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content modal-lg">
            <div class="modal-header">
                <h5 class="modal-title text-dark" id="exampleModalLongTitle{{$list->id}}"> Subject</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" style="font-size: small!important;">
                <div class="text-dark">
                    {{$list->subject}}
                </div>
            </div>

        </div>
    </div>
</div>

