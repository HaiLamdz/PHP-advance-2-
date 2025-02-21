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
        <h2 align="center">Update User</h2>
        <form action="<?= $_ENV['BASE_URL'] ?>user/update-user/<?= $data['id'] ?>" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="">Full Name</label>
                <input type="text" value="<?= $data['name'] ?>" name="name" class="form-control">
            </div>
            <div class="mb-3">
                <label for="">Age</label>
                <input type="text" value="<?= $data['age'] ?>" name="age" class="form-control">
            </div>
            <div class="mb-3">
                @if ($data['image'] != null)
                <img width="200px" src="{{ $_ENV['BASE_URL'] .  $data['image']}}" alt="">
            @endif
            <input type="file" name="image" class="form-control">
            </div>
            <button type="submit" class="btn btn-success">Sua</button>
        </form>
    </div>
</body>
</html>