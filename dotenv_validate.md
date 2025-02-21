## Thư viện vlucas/phpdotenv

Thư viện phpdotenv giúp bạn quản lý biến môi trường trong PHP bằng cách lưu các biến trong tệp _.env_ và truy cập chúng trong mã PHP

Điều này giúp bạn tránh việc lưu thông tin nhạy cảm (như mật khẩu database, API key) trực tiếp vào mã nguồn.

**1. Cài đặt**

```php
composer require vlucas/phpdotenv
```

**2. Tạo file .env vào thư mục gốc**

```
APP_NAME=MyApp
DB_NAME=mydatabase
DB_USER=root
DB_PASS=secret
DB_HOST=localhost
DB_DRIVE=pdo_mysql
DB_PORT=3306

BASE_URL=http://localhost:8080/WD19315/B12/
```

**3. Nạp biến môi trường trong PHP**

```php
// index.php
require_once 'vendor/autoload.php';
use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

// Lấy biến môi trường
echo $_ENV['APP_NAME'];
```

## Thư viện Rakit/Validation

- kiểm tra dữ liệu đầu vào trong PHP
- hữu ích khi làm việc với biểu mẫu, API hoặc bất kỳ nơi nào cần xác thực dữ liệu.

**1. Cài đặt**

```cmd
composer require rakit/validation
```

**2. Cách sử dụng**

```php
require 'vendor/autoload.php';

use Rakit\Validation\Validator;

$validator = new Validator;

$validation = $validator->make([
    'name'  => 'John',
    'email' => 'invalid-email',
    'age'   => '20'
], [
    'name'  => 'required|min:3',
    'email' => 'required|email',
    'age'   => 'required|integer|min:18'
]);

$validation->validate();

if ($validation->fails()) {
    print_r($validation->errors()->firstOfAll());
} else {
    echo "Dữ liệu hợp lệ!";
}

```

**3. Bảng Các Rule Thường Dùng**

| Rule                 | Mô tả                                              |
| -------------------- | -------------------------------------------------- |
| **required**         | Trường bắt buộc                                    |
| **email**            | Kiểm tra email hợp lệ                              |
| **min:X**            | Giá trị tối thiểu (chuỗi/số)                       |
| **max:X**            | Giá trị tối đa (chuỗi/số)                          |
| **between:X,Y**      | Giá trị nằm giữa X và Y                            |
| **integer**          | Phải là số nguyên                                  |
| **numeric**          | Phải là số (bao gồm float)                         |
| **boolean**          | Phải là `true` hoặc `false`                        |
| **date**             | Phải là ngày hợp lệ                                |
| **after:date**       | Phải sau ngày cụ thể                               |
| **before:date**      | Phải trước ngày cụ thể                             |
| **regex:/pattern/**  | Kiểm tra theo biểu thức chính quy                  |
| **in:val1,val2**     | Giá trị phải thuộc danh sách                       |
| **not_in:val1,val2** | Giá trị không được thuộc danh sách                 |
| **url**              | Phải là URL hợp lệ                                 |
| **same:field**       | Giá trị phải giống một field khác                  |
| **confirmed**        | Kiểm tra password có trùng `password_confirmation` |
| **array**            | Phải là mảng                                       |
| **alpha**            | Chỉ chứa chữ cái                                   |
| **alpha_num**        | Chỉ chứa chữ cái và số                             |
| **alpha_dash**       | Chỉ chứa chữ cái, số, dấu gạch ngang (-, \_)       |
