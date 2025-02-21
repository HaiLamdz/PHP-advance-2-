@include('layouts.header')
@include('layouts.sidebar')
<div class="col-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Them Nguoi Dung Moi</h4>
            <form class="forms-sample" action="{{$_ENV['BASE_URL']}}categories/add" method="POST">
                <div class="form-group">
                    <label for="exampleInputName1">Title</label>
                    <input type="text" class="form-control" name="title" id="exampleInputName1" placeholder="title">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail3">Description</label>
                    <input type="text" class="form-control" name="description" id="exampleInputEmail3" placeholder="description">
                </div>
                <button type="submit" class="btn btn-success mr-2">Submit</button>
            </form>
        </div>
    </div>
@include('layouts.footer')