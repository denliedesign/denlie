<!-- FORM -->
<form action="/trackers" method="POST" enctype="multipart/form-data">
    <div class="form-group">
        <label for="name">Name</label>
        <input id="name" type="text" class="form-control" name="name"
               value="">
        <div>{{ $errors->first('name') }}</div>
    </div>

    <div class="form-group">
        <label for="month">Month</label>
        <input id="month" type="text" class="form-control" name="month"
               value="">
        <div>{{ $errors->first('month') }}</div>
    </div>

    <div class="form-group">
        <label for="year">Year</label>
        <input id="year" type="text" class="form-control" name="year"
               value="">
        <div>{{ $errors->first('year') }}</div>
    </div>

    <div class="form-group">
        <label for="minutes">Minutes</label>
        <input id="minutes" type="text" class="form-control" name="minutes"
               value="">
        <div>{{ $errors->first('minutes') }}</div>
    </div>

    <div class="form-group d-flex d-inline">
        <label for="paid">Paid</label>
        <input type="checkbox" id="paid" name="paid" value="paid" class="form-control">
        <label for="unpaid">Unpaid</label>
        <input type="checkbox" id="unpaid" name="paid" value="unpaid" class="form-control">
        <label for="included">Included</label>
        <input type="checkbox" id="included" name="paid" value="included" class="form-control">
    </div>
    @csrf
    <div class="d-flex justify-content-around mt-2">
        <button type="submit" class="btn btn-primary">Save</button>
    </div>
</form>
<!-- END FORM -->
