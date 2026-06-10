# Laravel REST API Authentication Package (using Sanctum)

[![Latest Stable Version](https://img.shields.io/packagist/v/mahbubur508/api-auth.svg?style=flat-square)](https://packagist.org/packages/mahbubur508/api-auth)
[![Total Downloads](https://img.shields.io/packagist/dt/mahbubur508/api-auth.svg?style=flat-square)](https://packagist.org/packages/mahbubur508/api-auth)
[![License](https://img.shields.io/packagist/l/mahbubur508/api-auth.svg?style=flat-square)](https://packagist.org/packages/mahbubur508/api-auth)

A robust, secure, and plug-and-play REST API Authentication package for Laravel applications using **Laravel Sanctum**. It provides built-in, ready-to-use controllers and endpoints for user management (Register, Login, Logout, and Profile Details) with clean JSON responses.

---

## Features

- **Fast & Lightweight:** Built on top of official Laravel Sanctum.
- **Pre-configured Routes:** No need to write manual authentication routes.
- **Customizable:** Easily change route prefixes and token names via config.
- **Standard API Responses:** Clean and predictable JSON response structures.

---

## Installation

### Step 1: Install the Package via Composer

Run the following command in your Laravel project root:

```bash
composer require mahbubur508/api-auth
```
### Step 2: Configure Your User Model
- **Ensure your App\Models\User model includes the HasApiTokens trait from Laravel Sanctum.
  <?php
  namespace App\Models;
  
  use Illuminate\Foundation\Auth\User as Authenticatable;
  use Laravel\Sanctum\HasApiTokens; // <--- Import this
  
  class User extends Authenticatable
  {
      use HasApiTokens; // <--- Add this trait
  }

### Step 3: Run Database Migrations

```bash
php artisan migrate
```

### Step 4: Publish Config File

```bash
 php artisan vendor:publish --tag="api-auth-config"
```

-** This will create a config file at config/api-auth.php.

Configuration (config/api-auth.php)

return [
    // Change your API Authentication endpoints prefix
    'prefix' => 'api/v1/auth',

    // Change the token identifier name
    'token_name' => 'api_auth_token',
];

API Endpoints & Usage
Always add Accept: application/json in your request headers.

1. User Registration
Endpoint: POST /api/v1/auth/register


  JSON
  {
      "name": "John Doe",
      "email": "john@example.com",
      "password": "password123",
      "password_confirmation": "password123"
  }

  2. User Login
    Endpoint: POST /api/v1/auth/login
    {
      "email": "john@example.com",
      "password": "password123"
    }


    3. Get Authenticated User Profile (Protected)
Endpoint: GET /api/v1/auth/me

Headers: Authorization: Bearer {your_access_token}

4. User Logout (Protected)
Endpoint: POST /api/v1/auth/logout

Headers: Authorization: Bearer {your_access_token}

📄 License
The MIT License (MIT). See LICENSE for details.

Made with ❤️ by Mahbub — Dhaka, Bangladesh
