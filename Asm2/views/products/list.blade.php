@include('layouts.header')
@include('layouts.sidebar')
<!-- partial -->
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Danh Sach Nguoi Dung</h4>
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Stt</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Age</th>
                            <th>Job</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as$key=> $item)
                        <tr>
                            <th> {{++$key}} </th>
                            <td> {{$item['user_name']}} </td>
                            <td> {{$item['email']}} </td>
                            <td> {{$item['user_age']}} </td>
                            <td> {{$item['job']}} </td>
                            <td>
                                <a href="{{$_ENV['BASE_URL']}}user/update/{{$item['user_id']}}"><button
                                        class="btn btn-warning">Update</button></a>
                                <a href="{{$_ENV['BASE_URL']}}user/delete/{{$item['user_id']}}"
                                    onclick="return confirm('Ban Confirm Xoa {{$item['user_name']}} Chu??')"><button
                                        class="btn btn-danger">Delete</button></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- main-panel ends -->

@include('layouts.footer')