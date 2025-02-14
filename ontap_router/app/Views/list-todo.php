<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css.css">
</head>

<body>
    <h3>List</h3>
    <a href="add-todo"><button class="btn btn-danger">Them Moi</button></a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">STT</th>
                <th scope="col">Task</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($tasks as $key=>$task){ ?>
            <tr>
                <th scope="row"><?= ++$key ?></th>
                <td><?= $task['task'] ?></td>
                <td><a href="update-todo/<?= $task['id'] ?>"><button>update</button></a></td>
                <td><a href="update-todo/<?= $task['id'] ?>"><button>delete</button></a></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>

</body>

</html>