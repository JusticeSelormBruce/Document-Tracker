<section>
    <div class="row">
        <div class="mx-auto w-50">
            <div class="row no-gutters">
                <div class="col-2"><label for="">Department Name:</label></div>
                <div class="col-10 input-group-sm">
                    <select name="departments_id" id="" required class="form-control">
                        <option value="">Select Department</option>
                        @foreach($departments as $dept)
                            <option value="{{$dept->id}}">{{$dept->long_name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="row no-gutters pt-3">
                <div class="col-2"><label for="">Office Name:</label></div>
                <div class="col-10 input-group-sm">
                    <input type="text" name="name" required class="form-control">
                </div>
            </div>
            <div class="row pt-4">
                <div class="mx-auto">
                    <button class="btn btn-outline-dark btn-sm" type="submit"> Save</button>
                </div>

            </div>
        </div>
    </div>
</section>
