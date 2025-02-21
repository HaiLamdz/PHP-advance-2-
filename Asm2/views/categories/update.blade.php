@include('layouts.header')
@include('layouts.sidebar')
<div class="col-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Update Nguoi Dung</h4>
            <form class="forms-sample" action="{{$_ENV['BASE_URL']}}user/update/{{$data['user_id']}}" method="POST">
                <div class="form-group">
                    <label for="exampleInputName1">Name</label>
                    <input type="text" class="form-control" name="name" id="exampleInputName1" value="{{$data['user_name']}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail3">Email address</label>
                    <input type="email" class="form-control" name="email" id="exampleInputEmail3" value="{{$data['email']}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword4">Job</label>
                    <input type="text" class="form-control" name="job" id="exampleInputPassword4" value="{{$data['job']}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword4">age</label>
                    <input type="number" class="form-control" name="age" id="exampleInputPassword4" value="{{$data['user_age']}}">
                </div>
                <button type="submit" class="btn btn-success mr-2">Submit</button>
            </form>
        </div>
    </div>

@include('layouts.footer')
