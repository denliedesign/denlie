<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

{{ $code = "" }}

@if(isset($_POST['code']))
    <div style="display: none;">
        {{ $code = $_POST['code'] }}
    </div>
@endif

@if($code == 'd3nl!3')
    @include('/trackers/admin')
@else
    <div style="height: 100%;" class="d-flex align-items-center justify-content-center text-center">
        <form method="post" action="/trackers/index" style="border: 1px solid silver; border-radius: 10px;" class="p-5">
            <div class="form-inline">
                <div class="form-group">
                    <label for="code" class="mr-2">Password</label>
                    <input type="text" class="form-control mr-2" id="code" name="code" aria-describedby="code">
                </div>
                @csrf
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
@endif
