@include('layouts.header')
@include('layouts.sidebar')
<div class="col-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Them Nguoi Dung Moi</h4>
            <form class="forms-sample" action="{{$_ENV['BASE_URL']}}user/add" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="exampleInputName1">Name</label>
                    <input type="text" class="form-control" name="name" id="exampleInputName1" placeholder="Name">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail3">Email address</label>
                    <input type="email" class="form-control" name="email" id="exampleInputEmail3" placeholder="Email">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword4">Password</label>
                    <input type="password" class="form-control" name="password" id="exampleInputPassword4" placeholder="Password">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword4">Job</label>
                    <input type="text" class="form-control" name="job" id="exampleInputPassword4" placeholder="Job">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword4">Age</label>
                    <input type="number" class="form-control" name="age" id="exampleInputPassword4" placeholder="Age">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword4">Avata</label>
                    <input type="file" class="form-control" name="avata" id="exampleInputPassword4" placeholder="Age">
                </div>
                <button type="submit" class="btn btn-success mr-2">Submit</button>
            </form>
        </div>
    </div>
@include('layouts.footer')