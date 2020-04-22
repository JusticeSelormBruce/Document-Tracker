

<!-- Button trigger modal -->
<button type="button" class="btn text-primary  btn-sm" data-toggle="modal" data-target="#exampleModalLong">
  Register User
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog " role="document">
        <div class="modal-content modal-lg">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body w-100">
                <div class="jumbotron w-100">
                    <div class="w-100">
                        @include('auth.register')
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

