

<!-- Button trigger modal -->
<button type="button" class="btn text-info  btn-sm " data-toggle="modal" data-target="#exampleModalLonge{{$user->id}}">
    edit
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModalLonge{{$user->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitlee{{$user->id}}" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitlee{{$user->id}}"></h5>
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

