# 🚀 Laravel API Auth

[![Latest Stable Version](https://img.shields.io/packagist/v/mahbubur508/api-auth.svg?style=flat-square)](https://packagist.org/packages/mahbubur508/api-auth)
[![Total Downloads](https://img.shields.io/packagist/dt/mahbubur508/api-auth.svg?style=flat-square)](https://packagist.org/packages/mahbubur508/api-auth)
[![License](https://img.shields.io/packagist/l/mahbubur508/api-auth.svg?style=flat-square)](https://packagist.org/packages/mahbubur508/api-auth)

A lightweight and secure REST API Authentication package for Laravel powered by **Laravel Sanctum**. Quickly add user registration, login, logout, and authenticated profile endpoints to your Laravel applications with minimal setup.

---

## ✨ Features

* 🔐 Laravel Sanctum powered authentication
* 🚀 Ready-to-use API endpoints
* 👤 User Registration
* 🔑 User Login
* 🚪 User Logout
* 🙍 Authenticated User Profile
* ⚙️ Configurable route prefixes
* 🎟️ Customizable token names
* 📦 Plug-and-play installation
* 📄 Consistent JSON responses

---

## 📋 Requirements

* PHP 8.1+
* Laravel 10.x / 11.x / 12.x
* Laravel Sanctum

---

## 📦 Installation

Install the package via Composer:

```bash
composer require mahbubur508/api-auth
```

---

## ⚙️ User Model Configuration

Ensure your `User` model uses Sanctum's `HasApiTokens` trait:

```php
<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens;
}
```

---

## 🗄️ Run Migrations

```bash
php artisan migrate
```

---

## 🔧 Publish Configuration

```bash
php artisan vendor:publish --tag="api-auth-config"
```

This will create:

```text
config/api-auth.php
```

---

## ⚙️ Configuration

```php
return [

    /*
    |--------------------------------------------------------------------------
    | Authentication Route Prefix
    |--------------------------------------------------------------------------
    */

    'prefix' => 'api/v1/auth',

    /*
    |--------------------------------------------------------------------------
    | Sanctum Token Name
    |--------------------------------------------------------------------------
    */

    'token_name' => 'api_auth_token',

];
```

---

## 🚀 API Endpoints

> Add the following header to all requests:

```http
Accept: application/json
```

### 📝 Register User

**Endpoint**

```http
POST /api/v1/auth/register
```

**Request Body**

```json
{
    "name": "John Doe",
    "email": "john@example.com",
    "password": "password123",
    "password_confirmation": "password123"
}
```

---

### 🔑 Login User

**Endpoint**

```http
POST /api/v1/auth/login
```

**Request Body**

```json
{
    "email": "john@example.com",
    "password": "password123"
}
```

---

### 👤 Get Authenticated User

**Endpoint**

```http
GET /api/v1/auth/me
```

**Headers**

```http
Authorization: Bearer {access_token}
```

---

### 🚪 Logout User

**Endpoint**

```http
POST /api/v1/auth/logout
```

**Headers**

```http
Authorization: Bearer {access_token}
```

---

## 📄 Example Response

### Successful Login

```json
{
    "success": true,
    "message": "Login successful",
    "data": {
        "user": {
            "id": 1,
            "name": "John Doe",
            "email": "john@example.com"
        },
        "token": "1|xxxxxxxxxxxxxxxxxxxxxxxxxxxxx"
    }
}
```

---

## 🔒 Security Recommendations

For production environments:

* Enable HTTPS
* Configure CORS properly
* Use secure password validation
* Apply API rate limiting
* Rotate tokens when necessary

---

## 🛠 Customization

Change route prefix and token name from:

```php
config/api-auth.php
```

Example:

```php
'prefix' => 'api/auth',
'token_name' => 'my_custom_token',
```

---

## 📄 License

The MIT License (MIT). See [LICENSE](LICENSE) for details.

---

## 👨‍💻 Author

### Md. Mahbubur Rahman

Full-Stack Developer

* Laravel
* React.js
* Next.js
* REST APIs
* Docker & DevOps

---

## ❤️ Support

If you find this package useful, please consider:

⭐ Starring the repository

🐛 Reporting issues

🚀 Contributing improvements

---

**Made with ❤️ by Md. Mahbubur Rahman**
