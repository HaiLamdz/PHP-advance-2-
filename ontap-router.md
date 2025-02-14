## Ôn tập Route

**1. Thiết kế cấu trúc project như sau**

```
/B9
|
|--app
| |
| |--Controllers
| | |--TodoListController.php
| |
| |--Views
| | |--list-todo.php
| | |--add-todo.php
| | |--update-todo.php
|
|--index.php
|--composer.php
|--.htaccess
|--vendor
```

**2. Xây dựng các route đảm bảo cấu trúc như sau**

```php
// http://localhost:8080/WD19311/B9/todo/list-todo (GET)
// http://localhost:8080/WD19311/B9/todo/add-todo (GET|POST)
// http://localhost:8080/WD19311/B9/todo/update-todo/1 (GET|POST)
// http://localhost:8080/WD19311/B9/todo/delete-todo/1 (GET)
```

**3. Quản lý danh sách todo trong TodoListController**

```php
class TodoController {

    public function listTodo(){
        // code xem danh sách TodoList
    }
    public function addTodo(){
        // code hiển thị form thêm mới
    }
    public function addPostTodo(){
        // code xử lý thêm todo nhập từ form vào trong mảng $tasks
    }
    public function updateTodo($id){
        // code hiển thị form chỉnh sửa
    }
    public function updatePostTodo($id){
        // code xử lý chỉnh sửa todo dựa trên $id truyền vào
    }
    public function deleteTodo($id){
        // code xem xóa todo theo $id truyền vào
    }
}
```

**4. Viết trang giao diện html**
Xây dựng các trang giao diện: list-todo.php, add-todo.php, update-todo.php để hiển thị giao diện từng chức năng tương ứng

**5. Lưu trữ dữ liệu**

```php
// index.php
session_start();

$tasks = [
    ['id' => 1, 'task' => 'Học PHP cơ bản'],
    ['id' => 2, 'task' => 'Tìm hiểu về Bramus Router'],
    ['id' => 3, 'task' => 'Ôn lại cách tạo Controller']
];

// Lưu biến $tasks vào session
$_SESSION['tasks'] = $tasks;

```
