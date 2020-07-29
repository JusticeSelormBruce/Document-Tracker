

<!-- Button trigger modal -->
<button type="button" class="btn text-primary  btn-sm w-50" data-toggle="modal" data-target="#exampleModalLong{{$user->id}}">
  <span class="small"> more details</span>
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModalLong{{$user->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle{{$user->id}}" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle {{$user->id}}"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="jumbotron">
                 
                </div>
            </div>

        </div>
    </div>
</div>

