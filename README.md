# 🔐 Login Social - Hệ thống đăng nhập mạng xã hội

Dự án Laravel hỗ trợ đăng nhập bằng Google và Facebook OAuth, hiển thị thông tin sinh viên.

---

## 📋 Mục lục

- [Cài đặt](#cài-đặt)
- [Cấu hình OAuth](#cấu-hình-oauth)
- [Chức năng](#chức-năng)
- [Demo](#demo)

---

## 🚀 Cài đặt

### Yêu cầu
- PHP >= 8.1
- Composer
- Node.js & NPM
- XAMPP hoặc Laragon

### Các bước cài đặt

```bash
# 1. Clone project
git clone https://github.com/your-username/login-social.git
cd login-social

# 2. Cài đặt dependencies
composer install
npm install

# 3. Tạo file .env
cp .env.example .env

# 4. Tạo application key
php artisan key:generate

# 5. Cấu hình database trong .env
# Xem phần cấu hình bên dưới

# 6. Chạy migration
php artisan migrate

# 7. Chạy server
php artisan serve
```

### Cấu hình Database trong .env

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=login_social
DB_USERNAME=root
DB_PASSWORD=
```

Tạo database `login_social` trong phpMyAdmin trước khi chạy migration.

---

## 🔧 Cấu hình OAuth

### 1. Cấu hình Google OAuth

1. Truy cập [Google Cloud Console](https://console.cloud.google.com/)
2. Tạo project mới
3. Vào **APIs & Services** → **Credentials**
4. Tạo **OAuth client ID**
   - Application type: **Web application**
   - Authorized redirect URI: `http://localhost:8000/auth/google/callback`
5. Lấy `Client ID` và `Client Secret`
6. Thêm vào file `.env`:

```env
GOOGLE_CLIENT_ID=your-client-id
GOOGLE_CLIENT_SECRET=your-client-secret
GOOGLE_REDIRECT=http://localhost:8000/auth/google/callback
```

### 2. Cấu hình Facebook OAuth

1. Truy cập [Facebook Developers](https://developers.facebook.com/)
2. Tạo app mới
3. Vào **Settings** → **Basic**
4. Thêm Platform: **Website**
5. Lấy `App ID` và `App Secret`
6. Thêm vào file `.env`:

```env
FACEBOOK_CLIENT_ID=your-app-id
FACEBOOK_CLIENT_SECRET=your-app-secret
FACEBOOK_REDIRECT=http://localhost:8000/auth/facebook/callback
```

### 3. Cập nhật config/services.php

```php
'google' => [
    'client_id' => env('GOOGLE_CLIENT_ID'),
    'client_secret' => env('GOOGLE_CLIENT_SECRET'),
    'redirect' => env('GOOGLE_REDIRECT'),
],

'facebook' => [
    'client_id' => env('FACEBOOK_CLIENT_ID'),
    'client_secret' => env('FACEBOOK_CLIENT_SECRET'),
    'redirect' => env('FACEBOOK_REDIRECT'),
],
```

---

## ✨ Chức năng

| Chức năng | Mô tả |
|-----------|-------|
| Đăng nhập Google | Xác thực qua tài khoản Google |
| Đăng nhập Facebook | Xác thực qua tài khoản Facebook |
| Hiển thị thông tin | Hiển thị tên, email, mã sinh viên |
| Đăng xuất | Xóa session và quay về trang login |
| Bảo mật | Middleware xác thực người dùng |

---

## 📺 Demo

### Video hướng dẫn (3-5 phút)

Video demo quá trình:
1. **Đăng nhập Google** (1-2 phút)
   - Click nút "Đăng nhập với Google"
   - Chọn tài khoản Google
   - Chuyển hướng về trang thông tin

2. **Đăng nhập Facebook** (1-2 phút)
   - Click nút "Đăng nhập với Facebook"
   - Đăng nhập tài khoản Facebook
   - Cấp quyền truy cập
   - Chuyển hướng về trang thông tin

3. **Hiển thị thông tin cá nhân** (30 giây)
   - Hiển thị tên người dùng
   - Hiển thị email
   - Hiển thị mã sinh viên
   - Nút đăng xuất

### Screenshot

**Trang đăng nhập:**
- Giao diện đẹp với gradient background
- Hai nút đăng nhập Google và Facebook
- Hiệu ứng animation mượt mà

**Trang thông tin:**
- Avatar người dùng
- Tên, email, mã sinh viên
- Nút đăng xuất

---

## 🖼️ Ảnh Demo

| Trang đăng nhập | Đăng nhập Google | Trang thông tin cá nhân |
|---|---|---|
| ![Trang đăng nhập](https://raw.githubusercontent.com/NguyenDat-1010/Login_GG_FB/master/screenshots/login.png) | ![Đăng nhập Google](https://raw.githubusercontent.com/NguyenDat-1010/Login_GG_FB/master/screenshots/google.png) | ![Trang thông tin cá nhân](https://raw.githubusercontent.com/NguyenDat-1010/Login_GG_FB/master/screenshots/home.png) |

---

## 📝 License

MIT License.

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
