
# Báo cáo Lab 1: Tìm hiểu Lập trình Hướng Đối Tượng

## Phần 1: Tìm hiểu lập trình hướng đối tượng

### 1. Lập trình hướng đối tượng là gì?
Lập trình hướng đối tượng (Object-Oriented Programming - OOP) là một phương pháp lập trình dựa trên khái niệm về "đối tượng" (object). Mỗi đối tượng bao gồm dữ liệu (thuộc tính) và các phương thức (hành vi) để thao tác với dữ liệu đó.

### 2. Class là gì? Object là gì? Điểm khác nhau cơ bản giữa class và object?
- **Class**: Là khuôn mẫu (template) định nghĩa thuộc tính và phương thức của đối tượng.
- **Object**: Là thể hiện cụ thể của một class.

**Khác biệt**:
- Class là định nghĩa, không chiếm tài nguyên trong bộ nhớ.
- Object là thể hiện cụ thể, chiếm tài nguyên trong bộ nhớ.

### 3. Thuộc tính, phương thức của một class là gì? Lấy ví dụ:
- **Thuộc tính**: Là dữ liệu (properties) đại diện cho trạng thái của đối tượng.
- **Phương thức**: Là hành động (methods) mà đối tượng có thể thực hiện.

**Ví dụ**:
```php
class Animal {
    public $name; // Thuộc tính
    public $gender; // Thuộc tính

    public function eat() { // Phương thức
        echo "Ăn Thịt";
    }
}
```

---

## Phần 2: Tìm hiểu 4 tính chất của lập trình hướng đối tượng

### 1. Tính kế thừa trong OOP là gì? Lấy ví dụ bằng code PHP:
- Tính kế thừa (Inheritance) cho phép lớp con sử dụng lại thuộc tính và phương thức của lớp cha.

**Ví dụ**:
```php
class Animal {
    public $name;

    public function eat() {
        echo "Ăn Tạp";
    }
}

class Lion extends Animal {
    public function eat() {
        echo "Ăn Thịt";
    }
}

$Lion = new Lion();
$Lion->eat(); // Output: Ăn Thịt
```

### 2. Access modifiers là gì? Phân biệt các loại Access modifiers:
- **Access Modifiers**: Là các phạm vi truy cập dùng để kiểm soát quyền truy cập vào thuộc tính và phương thức.

**Các loại**:
- **Public**: Truy cập mọi nơi.
- **Protected**: Truy cập trong class và class con.
- **Private**: Chỉ truy cập trong class.

### 3. Tính đóng gói trong OOP là gì? Lấy ví dụ bằng code PHP:
- Tính đóng gói (Encapsulation) là việc che giấu dữ liệu bên trong đối tượng, chỉ cung cấp quyền truy cập thông qua các phương thức.

**Ví dụ**:
```php
class ATM{
    private $STK;
    private $maPin;

    public function changePass($newPass){
        if(strlen(($newPass) > 8)){
            $this->maPin = $newPass;
        }
    }

}
$atm = new ATM;

$atm->changePass('123'); // Đổi mật khẩu thất bại
```

### 4. Setter và Getter là gì? Lấy ví dụ bằng code PHP:
- **Setter**: Là phương thức thiết lập giá trị cho thuộc tính.
- **Getter**: Là phương thức lấy giá trị của thuộc tính.

**Ví dụ**:
```php
class Car {
    private $brand;

    public function setBrand($brand) { // setter
        $this->brand = $brand;
    }

    public function getBrand() { // getter
        return $this->brand;
    }
}

$car = new Car();
$car->setBrand("Toyota");
echo $car->getBrand(); // Output: Toyota
```

---
