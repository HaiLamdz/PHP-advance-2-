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
        <h2 align="center">Them User</h2>
        <form action="<?= $_ENV['BASE_URL'] ?>user/add-user" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="">Full Name</label>
                <input type="text" placeholder="Nhap ho va ten" name="name" class="form-control">
                <?php
                if (isset($_SESSION['errors'])) {
                    foreach ($_SESSION['errors'] as $value) {
                        echo "<span class='text text-danger' >$value</span>";
                    }
                    unset($_SESSION['errors']);
                }
                ?>
            </div>
            <div class="mb-3">
                <label for="">Age</label>
                <input type="text" placeholder="Nhap tuoi" name="age" class="form-control">
            </div>
            <div class="mb-3">
                <label for="">Image</label>
                <input type="file" placeholder="Nhap tuoi" name="image" class="form-control">
            </div>
            <button type="submit" class="btn btn-success">Them</button>
        </form>
    </div>
</body>

</html>