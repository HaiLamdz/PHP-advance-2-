<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
    <h2 align="center" >Danh Sách</h2>
    <a href="{{ $_ENV['BASE_URL']}}user/add-user"><button class="btn btn-success">Thêm</button></a>
    <table class="table" style="text-align: center">
        <thead>
            <tr>
                <th>Stt</th>
                <th>Name</th>
                <th>Age</th>
                <th>image</th>
                <th>Thao Tác</th>
            </tr>
        </thead>
        <tbody>
           @foreach($data as $key=>$value)
            <tr>
                <td>{{ ++$key }}</td>
                <td>{{ $value['name'] }}</td>
                <td>{{ $value['age'] }}</td>
                <td><img width="200px" height="auto" src="{{ $value['image'] }}" alt=""></td>
                <td><a href="{{$_ENV['BASE_URL']}}user/update-user/{{ $value['id'] }}"><button class="btn btn-warning" >Sửa</button></a>
                <a href="{{ $_ENV['BASE_URL'] }}user/delete/{{ $value['id'] }}" onclick="return confirm('Xác Nhận Xóa {{ $value['name'] }}')"><button class="btn btn-danger">Xóa</button></a></td>
            </tr>
           @endforeach
        </tbody>
    </table>
    </div>
</body>
</html>