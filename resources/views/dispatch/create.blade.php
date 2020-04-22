<!-- Button trigger modal -->
<button type="button" class="btn text-primary  btn-sm " data-toggle="modal" data-target="#exampleModalLong">
<span>Dispatch</span>
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content modal-lg">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle"> Dispatch Index Form</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" style="font-size: small!important;">
                <div class="jumbotron">
                    <form action="/save-dispatch" method="post">
                        @csrf
                        @include('dispatch.form')
                        <div class="row">
                            <div class="mx-auto">
                                <button type="submit" class="btn btn-outline-dark btn-sm"><span>Save</span>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>

