

<!-- Button trigger modal -->
<button type="button" class="btn text-primary  btn-sm w-50" data-toggle="modal" data-target="#exampleModalLong{{$dept->id}}">
    Edit
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModalLong{{$dept->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle{{$dept->id}}" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content modal-lg">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle {{$dept->id}}"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                   <div class="jumbotron">
                       <form action="/admin/edit-department" method="post">
                           @method('PATCH')
                           <input type="hidden" name="id" value="{{$dept->id}}">
                           <div class="row">
                               <div class="mx-auto w-100">
                                   <div class="row no-gutters">
                                       <div class="col-2"><label for="">Dept Name:</label></div>
                                       <div class="col-10 input-group-sm">
                                           <input type="text" name="long_name" required class="form-control" value="{{$dept->long_name}}">
                                       </div>
                                   </div>
                                   <div class="row no-gutters pt-2">
                                       <div class="col-2"><label for="">Short Name:</label></div>
                                       <div class="col-10 input-group-sm">
                                           <input type="text" name="short_name" required class="form-control" value="{{$dept->short_name}}">
                                       </div>
                                   </div>
                                   <div class="row pt-4">
                                       <div class="mx-auto">
                                           <button class="btn btn-outline-dark btn-sm" type="submit"> Update </button>
                                       </div>

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

