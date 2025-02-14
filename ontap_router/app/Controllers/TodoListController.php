<?php

namespace App\Controllers;

class TodoListController
{

    public function listTodo()
    {
        // session_start();
        // code xem danh sách TodoList
        var_dump($_SESSION['tasks']);
        // die;
        $tasks = $_SESSION['tasks'] ?? [];

        require_once "app/Views/list-todo.php";
    }
    public function addTodo()
    {
        // code hiển thị form thêm mới
        // echo 123;
        require_once "app/Views/add-todo.php";
    }
    public function addPostTodo()
    {
        // var_dump($_POST);die;
        // session_start();

        $task = $_POST['task'];
        $tasks = $_SESSION['tasks'] ?? [];

        $tasks[] = [
            'id' => count($tasks) + 1,
            'task' => $task
        ];

        $_SESSION['tasks'] = $tasks;
        // var_dump($_SESSION['tasks']);
        // die;
        header('Location: /PHP_advance_2/ontap_router/todo/list-todo');
        exit();
    }
    public function updateTodo($id)
    {
        // code hiển thị form chỉnh sửa
        // var_dump($id);die;
        $tasks = $_SESSION['tasks'] ?? [];
        $task = array_filter($tasks, fn($t) => $t['id'] == $id);
        $task = array_shift($task);
        // var_dump($task['task']);die;
        require_once "app/Views/update-todo.php";
    }
    public function updatePostTodo($id)
    {
        
        // var_dump($id); die();
        // code xử lý chỉnh sửa todo dựa trên $id truyền vào

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $newTask = $_POST['task'] ?? '';
            // var_dump($newTask);die;
            $id = (int)$id;
            $tasks = $_SESSION['tasks'] ?? [];
            if (!empty($newTask)) {
                foreach ($tasks as &$task) {
                    // var_dump($id);
                    // var_dump($task['id']);die;
                    if ($task['id'] === $id) {
                        // var_dump($id);die;
                        $task['task'] = $newTask;
                        break;
                    }
                }
                // var_dump($task['task']);die;
            }
            $_SESSION['tasks'] = $tasks;
            // var_dump($tasks);die;
            header('Location: /PHP_advance_2/ontap_router/todo/list-todo');
            exit();
        }
    }
    public function deleteTodo($id)
    {
        // code xem xóa todo theo $id truyền vào
        $_SESSION['tasks'] = array_filter($_SESSION['tasks'], fn($t) => $t['id'] != $id);
        header('Location: /PHP_advance_2/ontap_router/todo/list-todo');
    }
}
