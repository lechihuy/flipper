# Cài đặt
## Yêu cầu
- PHP 7.4 trở lên
- MySQL 5.7 trở lên
- Git
- Composer

## Tiến hành
- Chạy các lệnh sau tại đường dẫn lưu source code:
```
git clone https://github.com/lechihuy/flipper.git
cd flipper
composer install
php artisan key:generate
cp .env.example .env
```

- Vào phpMyadmin hoặc dùng lệnh MySQL để tạo database `flipper` với character set `utf8mb4` và collate là `utf8mb4_unicode_ci`.  

- Sau đó tại đường dẫn thư mục `flipper` chạy lệnh:
```
php artisan app:reset
```