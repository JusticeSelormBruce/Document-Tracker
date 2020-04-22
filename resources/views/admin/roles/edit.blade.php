

<!-- Button trigger modal -->
<button type="button" class="btn text-primary  btn-sm w-50" data-toggle="modal" data-target="#exampleModalLong{{$role->id}}">
    Edit
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModalLong{{$role->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle{{$role->id}}" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle {{$role->id}}"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                   <div class="jumbotron">
                       <form action="/admin/edit-role" method="post">
                           @method('PATCH')
                           <input type="hidden" name="id" value="{{$role->id}}">
                           <div class="mx-auto w-50">
                               <div class="row no-gutters">
                                   <div class="col-2"><label for="">Role:</label></div>
                                   <div class="col-10 input-group-sm">
                                       <input type="text" name="role" required class="form-control" value="{{$role->role}}">
                                   </div>
                               </div>
                               <div class="row pt-4">
                                   <div class="mx-auto">
                                       <button class="btn btn-outline-dark btn-sm" type="submit"> update Role</button>
                                   </div>

                               </div>
                           </div>
                           @csrf
                       </form>
                   </div>
            </div>

        </div>
    </div>
</div>

