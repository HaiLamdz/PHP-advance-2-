## Bramus Router

Bramus Router là một thư viện PHP nhỏ gọn giúp bạn định tuyến (routing) các URL đến các hàm hoặc controller tương ứng, thường được dùng trong các ứng dụng PHP thuần

### 1. Cài đặt Bramus Router

```cmd
composer require bramus/router
```

### 2. Cách Sử Dụng Cơ Bản

```php
// index.php
<?php
require_once 'vendor/autoload.php';

// Khai báo router
use Bramus\Router\Router;
$router = new Router();

// Định nghĩa router
$router->get('/', function() {
    echo 'Trang chủ!';
});

// Chạy router
$router->run();
```

### 3. Router nhận tham số trên URL

```php
$router->get('/hello/{name}', function($name) {
    echo "Xin chào, $name!";
});

$router->get('/product/{id}', function($id) {
    echo "Sản phẩm có id: , $id";
});

$router->get('/detail-product/{name}/{id}', function($name, $id) {
    echo "Sản phẩm $name có id: , $id";
});
```

**Chú ý:** Nếu sử dụng máy chủ Apache phải có file _.htaccess_ để cấu hình chuyển hướng các request về index.php

```
RewriteEngine On

# Chuyển hướng tất cả yêu cầu đến index.php
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteRule ^ index.php [QSA,L]
```

### 4. Xử lý 404 Not Found

```php
$router->set404(function() {
    header('HTTP/1.1 404 Not Found');
    echo '404 - Không tìm thấy trang!';
});
```

### 5. Router theo RESTful API (GET, POST, PUT, PATCH, DELETE)

```php
$router->get('/api/items', function() {
    echo json_encode(['item1', 'item2']);
});

$router->post('/api/items', function() {
    echo 'Tạo mới item';
});

$router->put('/api/items/{id}', function($id) {
    echo "Cập nhật item với ID: $id";
});

$router->patch('/api/items/{id}', function($id) {
    echo "Cập nhật item với ID: $id";
});

$router->delete('/api/items/{id}', function($id) {
    echo "Xóa item với ID: $id";
});

```

### 6. Middleware

```php
$router->before('GET|POST', '/admin/.*', function() {
    session_start();
    if (!isset($_SESSION['user'])) {
        header('HTTP/1.1 403 Forbidden');
        echo 'Bạn không có quyền truy cập!';
        exit();
    }
});

```

### 7. Gom nhóm Router

```php

$router->mount('/prefix', function() use ($router) {
    $router->get('/route1', function() {
        // Xử lý route1
    });

    $router->post('/route2', function() {
        // Xử lý route2
    });
});
```

```php
$router->mount('/admin', function() use ($router) {
    $router->before('GET|POST|DELETE', '/.*', function() {
        // Giả sử kiểm tra token hoặc session
        echo "[Kiểm tra quyền truy cập admin] - ";
    });

    $router->get('/', function() {
        echo "Trang quản trị admin";
    });

    $router->get('/dashboard', function() {
        echo "Bảng điều khiển admin";
    });

    $router->delete('/user/{id}', function($id) {
        echo "Admin đã xóa user có ID: $id";
    });
});

```

### 8. Kết hợp Router gọi Controller và View

```php
require_once 'vendor/autoload.php';

use Bramus\Router\Router;
use App\Controllers\UserController;
use App\Controllers\AdminController;


$router = new Router();
// Cách 1
$router->get('/users', UserController::class . '@index');
// Cách 2
$router->get('/admins', 'App\Controllers\AdminController@index');

$router->run();
```
