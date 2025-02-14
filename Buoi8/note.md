package manager: trình quản lý gói của một ngôn nhữ nào đó

Giúp cài đặt, cập nhật, xóa các thư viện trong một dự án qua các câu lệnh

## Composer (package manager) là trình quản lý gói cảu PHP

composer init: khởi tạo dự án
composer require tenthuvien: Cài đặt thư viện mới (composer require bootstrap)
composer update: Cập nhập toàn bộ thư viện trong dự án
composer update tenthuvien: Cập nhập 1 thư viện cụ thể
composer remove tenthuvien: Xóa thư viện

file composer.json:
    - liệt kê tất cả các thư viện và version của nó đang cài đặt trong hệ thống

folder vender:
    - Nơi chưa mã nguồn của thư viện

folder src:
    - Nơi chưa mã nguồn của chúng ta


## Auto loading
