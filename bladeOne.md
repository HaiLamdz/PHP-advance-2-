## Template Engine (bộ máy xử lý mẫu)

**Template Engine** là một công cụ giúp tách biệt giao diện (HTML) và logic (PHP, JavaScript, v.v.) trong lập trình web.

Nó giúp bạn viết mã dễ đọc hơn, dễ bảo trì hơn và tránh việc trộn lẫn quá nhiều mã PHP vào HTML

Ví dụ so sánh

```php
<!-- Không sử dụng template engine -->
<ul>
    <?php foreach ($users as $user): ?>
        <li><?php echo $user; ?></li>
    <?php endforeach; ?>
</ul>

<!-- Sử dụng template engine -->
<ul>
    @foreach ($users as $user)
        <li>{{ $user }}</li>
    @endforeach
</ul>
```

**Lợi ích:**

- Tách biệt logic & giao diện → Dễ bảo trì hơn
- Cú pháp đơn giản → Viết ít code PHP hơn
- Tăng hiệu suất → Hỗ trợ cache
- Bảo mật tốt hơn → Hạn chế lỗi XSS bằng cú pháp `{{ $data }}`

## BladeOne

BladeOne là một thư viện PHP độc lập (một template engine), cho phép bạn sử dụng hệ thống template Blade.

**1. Cài đặt**

```cmd
composer require eftec/bladeone
```

**2. Cấu hình BladeOne**

```php
// index.php
<?php
require 'vendor/autoload.php';

use eftec\bladeone\BladeOne;

$views = __DIR__ . '/views'; // Thư mục chứa file .blade.php
$cache = __DIR__ . '/cache'; // Thư mục chứa file cache
// Chú ý: nên sử dụng biến môi trường
// Ví dụ: ROOT_PATH=C:/xampp/htdocs/WD19311/B10/

$blade = new BladeOne($views, $cache, BladeOne::MODE_AUTO);

```

**_Các chế độ hoạt động của BladeOne_**
_MODE_AUTO_ : Tự động cập nhật cache nếu file template thay đổi.
_MODE_SLOW_ : Chỉ cập nhật cache khi xóa thủ công.
_MODE_FAST_ : Tạo cache một lần, không cập nhật lại.
_MODE_DEBUG_ : Không sử dụng cache, phù hợp khi phát triển.

**_Cách hoạt động của BladeOne với cache_**
Khi chạy BladeOne sẽ:

- **Đọc file Blade template** (ví dụ: home.blade.php).
- **Chuyển đổi file này thành PHP thuần** (biên dịch sang một file cache .bladec).
- **Lần sau khi chạy**, nếu file template không thay đổi, BladeOne sẽ dùng file cache thay vì biên dịch lại.

**Kết quả:** Trang load nhanh hơn vì không phải biên dịch lại template mỗi lần.

**3. Tạo Template Blade**

```php
<!-- views/home.blade.php -->
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang Chủ</title>
</head>
<body>
    <h1>Xin chào, {{ $name }}</h1>
</body>
</html>

```

**4. Gọi view trong Controller**

```php
echo $blade->run("home", ["name" => "Người dùng"]);
```

**5. Sử dụng các tính năng của BladeOne**
_a. Kế thừa_

```php
@extends('layout')

@yield('title')
@section('title', 'Trang Chủ')

@yield('content')
@section('content')
@endsection

@include('header')
```

_b. Các cú pháp thông dụng_

```php
// Hiển thị dữ liệu
{{ $name }}
{!! $name !!}

// Vòng lặp
@foreach($users as $user)
    <p>{{ $user }}</p>
@endforeach

@for ($i = 1; $i <= 5; $i++)
    <p>Item {{ $i }}</p>
@endfor

// Điều kiện
@if(count($users) > 0)
    <p>Có người dùng</p>
@else
    <p>Không có người dùng</p>
@endif
```
